<?php
require_once("includes/connection.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update - Student Result System</title>
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

if(isset($_GET['user'])){
    $uid = $_GET['user'];
   
}



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
    

if (empty($id) && empty($name) && empty($clas) && empty($physics) && empty($chemistry) &&  empty($bilogy) &&  empty($math) &&  empty($history) &&
empty($geography) &&  empty($technology) &&  empty($business)){
    ?>
   <script> alert("Fadlan Magaca sax ah gali")</script> 
   <?php
}

else{
    $sql = "UPDATE results SET id ='$id', name = '$name', Class ='$clas', physics='$physics', chemistry ='$chemistry',
    biology='$biology', math='$math', history='$history', geography= ' $geography', technology='$technology', business='$business' WHERE id='$uid'";
    $query =mysqli_query($db, $sql);
    $rows = mysqli_affected_rows($db); 
    if($rows>0){
        header("location: home.php");
    }
    else{
        ?>
        <script> alert("Data Not updated")</script> 
         
        <?php

    }
} 

}


?>
<div class="content">
 <div class="container">

    
   
    <?php
    
    $sql = "SELECT * from results where id='$uid' limit 1";
    $query = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($query);
   
   ?>
     <form method="post">

     

    
<label for="usr">ID:</label>
<input type="text" class="form-control" id="id" name ="id" value="<?php echo $row['id']?>">


<label for="pwd">Name:</label>
<input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']?>">


<label for="usr">Class:</label>
<input type="text" class="form-control" id="clas" name="class" value="<?php echo $row['Class']?>">

<input type="text" placeholder="Physics" id="clas" name="physics" value="<?php echo $row['physics']?>" style="margin-top:15px; width:24%;">
<input type="text" placeholder="Chemistry" id="clas" name="chemistry" value="<?php echo $row['chemistry']?>" style="margin-top:15px; width:24%; margin-left:10px;">
<input type="text" placeholder="Biology" id="clas" name="biology" value="<?php echo $row['biology']?>" style="margin-top:15px; width:24%;  margin-left:10px;">
<input type="text" placeholder="Math" id="clas"  name="math" value="<?php echo $row['math']?>" style="margin-top:15px; width:24%;  margin-left:10px;"> <br>

<input type="text" placeholder="History" id="clas" name="history" value="<?php echo $row['history']?>" style="margin-top:15px; width:24%;">
<input type="text" placeholder="Geograpgy" id="clas" name="geography" value="<?php echo $row['geography']?>" style="margin-top:15px; width:24%; margin-left:10px;">
<input type="text" placeholder="Technology" id="clas" name="technology" value="<?php echo $row['technology']?>" style="margin-top:15px; width:24%;  margin-left:10px;">
<input type="text" placeholder="Business" id="clas" name="business" value="<?php echo $row['business']?>" style="margin-top:15px; width:24%;  margin-left:10px;"> <br>

<input type = "submit" class="btn btn-success" name="btn"  style="margin-top:15px; width:100%;">


  </form>
   

    </div>
    <!-- content div -->
    </div>
    
</body>
</html>