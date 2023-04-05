<?php
    include("connection.php");
    include("signup.php");

    if(isset($POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "select * from user where email = '$email' and password= '$password'";
        $result = mysqli_query($conn, $sqli);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1){
            header("Location:index.php");
        }else{
            echo '<script> window.location.href = "index.php"; alert("Login Failed. Invalid email or password")
            </script>';
        }
    }

    
?>  

