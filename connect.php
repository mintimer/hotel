<?php
    // $server="vesper.serveo.net";
    $con=mysqli_connect("vesper.serveo.net","root","","hotel");
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL:".mysqli_connect_error();
    }else echo "Connect Success";
?> 