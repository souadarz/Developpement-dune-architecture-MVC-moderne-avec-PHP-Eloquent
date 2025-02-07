<?php
namespace App\core;
class Controller{

    public function getView($view, $data= [])
    {
    
        return View::render($view, $data);
    }
}