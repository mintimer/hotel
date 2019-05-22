<html>
<head>
<title>Home After login</title>
</head>
<body>
    <?php
        include('connect.php');

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
            echo "Login success <br> Welcome ".$row['Username'];
            
        }else{
            echo "Failed to login.";
        }
        
        ?>
  
    <!-- <style>
            #book {
                width: 6em;
                border: 2px solid rgb(0, 87, 128);
                background: white;
                border-radius: 5px;
                
            }
            #review {
                width: 6em;
                border: 2px solid rgb(0, 87, 128);
                background: white;
                border-radius: 5px;
                
            }
            a {
                display: block;
                width: 100%;
                line-height: 2em;
                text-align: center;
                text-decoration: none;
                border-radius: 5px;
            }
            a:hover {
                color: black;
                background: rgb(5, 214, 5);
            }
    </style> -->
    
    <form action="booking_form.php" method="POST">
            <input type="hidden" name="u_firstname" value=<?php echo $namee['firstname'];?>>
            <input type="hidden" name="u_lastname" value=<?php echo $namee['lastname'];?>>
            <input type="hidden" name="u_id" value=<?php echo $namee['userid'];?>>
            <input type="submit" value="Booking">
    </form>
    <form action="review_form.php" method="POST">
            <input type="hidden" name="u_firstname" value=<?php echo $namee['firstname'];?>>
            <input type="hidden" name="u_lastname" value=<?php echo $namee['lastname'];?>>
            <input type="hidden" name="u_id" value=<?php echo $namee['userid'];?>>
            <input type="submit" value="Review">
    </form>
        
    <?php mysqli_close($con); ?>
</body>
</html>