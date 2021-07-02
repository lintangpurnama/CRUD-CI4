<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo "hello world!";
    }

    public function about($name = "", $umur = 0)
    {
        echo "ini method about saya bernama $name dan ber umur $umur";
    }
    public function test()
    {
        echo "ini method tse";
    }
}
