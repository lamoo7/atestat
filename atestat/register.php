<?php

$conn = new mysqli("localhost","root","", "atestat");

if ($conn->connect_error) {
	echo "err";
  die("Connection failed: " . $conn->connect_error);
}
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['pwd'];

$sql_add_user = "INSERT INTO users ( username, email, password) VALUES ('".$username."','".$email."','".$password."');";
$result = $conn->query($sql_add_user);
if ($result){
	header('Location: succes.php');
} else {
	echo $result->error;
}

$sql = "SELECT * from users WHERE username = '".$username."' AND pwd = '".$password."'";
$result = $conn->query($sql);
/*
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
*/
?>