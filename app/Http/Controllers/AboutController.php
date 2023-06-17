<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
	public function about(){
		$title = "Toko Kami";

		return view('FE.about.about')->with('title', $title);
	}
}
