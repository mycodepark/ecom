<?php

namespace App\Http\Controllers\Site;

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
    public function show()
    {
        $about = $this->aboutRepository->listAbout();

        return view('site.pages.about', compact('about'));
    }




}
