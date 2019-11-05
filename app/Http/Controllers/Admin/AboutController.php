<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Contracts\AboutContract;
use App\Http\Controllers\BaseController;

/**
 * Class AboutController
 * @package App\Http\Controllers\Admin
 */
class AboutController extends BaseController
{
    /**
     * @var AboutContract
     */
    protected $aboutRepository;

    /**
     * AboutController constructor.
     * @param AboutContract $aboutRepository
     */
    public function __construct(AboutContract $aboutRepository)
    {
        $this->aboutRepository = $aboutRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $about = $this->aboutRepository->listAbout();

        $this->setPageTitle('Hakkımızda', 'Hakkımızda sayfası');
        return view('admin.about.index', compact('about'));
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        $about = $this->aboutRepository->findAboutById(1);

        $this->setPageTitle('Hakkımızda', 'Hakkımızda Sayfası Düzenle');
        return view('admin.about.edit', compact('about'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name'      =>  'required',
            'image'     =>  'mimes:jpg,jpeg,png|max:1000'
        ]);

        $params = $request->except('_token');

        $about = $this->aboutRepository->updateAbout($params);

        if (!$about) {
            return $this->responseRedirectBack('Hakkımızda sayfası güncellenirken hata oluştu.', 'error', true, true);
        }
        return $this->responseRedirectBack('Hakkımızda sayfası başarıyla güncellendi.' ,'success',false, false);
    }


}
