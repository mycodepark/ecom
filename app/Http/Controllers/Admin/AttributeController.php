<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Contracts\AttributeContract;

class AttributeController extends BaseController
{
    /**
     * @var AttributeContract
     */
    protected $attributeRepository;

    /**
     * AttributeController constructor.
     * @param AttributeContract $attributeRepository
     */
    public function __construct(AttributeContract $attributeRepository)
    {
        $this->attributeRepository = $attributeRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $attributes = $this->attributeRepository->listAttributes();

        $this->setPageTitle('Özellikler', 'Özellikler listesi');
        return view('admin.attributes.index', compact('attributes'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $this->setPageTitle('Özellikler', 'Yeni özellik ekle');
        return view('admin.attributes.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'code'          =>  'required',
            'name'          =>  'required',
            'frontend_type' =>  'required'
        ]);

        $params = $request->except('_token');

        $attribute = $this->attributeRepository->createAttribute($params);

        if (!$attribute) {
            return $this->responseRedirectBack('Yeni özellik eklenirken hata meydana geldi.', 'error', true, true);
        }
        return $this->responseRedirect('admin.attributes.index', 'Yeni özellik başarıyla eklendi.' ,'success',false, false);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $attribute = $this->attributeRepository->findAttributeById($id);

        $this->setPageTitle('Özellikler', 'Özellik Düzenle : '.$attribute->name);
        return view('admin.attributes.edit', compact('attribute'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'code'          =>  'required',
            'name'          =>  'required',
            'frontend_type' =>  'required'
        ]);

        $params = $request->except('_token');

        $attribute = $this->attributeRepository->updateAttribute($params);

        if (!$attribute) {
            return $this->responseRedirectBack('Özellik güncellenirken hata oluştu.', 'error', true, true);
        }
        return $this->responseRedirectBack('Özellik başarıyla güncellendi.' ,'success',false, false);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $attribute = $this->attributeRepository->deleteAttribute($id);

        if (!$attribute) {
            return $this->responseRedirectBack('Özellik silinirken hata oluştu.', 'error', true, true);
        }
        return $this->responseRedirect('admin.attributes.index', 'Özellik başarıyla silindi.' ,'success',false, false);
    }
}
