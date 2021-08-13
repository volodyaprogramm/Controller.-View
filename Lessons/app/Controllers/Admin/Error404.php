<?php
namespace App\Controllers\Admin;
use Core\View;

class Error404
{
    public function index()
    {
       View::view('Error404');
    }
}