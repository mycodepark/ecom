<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use App\Contracts\CarouselContract;
use App\Contracts\CategoryContract;

class HomeController extends Controller
{

    protected $carouselRepository;
    protected $categoryRepository;

    public function __construct(CarouselContract $carouselRepository, 
                                CategoryContract $categoryRepository)
    {
        $this->carouselRepository = $carouselRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function show()
    {
        $carousels = $this->carouselRepository->listCarousels();
        $categories = $this->categoryRepository->listCategories();

        return view('site.pages.homepage', compact('carousels', 'categories'));
    }
    




}
