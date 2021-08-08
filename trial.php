<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$db_select = mysqli_select_db($conn, 'hono');
if (!$db_select) {
    die("Database selection failed: " . mysqli_error($conn));
}

if (isset($_POST['save'])) {
       
          $name = stripslashes($_POST['name']);
          $phone = stripslashes($_POST['phone']);
          $email = stripslashes($_POST['email']);
          $category = stripslashes($_POST['category']);
          $start = stripslashes($_POST['start']);
          $end = stripslashes($_POST['end']);
          $status = stripslashes($_POST['status']);
          $terminate = stripslashes($_POST['termination']);
          $reason = stripslashes($_POST['reason']);
          $created = stripslashes($_POST['created']);
          //$today = date('d-m-y');
      $_SESSION['mail'] = $email;
       
        if($status == 'Active'){
           $sql = "INSERT INTO active_contracts SET name='$name',phone='$phone',email='$email', category='$category', start='$start', end='$end',status='$status',created='$created'";
            if(mysqli_query($conn, $sql)){

              //$msg = "Registration Successful ";
              //$msg_class = "alert-success";
              echo "success";
            } else {
            echo"failed";
              //$msg = "Unsuccessful";
              //$msg_class = "alert-danger";
           }
              
        }
        elseif($status == 'Ended'){
           $sql = "INSERT INTO ended_contracts SET name='$name',phone='$phone',email='$email', category='$category', start='$start', end='$end',status='$status',created='$created'";
        if(mysqli_query($conn, $sql)){
            
          //$msg = "Registration Successful ";
          //$msg_class = "alert-success";
          echo "success";
        } else {
        echo"failed";
          //$msg = "Unsuccessful";
          //$msg_class = "alert-danger";
       }
        }
    
        elseif($status == 'Termination'){
           $sql = "INSERT INTO term_contracts SET name='$name',phone='$phone',email='$email', category='$category', start='$start', end='$end',status='$status',terminate='$terminate',reason='$reason', created='$created'";
        if(mysqli_query($conn, $sql)){
            
          //$msg = "Registration Successful ";
          //$msg_class = "alert-success";
          echo "success";
        } else {
        echo"failed";
          //$msg = "Unsuccessful";
          //$msg_class = "alert-danger";
       }
        }
   }
?>