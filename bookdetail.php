<html>
<head>
        <title>Add more room</title>
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