

<?php
    echo"<h1>runnig login php</h1>";
  /*
    $email = $_POST['email'];  
    $password = $_POST['password'];  
    $conn = mysqli_connect('localhost', 'root', '', 'BusEZdb');


    $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password);  


        $sql = "select *from signup where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
   
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid email or password.</h1>";  
        }  
        
        */
?>  

















*/

   /* $email = $_POST['email'];
    $password = $_POST['password'];

    //connection
    $con = new mysqli("host","localhost", "root", " ", "application database");
    if($con->connect_error){
        die("Failed to connect : ".$con->connect_error);
    
    }else{
        $stmt = $con->prepare("select* from signup where email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = -> $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password']=== $password){
                echo "Logged in Sucessfully!!!"
            }else{
                echo "Invalid email or password"
            }

        }else {
            echo "Invalid email or password"
        }
    }*/

?>