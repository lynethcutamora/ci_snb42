<?php
  session_start();

  if(!isset($_SESSION['Start&Boost'])){
    include("content.php"); 
  }else{
    header('location:dashboard/index.php'); }

?>