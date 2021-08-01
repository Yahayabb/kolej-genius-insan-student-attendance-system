<?php

//header.php

include('admin/database_connection.php');
session_start();

if(!isset($_SESSION["teacher_id"]))
{
  header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kolej GENIUS Insan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style1.php">
  <link rel="stylesheet" href="headercolor1.php">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap4.min.js"></script>
</head>
<body style = "background:url(https://i.ibb.co/twRhgqJ/Background1.png);">
    <div class="rect">

      <img class= "img" src="https://www.tryimg.com/u/2021/07/29/KGI-logo-Transparent-Long.png" alt="\kgi\" width= "200px"/>
      <img class= "img1" src="https://daulahedu.com/wp-content/uploads/2018/03/LOGO-USIM-OPTION1.png" width= "240px" />

      <h1 class="kolej">Kolej GENIUS Insan </h1>
        <h1 class="kolej">Student Attendance System </h1>
      </div>

<div class="jumbotron-small text-center" style="margin-bottom:0">

</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="profile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="attendance.php">Attendance</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" style= "float:right;"> <font color="red">Logout</font></a>
      </li>  
    </ul>
  </div>  
</nav>
