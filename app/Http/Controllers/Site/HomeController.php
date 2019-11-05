<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use App\Contracts\CarouselContract;
use App\Contracts\CategoryContract;
use App\Contracts\ProductContract;
use App\Contracts\AttributeContract;

class HomeController extends Controller
{

    protected $carouselRepository;
    protected $categoryRepository;
    protected $productRepository;
    protected $attributeRepository;

    public function __construct(CarouselContract $carouselRepository, 
                                CategoryContract $categoryRepository,
                                ProductContract $productRepository,
                                AttributeContract $attributeRepository)
    {
        $this->carouselRepository = $carouselRepository;
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
        $this->attributeRepository = $attributeRepository;
    }

    public function show()
    {
        $carousels = $this->carouselRepository->listCarousels();
        $categories = $this->categoryRepository->listCategories();
        $products = $this->productRepository->listProducts();
        //$attributes = $this->attributeRepository->listAttributes();

        //return view('site.pages.homepage', compact('products', 'attributes'));
        return view('site.pages.homepage', compact('carousels', 'categories', 'products'));

        /*admin.product.index
        $products = $this->productRepository->listProducts();

        $this->setPageTitle('Products', 'Products List');
        return view('admin.products.index', compact('products'));
        */
    }
    




}
