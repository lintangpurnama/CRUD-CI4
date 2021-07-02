<?php

namespace App\Controllers;



class Pages extends BaseController
{
    public function index()
    {
        echo view('layout/Header');
        echo view('layout/navbar');

        echo view('pages/Home');
        echo view('layout/Footer');
        // echo "ini controles admin metod index";
    }
    public function about()
    {
        echo view('layout/Header');
        echo view('layout/navbar');

        echo view('pages/About');
        echo view('layout/Footer');
        // echo "ini controles admin metod index";
    }
}
