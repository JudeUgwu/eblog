<?php

class Helper{


    public static function see($data = [],$kill = false){
      echo "<pre>";
      print_r($data);
      if($kill) {die();}
    } 


    public static function uploadImage($imageArray){

      extract($imageArray);
      $splittedImageName = explode(".",$name);
      $imageExtension = end($splittedImageName);
      $newName = sha1(uniqid()).sha1(uniqid()).".".$imageExtension;
      $absolute_image_path = APP_URL."assets/images/posts/$newName";
      $result =  move_uploaded_file($tmp_name,"../assets/images/posts/$newName");
      if($result){
        return $absolute_image_path;
      }else{
        return "";
      }
    }

}