<?php

namespace App\Controllers;

class Komik extends BaseController
{
    public function index()
    {
        $komik = $this->komikModel->findall();
        $data = [
            'title' => 'Daftar Komik',
            'komik' => $komik
        ];

      
        return view('komik/index',$data);
    }
}