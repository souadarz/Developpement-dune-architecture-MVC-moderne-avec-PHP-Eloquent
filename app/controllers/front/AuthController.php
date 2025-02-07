<?php
namespace App\controllers\front;

use App\core\Controller;

class AuthController extends Controller{

    public function showLogin(){
        $this->getView('Auth/login');
    }

    public function showRegiter(){
    }
}
