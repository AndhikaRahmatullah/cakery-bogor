<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
	public function product(){
		$title = "Produk";

		return view('FE.product.product')->with('title', $title); 
}

}
