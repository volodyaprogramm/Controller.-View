<?php
namespace Core;
use App\Controllers\Home\Index;
use App\Controllers\Admin\Error404;


final class Router
{
    private $href;

    public function __construct()
    {
        $this->href = $_SERVER['PATH_INFO'];
    }

    public function run()
    {
        if ($this->href ) {
            $classNamespace = 'App\Controllers\Home\\' . ucfirst(ltrim($this->href, '/'));
            if (class_exists($classNamespace)) {
                $classObj = new $classNamespace;
            } else {
                $classObj = new Error404();
            }
        }else{
            $classObj = new Index();
        }
        $classObj->index();
    }
}
?>