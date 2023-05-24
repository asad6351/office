<?php session_start();
  
if(isset($_SESSION['email'])) {
     echo " ";
}else{
    echo "<script> window.location = 'login.php';</script>";
}

 ?>

<!DOCTYPE html>
<html lang="en">

 <head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/lnr-icon.css">

<link rel="stylesheet" href="assets/css/font-awesome.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<title> Codimasters Office Management System </title>

 <?php @include('db.php');?>