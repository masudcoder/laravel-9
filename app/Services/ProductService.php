<?php

namespace App\Services;
use DB;

class ProductService
{
	
	function getProducts()
	{
		return DB::Table("products")->take(10)->get();
	}
}