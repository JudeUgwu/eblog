<?php 

require_once "../config/config.php"; 
require_once "../core/Database.php";
require_once "../controllers/Category.php";

if(!empty($_POST["type"]) && $_POST["type"] == "deleteCategory"){
    extract($_POST);

    $response = [];
    $result = Category::deleteOneById($id);

    if($result){
        $response = ["message"=>"Category Successfully Delete","status"=>"success"];
    }else{
        $response = ["message"=>"Category Failed To Delete ","status"=>"error"];
    }

    echo json_encode($response);

}