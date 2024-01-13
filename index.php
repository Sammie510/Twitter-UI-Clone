<?php
session_start();

include "dataBase.php";
  if(isset($_SESSION['user_id'])){
  header("Location: homepage.php?login==success");
  }else{
  header("Location: signin.php");
  }

?>