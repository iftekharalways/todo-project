
<?php
session_start();
include "../database/env.php";
$id = $_REQUEST['id'];
$query = "UPDATE `todos` SET `is_complete`='1' WHERE id = $id ";
$res = mysqli_query($conn, $query);

if($res){
        $_SESSION['msg'] = [
            "type" => "success",
            "msg" => "Task completed successfully!"
        ];
        header("Location: ../all-todo.php");
     }
