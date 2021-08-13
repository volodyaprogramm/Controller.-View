<?php
namespace App\Controllers\Home;
use Core\View;

class Index extends Main
{
    public function index()
    {
        View::view('Index');
    }
}
