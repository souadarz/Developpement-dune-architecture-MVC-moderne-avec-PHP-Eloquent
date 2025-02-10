<?php
namespace App\models;
use Illuminate\Database\Eloquent\Model;

class Auth extends Model{

    public static function emailExists($email)
    {
        return self::where('email', $email)->exists();
    }

    public static function createUser($name, $email, $password, $role)
    {
        return self::create([
            'name' => $name,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'role' => $role
        ]);
    }

    public static function getUserByEmail($email)
    {
        return self::where('email', $email)->first();
    }

    
}