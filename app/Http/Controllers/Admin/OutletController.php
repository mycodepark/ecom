<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Contracts\OutletContract;
use App\Http\Controllers\BaseController;

/**
 * Class OutletController
 * @package App\Http\Controllers\Admin
 */
class OutletController extends BaseController
{
    /**
     * @var OutletContract
     */
    protected $outletRepository;

    /**
     * OutletController constructor.
     * @param OutletContract $outletRepository
     */
    public function __construct(OutletContract $outletRepository)
    {
        $this->outletRepository = $outletRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $outlets = $this->outletRepository->listOutlets();

        $this->setPageTitle('Mağazalar', 'Mağaza listesi');
        return view('admin.outlets.index', compact('outlets'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $this->setPageTitle('Mağazalar', 'Yeni Mağaza Oluştur');
        return view('admin.outlets.create');
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

        $outlet = $this->outletRepository->createOutlet($params);

        if (!$outlet) {
            return $this->responseRedirectBack('Yeni mağaza oluşturulurken hata meydana geldi.', 'error', true, true);
        }
        return $this->responseRedirect('admin.outlets.index', 'Yeni mağaza başarıyla eklendi.' ,'success',false, false);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $outlet = $this->outletRepository->findOutletById($id);

        $this->setPageTitle('Mağazalar', 'Mağaza Düzenle : '.$outlet->name);
        return view('admin.outlets.edit', compact('outlet'));
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

        $outlet = $this->outletRepository->updateOutlet($params);

        if (!$outlet) {
            return $this->responseRedirectBack('Mağaza güncellenirken hata oluştu.', 'error', true, true);
        }
        return $this->responseRedirectBack('Mağaza başarıyla güncellendi.' ,'success',false, false);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $outlet = $this->outletRepository->deleteOutlet($id);

        if (!$outlet) {
            return $this->responseRedirectBack('Mağaza silinirken hata oluştu.', 'error', true, true);
        }
        return $this->responseRedirect('admin.outlets.index', 'Mağaza başarıyla silindi.' ,'success',false, false);
    }
}
