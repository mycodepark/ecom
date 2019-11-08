<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Contracts\AboutContract;
use App\Http\Controllers\BaseController;

/**
 * Class ContactController
 * @package App\Http\Controllers\Admin
 */
class ContactController extends BaseController
{
    /**
     * @var AboutContract
     */
    protected $aboutRepository;


    /**
     * ContactController constructor.
     * @param AboutContract $aboutRepository
     */
    public function __construct(AboutContract $aboutRepository)
    {
        $this->aboutRepository = $aboutRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        $contact = $this->aboutRepository->listAbout();

        return view('site.pages.contact', compact('contact'));
    }



    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      =>  'required|max:191',
            'email'     =>  'required|email',
            'subject'   =>  'required|max:191',
            'message'   =>  'required',
        ]);
        
        $params = $request->except('_token');
        
        $message = $this->aboutRepository->createMessage($params);
            
        if (!$message) {
            //return $this->responseRedirectBack('Mesaj gönderilirken hata meydana geldi.', 'error', true, true);
            return redirect('/iletisim')->with('error', 'Mesaj gönderilirken hata meydana geldi.');

        }
        //return $this->responseRedirect('Mesaj başarıyla gönderildi.' ,'success',false, false);
        return redirect('/iletisim')->with('success', 'Mesaj başarıyla gönderildi.');
    }




}
