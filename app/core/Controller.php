<?php
namespace App\core;
class Controller{
    public function render($view, $data = [])
    {
        
        extract($data);
        include __DIR__ . '/../views/' .$view. '.php';
    }
}