<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Contracts\AboutContract;
use App\Contracts\CategoryContract;
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
    protected $categoryRepository;


    /**
     * AboutController constructor.
     * @param AboutContract $aboutRepository
     */
    public function __construct(AboutContract $aboutRepository, CategoryContract $categoryRepository)
    {
        $this->aboutRepository = $aboutRepository;
        $this->categoryRepository = $categoryRepository;

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        $about = $this->aboutRepository->listAbout();
        $categories = $this->categoryRepository->listCategories();


        return view('site.pages.about', compact('about', 'categories'));
    }




}
