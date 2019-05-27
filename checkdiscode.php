
<?php
    require 'connect.php';
    session_start();
    $discountcode = $_REQUEST["q"];
    $sql = "SELECT * FROM discountinfo WHERE DiscountCode = '$discountcode'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    $_SESSION['percent'] = $row['DiscountPercent'];
    $endusedate = strtotime($row['EndUsingDate']);
    $checkdate = ceil(($endusedate-time())/60/60/24);
    if(strlen($_SESSION['percent'])>0){
        if($checkdate < 0)
            echo ': This code is expired.';
        else echo ': '.$_SESSION['percent']." % Discount Avaliable ".$checkdate." Day(s) left.";
    }else
        echo ": Incorrect discount code.";
?>
