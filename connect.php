<?php
    $con=mysqli_connect("127.0.0.7","root","","hotel");
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL:".mysqli_connect_error();
    }
?> 