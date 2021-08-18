<?php 

class Database{

  private static $connection = null;
  private static $databaseName = "eblog";
  private static $databaseUser = "root";
  private static $databasePassword = "root";
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

  /**
   * @desc this function add a record to any table in the database
   * @param string sql statment
   * @return boolean
   */
  public static function insert($sql)
  {
    if(!empty($sql)){
       $result = self::getInstance()->query($sql);
       if($result){
         return true;
        }else{
          return false;
        }
    }else{
      return false;
    }
  }

  /**
   * @desc This function returns a single record from any database table
   * @param string sql statment
   * @return array fetched data
   */
  public static function fetchOne($sql){
    if(!empty($sql)){
 
      $result = self::getInstance()->query($sql);
      if($result->num_rows > 0){
         return (object) $result->fetch_assoc();
      }else{
        return [];
      }
    }else{
      return [];
    }
  }


    /**
   * @desc This function returns a all record from any database table
   * @param string sql statment
   * @return array fetched data
   */
  public static function fetchAll($sql){
    if(!empty($sql)){
      $result = self::getInstance()->query($sql);
      if($result->num_rows > 0){
        $rows  = [];
        while($data = $result->fetch_assoc()){
          $rows[] = (object) $data;
        }

        return $rows;
      }else{
        return [];
      }
    }else{
      return [];
    }
  }



    /**
   * @desc this function updates a record to any table in the database
   * @param string sql statment
   * @return boolean
   */
  public static function updateRecord($sql)
  {
    if(!empty($sql)){
       $result = self::getInstance()->query($sql);
       if($result){
         return true;
        }else{
          return false;
        }
    }else{
      return false;
    }
  }




}