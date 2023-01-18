<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('main/home');
	}

	public function about()
	{
		return view('main/about');
	}
	
}
