<?php
  $username = $_POST['username'];
  $password = $_POST['password'];
  if ($username === 'admin' && $password === 'password') {
    session_start();
    $_SESSION['logged_in'] = true;
    header('Location: dashboard.php');
  } else {    
    echo "Invalid username or password";
  }
?>
