<?php
session_start();

$title = $_REQUEST['title'];
$description = $_REQUEST['description'];
$deadline = $_REQUEST['deadline'];

$errors = [];

if(empty($title)){
    $errors['title_error'] = "title is requird";
}else if(strlen($title) > 60){
    $errors['title_error'] = "r koto";
}

// descrption valodetion
if(empty($description))
    {
        $errors['description_error'] = "description is requird";
    }

// errors occured
if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
    $_SESSION['old'] = $_REQUEST;
    header("Location: ../index.php");
}else{
    include "../database/env.php";
    $query = "INSERT INTO `todos`( `title`, `description`, `deadline` ) VALUES ('$title','$description','$deadline')";
     $res = mysqli_query($conn, $query);

     if($res){
        $_SESSION['msg'] = [
            "type" => "success",
            "msg" => "Todo added successfully"
        ];
        header("Location: ../all-todo.php");
     }
    
  
}