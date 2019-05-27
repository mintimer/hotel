<?php
    include('connect.php');
    $sql="INSERT INTO guestinfo
          VALUES(NULL,'".$_POST['email']."','".$_POST['fName']."','".$_POST['lName']."','".$_POST['phone']."')";
    mysqli_query($con,$sql) or die(mysqli_error($con));
    mysqli_close($con);
    header("Location: welcome.php");
?>