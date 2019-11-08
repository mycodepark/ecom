<?php

namespace App\Http\Controllers\Site;

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
    public function show()
    {
        $outlets = $this->outletRepository->listOutlets();

        return view('site.pages.outlet', compact('outlets'));
    }




}
