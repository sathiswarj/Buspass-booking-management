<?php 

include "config.php"; 

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `user_tbl` WHERE `id`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        header('location:buspasslist.php');

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>

