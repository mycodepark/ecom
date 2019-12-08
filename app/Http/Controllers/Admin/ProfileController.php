<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

use App\Contracts\ProfileContract;
use App\Http\Controllers\BaseController;
use App\Http\Requests\UpdateProfileFormRequest;
use App\Http\Requests\StoreProfileFormRequest;

use App\Rules\MatchOldPassword;
use App\Models\Admin;
use Validator;


class ProfileController extends BaseController
{
    protected $profileRepository;

    public function __construct(
        ProfileContract $profileRepository
        
    )
    {
        $this->profileRepository = $profileRepository;
        $this->middleware('auth');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //dd(Auth::user()->id);
        $profile = $this->profileRepository->findProfileById(Auth::user()->id);

        $this->setPageTitle('Profil', 'Profil sayfası');
        return view('admin.profiles.index', compact('profile'));
    }




    public function update(UpdateProfileFormRequest $request)
    {
        $params = $request->except('_token');
        
        $profile = $this->profileRepository->updateProfile($params);

        if (!$profile) {
            return $this->responseRedirectBack('Profil bilgileri güncellenirken hata oluştu.', 'error', true, true);
        }
        return $this->responseRedirect('admin.profiles.index', 'Profil bilgileri başarıyla güncellendi.' ,'success',false, false);
    }



    public function avatarUpdate(Request $request)
    {
        $this->validate($request, [
            'avatar'     =>  'mimes:jpg,jpeg,png|max:1000'
        ]);

        $params = $request->except('_token');
        
        $profile = $this->profileRepository->avatarUpdate($params);

        if (!$profile) {
            return $this->responseRedirectBack('Profil resmi güncellenirken hata oluştu.', 'error', true, true);
        }
        return $this->responseRedirect('admin.profiles.index', 'Profil resmi başarıyla güncellendi.' ,'success',false, false);
    }


    public function store(StoreProfileFormRequest $request)
    {
        $params = $request->except('_token');
        
        $profile = $this->profileRepository->createProfile($params);

        if (!$profile) {
            return $this->responseRedirectBack('Error occurred while creating profile.', 'error', true, true);
        }
        return $this->responseRedirect('admin.profiles.index', 'profile added successfully' ,'success',false, false);
    }    


    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => new MatchOldPassword,
        ])->validate();

        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            //'new_password' => 'required|min:6|regex:/^(?=\S*[a-z])(?=\S*[!@#$&*])(?=\S*[A-Z])(?=\S*[\d])\S*$/',
            'new_password' => 'required|min:6|regex:/^(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/',
            'new_confirm_password' => 'same:new_password',
        ], [
            'current_password.required' => 'Eski şifreyi girmediniz.',
            'new_password.required'  => 'Yeni şifreyi girmediniz.',
            'new_password.min'  => 'Yeni şifre en az 6 karakter olmalıdır.',
            'new_password.regex'  => 'Yeni şifre büyük harf, küçük harf ve rakamlardan oluşmalıdır.',
            'new_confirm_password.same'  => 'Yeni şifreler uyuşmuyor.',
        ])->validate();

        if ( Admin::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]) ) {
            return $this->responseRedirect('admin.profiles.index', 'Şifre başarıyla güncellendi' ,'success',false, false);
        }
        return $this->responseRedirectBack('Şifre güncellenirken hata oluştu.', 'error', true, true);

    }








}
