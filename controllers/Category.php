<?php 

class Category extends Database{

    private static $id;
    private static $name;
    const TABLE_NAME = "categories";

    /**
     * @desc This function helps us add a single category record
     * @param string $name
     */
    public static function add($name = null){
      $sql = "INSERT INTO ".self::TABLE_NAME."(`name`) VALUES('$name')";
      $result =  self::insert($sql);
      return $result;
    }

    

        /**
     * @desc This function helps us check if a category already exists
     * @param string $name
     * @return bool
     */
    public static function exists($name = null){
        $sql = "SELECT * FROM ".self::TABLE_NAME." WHERE `name`='$name'";
      

        $result = self::fetchOne($sql);

        if(!empty($result)){return true;}else{return false;}
    }


    /**
     * @desc This function gets all the category in our program
     * @return Array categories
     */
    public static function getAll(){
        $sql = "SELECT * FROM ".self::TABLE_NAME." ORDER BY `created_at` DESC";
        $result = self::fetchAll($sql);
        return $result;
    }

    /**
     * @desc This function helps get one category by the id
     * @param integer id
     * @return array of the category
     */
    public static function getOneById($id){

      $sql = "SELECT * FROM ".self::TABLE_NAME." WHERE `id`='$id'";
      $result = self::fetchOne($sql);
      return $result;

    }

      /**
     * @desc This function helps delete one category by the id
     * @param integer id
     * @return array of the category
     */
    public static function deleteOneById($id){

      $sql = "DELETE FROM ".self::TABLE_NAME." WHERE `id`='$id'";
      $result = self::delete($sql);
      return $result;

    }
    
    /**
   * @desc This function helps update a category
   * @param array data to updated
   * @return boolean 
   */
  public static function update($data){
    extract($data);
    $sql = "UPDATE ".self::TABLE_NAME." SET `name`='$name' WHERE `id`='$id'";
    $result = self::updateRecord($sql);
    return $result;


  }


}