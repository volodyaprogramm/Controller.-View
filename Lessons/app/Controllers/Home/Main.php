<?php
namespace App\Controllers\Home;
use Core\View;

abstract class Main
{
    public function head()
    {
        View::view('Main');

    }
}