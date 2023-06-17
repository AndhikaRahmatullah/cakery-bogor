<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function dashboard(){
		$title = "Beranda";
		$name = "Andhika";

		return view('FE.home.home', compact('title', 'name'));
	}

}
