<?php
namespace App\Controllers\Home;
use Core\View;

class About
{
    public function index()
    {
//        $arr = [
//            'key1'=>1,
//            'key2'=>2,
//            'key3'=>3
//        ];
        View::view('About');
    }
}