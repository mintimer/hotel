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
                        $sql="SELECT SUM(r.RoomPrice)".'*'.$_SESSION['nights']."+(700*SUM(b.AdditionBed))+SUM(b.AmountOfGuest*100*b.FoodService*".$_SESSION['nights'].") AS Sum
                              FROM roominfo r 
                              JOIN bookingroom b ON r.RoomID = b.RoomID
                              WHERE b.RoomID IN (SELECT RoomID 
                                                 FROM bookingroom 
                                                 WHERE BookingNo =  '".$_SESSION['bno']."')";
                        $result=mysqli_query($con,$sql) or die(mysqli_error($con));
                        $row=mysqli_fetch_array($result);
                        $totalprice=$row['Sum'];
                        echo $totalprice;
                     ?><br>
        Using point: <?php echo $_SESSION['upoint']?><br>
        Discount percent: <?php 
                                $sql2="SELECT DiscountPercent FROM discountinfo WHERE DiscountCode = '".$_SESSION['disc']."'";
                                $result2=mysqli_query($con,$sql2) or die(mysqli_error($con));
                                $row2=mysqli_fetch_array($result2);
                                $discountpercent=$row2['DiscountPercent'];
                                echo $discountpercent;
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
                        $getpoint = floor($balance/100);
                        echo $getpoint;
                 ?><br>
        <form action="#" method="GET">
        <input type="submit" name="submit" value="SUBMIT">
        <input type="submit" name="submit" value="CANCEL">
        </form>
        <?php 
            if(isset($_GET['submit'])){
                if($_GET['submit']=="SUBMIT"){
                        echo "submit reabroi";
                        $sql3="UPDATE bookinginfo
                               SET UsingPoint = ".$_SESSION['upoint'].", DiscountCode = '".$_SESSION['disc']."', TotalPrice = $totalprice, TotalDiscount = $totaldiscount, Balance = $balance, GetPoint = $getpoint
                               WHERE BookingNo = '".$_SESSION['bno']."'";
                        echo $sql3;
                        mysqli_query($con,$sql3) or die("Error: " . mysqli_error($sql));
                        header("Location: welcome.php");
                    }else {
                        echo "delete reabrot";
                        $sql4="DELETE FROM bookingroom WHERE BookingNo = '$bno'";
                        $sql5="DELETE FROM bookinginfo WHERE BookingNo = '$bno'";
                        mysqli_query($con,$sql4) or die("Error: " . mysqli_error($sql));
                        mysqli_query($con,$sql5) or die("Error: " . mysqli_error($sql));
                        header("Location: booking_form.php");
                }
            }
            mysqli_close($con);
        ?>

    </body>
</html>