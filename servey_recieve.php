<?php
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET
  $name = htmlspecialchars($_POST['name']);
  $email  = htmlspecialchars($_POST['email']);
  $age  = htmlspecialchars($_POST['age']);
  $platform  = htmlspecialchars($_POST['platform']);
  $lang  = htmlspecialchars($_POST['lang']);

  echo  $name, ' ', $email;
?>
