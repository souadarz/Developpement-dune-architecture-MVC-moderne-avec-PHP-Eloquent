<?php
namespace App\models;
use Illuminate\Database\Eloquent\Model;

 class User extends Model{
    protected $table = 'users';

    protected $fillable = ['name', 'email', 'password'];

    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    
    public function setName($name){
        $this->name = $name;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPassword($password){
        $this->password = $password;
    }
 }