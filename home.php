<?php
require_once("includes/connection.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Student Result System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script  src = "js/search.js"> </script>
    

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
<div class="content">
 

    
    <div class="container" >

    <!-- Sarch bar -->
    <!-- Load icon library -->


<!-- The form -->
<form class="example" action="index.php">
  <input type="text" placeholder="Search.." name="search" id ="mysearch" onkeyup="searchfun()">
  <!-- <button type="submit"><i class="fa fa-search"></i></button> -->
</form>

  

    <table  class = "table table-striped table-bordered table-sm" cellspacing="0"
  width="100%" id = "mytable">
    <tr>
    <th>No</th>
    <th>ID</th>
    <th>Name</th>
    <th>Class</th>
    <th>Physiss</th>
    <th>Chemisty</th>
    <th>Biology</th>
    <th>Math</th>
    <th>History</th>
    <th>Geography</th>
    <th>technology</th>
    <th>business</th>
    
    <th>Actions</th>
   
    </tr>
    <tr>
    <?php
    
    $sql = "SELECT * from results";
    $query = mysqli_query($db, $sql);
    $count = 0;

   while( $row = mysqli_fetch_array($query)){
     $count++;
   
   ?>
   
    </tr>

    <tr>
    <td> <?php echo $count ?> </td>
    <td> <?php echo $row['id'];?> </td>
    <td> <?php echo $row['name'];?> </td>
    <td><?php echo $row['Class'];?></td>
    <td><?php echo $row['physics'];?></td>
    <td><?php echo $row['chemistry'];?></td>
    <td><?php echo $row['biology'];?></td>
    <td><?php echo $row['math'];?></td>
    <td><?php echo $row['history'];?></td>
    <td><?php echo $row['geography'];?></td>
    <td><?php echo $row['technology'];?></td>
    <td><?php echo $row['business'];?></td>

   
    <!-- <td><a href="update.php?user=<?php echo $row['id'];?>" > Update</a></td>
    <td><a href="delete.php?user=<?php echo $row['id'];?>" > delete</a></td> -->
    
     <td><a href="update.php?user=<?php echo $row['id'];?>" ><button  class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"> </i></button> </a>                                         
   <a href="delete.php?user=<?php echo $row['id'];?>" ><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></td> </a>
   </td>
                                             
    </tr>
   <?php } //end of loop?>
    
    </table>
    </div>


    <!-- content div -->
    </div>
   
</body>
</html>