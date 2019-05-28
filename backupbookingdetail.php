<html>
<head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="bgbooking.css">
        <title>Booking detail</title>
        <?php 
            include('connect.php');
            session_start();
        ?>
    </head>
    <body class="bgbooking">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #339999;" id="mynav">
        <a class="navbar-brand" style="color: white">
            <img src="pic/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            JustFang
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="welcome.php" style="color:white">HOME</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disable" href="#" style="color: #eceaea">BOOKING</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="viewdiscount.php" style="color: white">PROMOTION</a>
                </li>


                <li class="nav-item">
                    <?php
                    if ($_SESSION['role'] == 'member') {
                        echo "<a class=" . "nav-link" . " href=" . "review_form.php" . " style=" . "color:white" . ">Review</a>";
                    }
                    ?>
                </li>

            </ul>

            <?php
            if ($_SESSION['role'] == 'member') {
                echo "<a class=" . "'nav-link'" . " style=" . "'color: white'" . ">" . $_SESSION['message'] . "</a>";
                echo "<a href=" . "'login.php'" . "class=" . "'btn btn-secondary'" . ">LOG OUT</a>";
            } else {
                echo "<a href=" . "'login.php'" . "class=" . "'btn btn-light'" . ">LOG IN</a>";
            }
            ?>

        </div>
    </nav>

    <br>
        <div class="container bg-light ">
        <br>
        <h2 class="font-weight-bold text-center"> Booking No: <?php echo $_SESSION['bno']?><br> </h2>
        <div class="container bg-white">
            <br>
        <div class="container bg-warning ">
            <br>
        Check in date: <?php echo $_SESSION['cidate']?><br>
        Check out date: <?php echo $_SESSION['codate']?><br>
        <br>
        </div>
        <br>
        <div class="container bg-dark text-white ">
            <br>
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
                        $_SESSION['role']=='member'? $getpoint = floor($balance/100):$getpoint = 0 ;
                        echo $getpoint;
                 ?><br>
                 <br>
        </div>
        <br>
        <form action="#" method="GET">
        <input type="submit" name="submit" class="btn btn-info" onclick="dialogsubmit()" value="SUBMIT">
        <input type="submit" name="submit" class="btn btn-danger" onclick="dialogcancel()" value="CANCEL">
        </form>
        <?php 
            if(isset($_GET['submit'])){
                if($_GET['submit']=="SUBMIT"){
                        if($_SESSION['role']=='member'){
                            //echo $_SESSION['disc'];
                            $sql3="UPDATE bookinginfo
                                   SET UsingPoint = ".$_SESSION['upoint'].", DiscountCode = '".$_SESSION['disc']."', TotalPrice = $totalprice, TotalDiscount = $totaldiscount, Balance = $balance, GetPoint = $getpoint
                                   WHERE BookingNo = '".$_SESSION['bno']."'";
                            // $sql32="UPDATE memberinfo 
                            //        SET Point =  Point + ".$getpoint." - ".$_SESSION['upoint']." 
                            //        WHERE userID = '".$_SESSION['uid']."'";
                            mysqli_query($con,$sql3);
                            // mysqli_query($con,$sql32) or die("Error: " . mysqli_error($con));
                             header("Location: welcome.php");
                        }else {
                            $sql3="UPDATE bookinginfo
                                   SET UsingPoint = ".$_SESSION['upoint'].", DiscountCode = '".$_SESSION['disc']."', TotalPrice = $totalprice, TotalDiscount = $totaldiscount, Balance = $balance, GetPoint = $getpoint
                                   WHERE BookingNo = '".$_SESSION['bno']."'";
                            
                           mysqli_query($con,$sql3);
                            header("Location: welcome.php");
                        }
                    }else {
                     
                        $sql4="DELETE FROM bookingroom WHERE BookingNo = '$bno'";
                        $sql5="DELETE FROM bookinginfo WHERE BookingNo = '$bno'";
                        mysqli_query($con,$sql4) or die("Error: " . mysqli_error($con));
                        mysqli_query($con,$sql5) or die("Error: " . mysqli_error($con));
                        header("Location: booking_form.php");
                }
            }
            mysqli_close($con);
        ?>
        <br>
        </div>
        <br>
        </div>
        <br>
        <script>
                    function dialogsubmit() {
                        Swal.fire({
                            position: 'top',
                            type: 'success',
                            title: 'Your booking has been success',
                            showConfirmButton: true
                        })
                    }
                    function dialogcancel() {
                        Swal.fire({
                            position: 'top',
                            type: 'error',
                            title: 'Your booking has been cancel',
                            showConfirmButton: true
                        })
                    }
        </script>
    </body>
</html>