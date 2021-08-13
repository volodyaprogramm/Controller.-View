<?php


namespace App\Controllers\Home;
use Core\View;


class AdminPanel
{
    public function index()
    {
        View::view('AdminPanel');
    }
}