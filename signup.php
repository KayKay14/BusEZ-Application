
<?php

/*echo"<h1>runnig signup php</h1>";*/
if(isset($_POST['submit'])){
    echo"/n submit set\n";
    $first_name = $_POST['f_name'] ;
    $last_name = $_POST['l_name'];
    $email = $_POST['email'];  
    $password = $_POST['password']; 
    $user_type = $_POST['user_type'];
    $phone_num = $_POST['phone_num'];
    $encrypted_pwd=md5($password);

}else{
    echo"/n submit not set\n";
}
 
/*
$conn = mysqli_connect('localhost', 'root', '', 'BusEZdb');

$sql = "INSERT INTO user (f_name,lname,email,encrypted_pwd, usertype, phone-num) VALUES('$first_name','$last_name', '$email','$password','$user_type','$phone_num')";

if($conn->query($sql)=== TRUE){
    echo "New record added successfully";
    
}else{
    echo "Error:". $sql . "<br>" . $conn->error;
}
*/

    $conn = new mysqli('localhost','root','','busezdb');
    if($conn->connect_error){
        die('Connection failed  : ' .$conn->connect_error);    
    }else{
        $sql = "INSERT INTO user (f_name,l_name,email,encrypted_pwd,user_type,phone_num) VALUES('$first_name','$last_name', '$email','$password','$user_type','$phone_num')";


    }

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";

    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 
    


    //$conn->close();

?>