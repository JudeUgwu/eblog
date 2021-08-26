<?php 

class User extends Database{

  private static $TABLE_NAME = 'users';


  public static function register(){

  }

  public static function login($email,$password){
    $sql = "SELECT * FROM ".self::$TABLE_NAME." WHERE `email`='$email' AND `password`='$password'";
    return self::fetchOne($sql);
  }

    public static function resetPassword(){
    
  }

    public static function logout(){
    
  }
}

