<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use App\Contracts\CarouselContract;
use App\Contracts\CategoryContract;
use App\Contracts\ProductContract;

class HomeController extends Controller
{

    protected $carouselRepository;
    protected $categoryRepository;
    protected $productRepository;

    public function __construct(CarouselContract $carouselRepository, 
                                CategoryContract $categoryRepository,
                                ProductContract $productRepository)
    {
        $this->carouselRepository = $carouselRepository;
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }

    public function show()
    {
        $carousels = $this->carouselRepository->listCarousels();
        $categories = $this->categoryRepository->listCategories();
        $products = $this->productRepository->listProducts();

        return view('site.pages.homepage', compact('carousels', 'categories', 'products'));
    }
    




}
