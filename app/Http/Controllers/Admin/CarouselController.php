<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Contracts\CarouselContract;
use App\Http\Controllers\BaseController;

/**
 * Class CarouselController
 * @package App\Http\Controllers\Admin
 */
class CarouselController extends BaseController
{
    /**
     * @var CarouselContract
     */
    protected $carouselRepository;

    /**
     * CarouselController constructor.
     * @param CarouselContract $carouselRepository
     */
    public function __construct(CarouselContract $carouselRepository)
    {
        $this->carouselRepository = $carouselRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $carousels = $this->carouselRepository->listCarousels();

        $this->setPageTitle('Slaytlar', 'Slayt listesi');
        return view('admin.carousels.index', compact('carousels'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $this->setPageTitle('Slaytlar', 'Yeni Slayt Oluştur');
        return view('admin.carousels.create');
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
            'image'     =>  'mimes:jpg,jpeg,png|max:1000'
        ]);

        $params = $request->except('_token');

        $carousel = $this->carouselRepository->createCarousel($params);

        if (!$carousel) {
            return $this->responseRedirectBack('Yeni slayt oluşturulurken hata meydana geldi.', 'error', true, true);
        }
        return $this->responseRedirect('admin.carousels.index', 'Yeni slayt başarıyl eklendi.' ,'success',false, false);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $carousel = $this->carouselRepository->findCarouselById($id);

        $this->setPageTitle('Slaytlar', 'Slayt Düzenle : '.$carousel->name);
        return view('admin.carousels.edit', compact('carousel'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name'      =>  'required|max:191',
            'image'     =>  'mimes:jpg,jpeg,png|max:1000'
        ]);

        $params = $request->except('_token');

        $carousel = $this->carouselRepository->updateCarousel($params);

        if (!$carousel) {
            return $this->responseRedirectBack('Slayt güncellenirken hata oluştu.', 'error', true, true);
        }
        return $this->responseRedirectBack('Slayt başarıyla güncellendi.' ,'success',false, false);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $carousel = $this->carouselRepository->deleteCarousel($id);

        if (!$carousel) {
            return $this->responseRedirectBack('Slayt silinirken hata oluştu.', 'error', true, true);
        }
        return $this->responseRedirect('admin.carousels.index', 'Slayt başarıyla silindi.' ,'success',false, false);
    }
}
