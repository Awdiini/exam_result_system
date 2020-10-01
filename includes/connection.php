<?php

$db = mysqli_connect("localhost","root","", "somcoders");


if($db){
    return true;
}
else{
    echo "connection bad";
}
?>