
<?php
    require 'connect.php';
    $discountcode = $_REQUEST["q"];
    $sql = "SELECT * FROM discountinfo WHERE DiscountCode = '$discountcode'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    $percent = $row['DiscountPercent'];
    if(strlen($percent)>0)
        echo ': '.$percent." % Discount";
    else echo ": Incorrect discount code.";
?>
