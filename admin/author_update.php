<?php
require "../connection.php";
// if($conn){
// echo "ok";}
// else{
//     echo "not connected";
// }
if(isset($_POST['name'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $sql = "UPDATE `division` SET `name` = '$name' WHERE `id` = $id";
    $result = $conn->query($sql);
    if($result){
        echo "ok";
    }
    else{
        echo "not ok";
    }
}

?>