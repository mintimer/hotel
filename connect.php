<?php
    $url="purgati.serveo.net:3307";
    $con=mysqli_connect($url,"root","","hotel");
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL:".mysqli_connect_error();
    }else echo "Connect Success";
?> 