<?php
require_once("includes/connection.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Record - Student Result System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="header">
  <a href="#default" class="logo text-light" >Maamuus System</a>
  <div class="header-right">
   
    <a href="#about" style="color:red;" class="fa fa-sign-out">Logout</a>
  </div>
</div>


<!-- The sidebar -->
<div class="sidebar">
  <a class="active" href="index.php">Dashboard</a>
  <a href="insert_user.php">Add user</a>
  <!-- <a href="#contact">Contact</a>
  <a href="#about">About</a> -->
</div>

<!-- Page content -->


<?php
if (isset($_POST['btn'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $clas = $_POST['class'];
    $physics = $_POST['physics'];
    $chemistry = $_POST['chemistry'];
    $biology = $_POST['biology'];
    $math = $_POST['math'];
    $history = $_POST['history'];
    $geography = $_POST['geography'];
    $technology = $_POST['technology'];
    $business = $_POST['business'];
   

if (empty($id) || empty($name)){
    ?>
   <script> alert("Fadlan Magaca sax ah gali")</script> 
   <?php
}
else{
    $sql = "INSERT into results (id, name, Class, physics, chemistry, biology, math, history, geography, technology, business) 
    value('$id', '$name', '$clas', '$physics','$chemistry','$biology','$math','$history','$geography','$technology','$business')";
    $query =mysqli_query($db, $sql);
    if($query){
        header("location: index.php");
    }
    else{
        ?>
        <script> alert("Data Not Inserted into database")</script> 
        <?php

    }
}

}


?>
    
    <div class="content">
    <div class="container">
    <form method="post">

    

    
  <label for="usr">ID:</label>
  <input type="text" class="form-control" id="id" name ="id">


  <label for="pwd">Name:</label>
  <input type="text" class="form-control" id="name" name="name">


  <label for="usr">Class:</label>
  <input type="text" class="form-control" id="clas" name="class">

  <input type="text" placeholder="Physics" id="clas" name="physics" style="margin-top:15px; width:24%;">
  <input type="text" placeholder="Chemistry" id="clas" name="chemistry" style="margin-top:15px; width:24%; margin-left:10px;">
  <input type="text" placeholder="Biology" id="clas" name="biology" style="margin-top:15px; width:24%;  margin-left:10px;">
  <input type="text" placeholder="Math" id="clas"  name="math" style="margin-top:15px; width:24%;  margin-left:10px;"> <br>
  
  <input type="text" placeholder="History" id="clas" name="history" style="margin-top:15px; width:24%;">
  <input type="text" placeholder="Geograpgy" id="clas" name="geography" style="margin-top:15px; width:24%; margin-left:10px;">
  <input type="text" placeholder="Technology" id="clas" name="technology" style="margin-top:15px; width:24%;  margin-left:10px;">
  <input type="text" placeholder="Business" id="clas" name="business" style="margin-top:15px; width:24%;  margin-left:10px;"> <br>

  <input type = "submit" class="btn btn-success" name="btn"  style="margin-top:15px; width:100%;">

  
    </form>
    </div>
    <!-- content div -->
    </div>
</body>
</html>