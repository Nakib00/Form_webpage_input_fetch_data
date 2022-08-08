<?php
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['message'])){
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
  
    $sql = "INSERT INTO user_comment (fname,lname,email,messagee) VALUES ('$first_name', '$last_name', '$email', '$message')";
  
    if(mysqli_query($conn, $sql)){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      successfull your comment post.
      </div>';
    }else{
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Your comments dose not post.
      </div>';
    }
  }

?>