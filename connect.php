<?php
    $con=mysqli_connect("purgati.serveo.net:3307","root","","hotel");
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL:".mysqli_connect_error();
    }else echo "Connect Success";
?> 