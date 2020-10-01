<?php
require_once("includes/connection.php")

if(isset($_GET['user'])){

    $id = $_GET['user'];
    $sql = "DELETE from results where id ='$id'";
    $d_query = mysqli_query($db, $sql);
    if ($d_query){
        ?>
        <script> alert("Data  Deleted")</script> 
        <?php
        header ("location: home.php");
        

    }
    else{
        ?>
        <script> alert("Data Not Deleted")</script> 
        <?php

    }
}
?>