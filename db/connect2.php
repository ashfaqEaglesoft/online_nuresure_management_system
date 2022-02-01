<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$password = filter_input(INPUT_POST, 'confrimpassword');
$password = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'userID');
$password = filter_input(INPUT_POST, 'Address');
$password = filter_input(INPUT_POST, 'Phonenumber');
if (!empty($username)){
if (!empty($password)){
if (!empty($confrimpassword)){
if (!empty($email)){
if (!empty($userID)){
if (!empty($Address)){
if (!empty($Phonenumber)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "ONMS";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword,$dbconfrimpassword, $email,$userID,$Address,$Phonenumber, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO register (username, password,confrimpassword,email,userID,Address,Phonenumber)
values ('$username','$password')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
}
?>


