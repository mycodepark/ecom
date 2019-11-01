<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use App\Contracts\ProductContract;
use App\Contracts\AttributeContract;

class HomepageController extends Controller
{

    protected $productRepository;

    protected $attributeRepository;

    public function __construct(ProductContract $productRepository, AttributeContract $attributeRepository)
    {
        $this->productRepository = $productRepository;
        $this->attributeRepository = $attributeRepository;
    }

    public function show()
    {
        $products = $this->productRepository->listProducts();
        //$attributes = $this->attributeRepository->listAttributes();

        //return view('site.pages.homepage', compact('products', 'attributes'));
        return view('site.pages.homepage', compact('products'));

        /*admin.product.index
        $products = $this->productRepository->listProducts();

        $this->setPageTitle('Products', 'Products List');
        return view('admin.products.index', compact('products'));
        */
    }
    




}
