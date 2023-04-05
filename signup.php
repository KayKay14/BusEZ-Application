<?php
include("connection.php");
include("login.php");

if(isset($POST['submit'])){
$first_name = $_POST['f_name'] ;
$last_name = $_POST['l_name'];
$email = $_POST['email'];  
$password = $_POST['password']; 
$user_type = $_POST['user_type'];
$phone_num = $_POST['phone_num'];
$encrypted_pwd=md5($password);

//insert data into table
$sql = " insert into users(f_name, l_name, email, password, user_type, phone_num) VALUES ('$first_name', '$last_name',
'$email','$password','$user_type','$phone_num')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
 } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 }


}
$conn->close();


?>