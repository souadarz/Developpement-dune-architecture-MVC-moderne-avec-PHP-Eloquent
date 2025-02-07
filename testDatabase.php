<?php 
require_once __DIR__ .'/vendor/autoload.php';
require_once __DIR__ . '/config/bootstrap.php';

use App\models\User;
try {
    // $user = User::all();
    $user = new User();
    
    // echo $user[0]->getName();
    $user->setName('ayoub');
    $user->setEmail('ayoub@gmail.com');
    $user->setPassword('bbb');
    $user->save();
    echo "hh" ;
    echo User::count() ;
} catch(\Exception $e){
    echo 'eror';
}