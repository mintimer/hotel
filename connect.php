<?php
    $con=mysqli_connect("tergeo.serveo.net:3307","root","","hotel");
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL:".mysqli_connect_error();
    }
?> 