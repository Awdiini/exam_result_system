<?php
if (isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

   if($username=="admin" && $password=="admin"){
    header("location: home.php");
   
   }

   else{
    echo "Qalad baa jidha.";
}

    


}


?>