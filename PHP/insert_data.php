<?php
  
  include_once $_SERVER['DOCUMENT_ROOT']."/connect.php";

  $id = $_POST['id'];
  $pass = $_POST['password'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $nationlity = $_POST['nationality'];

  $sql = "insert into members(id, name, pass, phone, nationality) values('$id', '$name', '$pass', '$phone', '$nationlity')";

  mysqli_query($dbcon,$sql);
?>