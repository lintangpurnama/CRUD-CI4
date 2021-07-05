<?php

namespace App\Controllers;



class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'HOME Lintang'
        ];
        
        return view('pages/Home',$data);
        
        // return "ini controles admin metod index";
    }
    public function about()
    {
         $data = [
            'title' => 'About Lintang'
        ];
        
        return view('pages/About',$data);
        
        // echo "ini controles admin metod index";
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'jl. marzuki 1',
                    'kota' => 'jakarta'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'jl. marzuki 11',
                    'kota' => 'jakarta'
                ]
            ]
        ];
        return view ('pages/Contact',$data);
    }
}