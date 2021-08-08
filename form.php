<?php
$error = NULL;
$msg = "";
$msg_class = "";

$db = mysqli_connect("localhost", "root", "", "hono");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $mail = mysqli_real_escape_string($db,$_POST['email']);
      $pd = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT Email FROM users WHERE Email = '$mail' and Password = '$pd'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("email");
         $_SESSION['login_user'] = $mail;
         $msg = "Login Successful Redirecting...";
         $msg_class = "alert-success";
         header("refresh:2;url=contact.php");
      }else {
         $msg = "Wrong Email or password";
         $msg_class = "alert-danger";
      }
   }