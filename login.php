<?php
session_start();

$servername = "localhost";
$username = "example_user";
$password = "SHEEr@z786";
$dbname = "example_database";
$table = "user_data";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//$user_name_data =$_POST['fname'];
//echo $user_name_data;
$email =$_POST['email2'];
//$user_type =$_POST['role'];
//$dob =$_POST['dob'];
$user_password =$_POST['password2'];

//echo $email; echo $user_password;
//$user_name_data =$_POST['name'];
$sql = "SELECT * FROM user_data where email ='$email' and user_password ='$user_password'";
//$select_data=mysqli_query("SELECT * FROM $table where email='$email' and user_password='$user_password'");
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);  

if ($count == 1) {
    $_SESSION['email']=$row['email'];
    $_SESSION['user_name']=$row['user_name_data'];
    $_SESSION['user_type']=$row['user_type'];
  echo "Login Success";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>