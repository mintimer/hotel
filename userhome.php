<html>
<head>
<title>Home After login</title>
</head>
<body>
        <!-- // $con=mysqli_connect("vesper.serveo.net","root","","hotel");
        // if(mysqli_connect_errno()){
        //     echo "Failed to connect to MySQL:".mysqli_connect_error();
        // }else echo "Connect Success<br>";

        // $username = mysqli_real_escape_string($con,$_POST['user']);
        // $password = mysqli_real_escape_string($con,$_POST['pass']);

        // $result = mysqli_query($con,"SELECT * FROM memberinfo 
        //                         WHERE Username = '$username' and 
        //                         Password = '$password' ")
        //         or die("Failed to query database ".mysql_error());

        // $row = mysqli_fetch_array($result);
        // if($row['Username'] == $username && $row['Password'] == $password){
        //     // $name = mysqli_query($con,"SELECT firstname FROM memberinfo WHERE Username = '$username'");
        //     // echo "Login success <br> Welcome ".$name;
        // }else{
        //     echo "Failed to login.";
        // // }
        // // mysqli_close($con); -->
  
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
            <input type="hidden" name="u_firstname" value="dummyfirstname">
            <input type="hidden" name="u_lastname" value="dummylastname">
            <input type="hidden" name="u_id" value="dummyID">
            <input type="submit" value="Booking">
    </form>
    <form action="review_form.php" method="POST">
            <input type="hidden" name="u_firstname" value="dummyfirstname">
            <input type="hidden" name="u_lastname" value="dummylastname">
            <input type="hidden" name="u_id" value="dummyID">
            <input type="submit" value="Review">
    </form>

</body>
</html>