<?php
namespace App\core;
class View{
    public static function render($view, $data = [])
    {
        
        extract($data);
        include __DIR__ . '/../views/'.$view. '.php';
    }
}