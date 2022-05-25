<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;


class HomeController extends Controller
{
    
    public function __construct(ProductService  $productService) {

       $this->productService = $productService;

    }

    public function index()
    {

        $data['products'] =  $this->productService->getProducts(); 

        return view('home', ['data'=> $data]);    
        
    }
   
}
