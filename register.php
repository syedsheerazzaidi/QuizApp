<?php
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
$user_name_data =$_POST['fname'];
//echo $user_name_data;
$email =$_POST['email2'];
$user_type =$_POST['ele'];
$dob =$_POST['dob'];
$user_password =$_POST['password2'];
//$user_name_data =$_POST['name'];
$sql = "INSERT INTO $table (user_name_data, email, user_type,dob ,user_password)
VALUES ('$user_name_data', '$email', '$user_type','$dob','$user_password')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>