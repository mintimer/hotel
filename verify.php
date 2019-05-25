<?php
        require 'connect.php';
        $username = mysqli_real_escape_string($con,$_POST['user']);
        $password = mysqli_real_escape_string($con,$_POST['pass']);
        $result = mysqli_query($con,"SELECT * FROM memberinfo 
                                WHERE Username = '$username' and 
                                Password = '$password' ")
                or die("Failed to query database ".mysql_error());
        $row = mysqli_fetch_array($result);
        if($row['Username'] == $username && $row['Password'] == $password){
            $name = mysqli_query($con,"SELECT firstname,lastname,userid FROM memberinfo WHERE Username = '$username'");
            $namee = mysqli_fetch_array($name);
            echo $namee;
            $_SESSION['namee']=$namee;
            $_SESSION['message'] = "Welcome "." ".$namee['firstname'];
            header("Location: welcome.php");
            
        }else{
            echo "Failed to login.";
        }
        
?>