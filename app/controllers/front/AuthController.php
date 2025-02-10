<?php
namespace App\controllers\front;

use App\core\Controller;
use App\core\Session;
use App\models\User;
use App\models\Auth;

class AuthController extends Controller{

    public function showLogin(){
        $this->getView('Auth/login');
    }

    public function showRegiter(){
        $this->getView('Auth/register');
    }

    public function handelregister(){
        $data = [
            'name' => $_POST['name'] ?? '',
            'email' => $_POST['email'] ?? '',
            'password' => $_POST['password'] ?? '',
        ];

        if (Auth::emailExists($data['email'])) {
            $errors['email'] = "Cet email est deja exist.";
        }

        $role = User::count() === 0 ? 'admin' : 'user';
        $newUser = Auth::createUser($data['name'], $data['email'], $data['password'], $role);

        header('Location:Auth/login');
    }

    public function handelLogin(){

    }

    public static function logout()
    {
        Session::remove('user');
        Session::destroy();
        header('Location:Auth/login');
    }
}