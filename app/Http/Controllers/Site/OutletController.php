<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Contracts\OutletContract;
use App\Contracts\CategoryContract;
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
    protected $categoryRepository;


    /**
     * OutletController constructor.
     * @param OutletContract $outletRepository
     */
    public function __construct(OutletContract $outletRepository, CategoryContract $categoryRepository)
    {
        $this->outletRepository = $outletRepository;
        $this->categoryRepository = $categoryRepository;

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        $outlet = $this->outletRepository->listOutlets();
        $categories = $this->categoryRepository->listCategories();


        return view('site.pages.outlet', compact('outlet', 'categories'));
    }




}
