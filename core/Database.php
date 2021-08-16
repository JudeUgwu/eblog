<?php 

class Database{

  private static $connection = null;
  private static $databaseName = "eblog";
  private static $databaseUser = "root";
  private static $databasePassword = "";
  private static $host = "";

  /**
   * @desc This function gets a connection to our database
   * @return Object database connect
   */
  private static function getInstance(){
    if(empty(self::$connection)){
       self::$connection = new mysqli(self::$host,self::$databaseUser,self::$databasePassword,self::$databaseName);
       return self::$connection;
    }else{
      return self::$connection;
    }
  }


}