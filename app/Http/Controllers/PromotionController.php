<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromotionController extends Controller
{
	public function promotion(){
		$title = "Promo";

		return view('FE.promotion.promotion')->with('title', $title);
	}
}
