<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		echo "hello world!";
	}

	public function about()
	{
		echo "ini method about";
	}
	public function test()
	{
		echo "ini method tse";
	}
}
