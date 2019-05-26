
<?php
    require 'connect.php';
    $discountcode = $_REQUEST["q"];
    $sql = "SELECT * FROM discountinfo WHERE DiscountCode = '$discountcode'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    $percent = $row['DiscountPercent'];
    $endusedate = strtotime($row['EndUsingDate']);
    $checkdate = ceil(($endusedate-time())/60/60/24);
    if(strlen($percent)>0){
        if($checkdate < 0)
            echo ': This code is expired.';
        else echo ': '.$percent." % Discount Avaliable ".$checkdate." Day(s) left.";
    }else
        echo ": Incorrect discount code.";
?>
