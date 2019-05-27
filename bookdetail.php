<html>
    <head>
        <title>Booking detail</title>
        <?php 
            include('connect.php');
            session_start();
        ?>
    </head>
    <body>
        Booking No: <?php echo $_SESSION['bno']?><br>
        Check in date: <?php echo $_SESSION['cidate']?><br>
        Check out date: <?php echo $_SESSION['codate']?><br>
        Total price: <?php 
                        $sql="SELECT SUM(RoomPrice".'*'.$_SESSION['nights'].") AS Sum
                              FROM roominfo
                              WHERE RoomID IN (SELECT RoomID
                                               FROM bookingroom
                                               WHERE BookingNo =  '".$_SESSION['bno']."')";
                        $result=mysqli_query($con,$sql) or die(mysqli_error($con));
                        $row=mysqli_fetch_array($result);
                        $totalprice=$row['Sum'];
                     ?><br>
        Using point: <?php echo $_SESSION['upoint']?><br>
        Discount percent: <?php 
                                $sql1="SELECT DiscountPercent FROM discountinfo WHERE DiscountCode = '".$_SESSION['disc']."'";
                                $result2=mysqli_query($con,$sql) or die(mysqli_error($con));
                                $row2=mysqli_fetch_array($result2);
                                $discountpercent=$row2['DiscountPercent'];
                            ?><br>
        Total discount: <?php 
                            $totaldiscount = ($totalprice-($_SESSION['upoint']*10))*($discountpercent/100)+($_SESSION['upoint']*10);
                            echo $totaldiscount;
                        ?><br>    
        Balance: <?php 
                        $balance = $totalprice - $totaldiscount;
                        echo $balance;
                 ?><br>
        Get point: <?php 
                        $getpoint = floor($balance/10);
                        echo $getpoint;
                 ?><br>


    </body>
</html>