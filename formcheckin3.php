<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bgstaffreport.css">
    <?php include('connect.php');
    $ticket = 1;
    ?>
    <link rel="stylesheet" href="bgcheckin.css">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th {
            text-align: center;
        }
    </style>
</head>

<body class="bgcheckin">
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
                    <a class="nav-link" href="staff.php" style="color: white">HOME</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" style="color: white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Check in / Check out
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item disabled" href="#">Check in form</a>
                        <a class="dropdown-item" href="checkout1.php">Check out form</a>
                        <a class="dropdown-item" href="viewcheckin.php">View Check in / Check out</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" style="color: white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Room
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="findroom.php">Find Room</a>
                        <a class="dropdown-item" href="formregisroom.php">Add New Room</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" style="color: white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Report
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="analysis1.php">Monthly Custumer</a>
                        <a class="dropdown-item" href="analysis2.php">Staff In Position</a>
                        <a class="dropdown-item" href="analysis3.php">Monthly Reservasion</a>
                        <a class="dropdown-item" href="analysis4.php">Age Of Employee</a>
                        <a class="dropdown-item" href="analysis5.php">Profit Of Each Branch</a>
                        <a class="dropdown-item" href="analysis6.php">Member Score</a>
                        <a class="dropdown-item" href="analysis7.php">Nation Of Employee</a>
                        <a class="dropdown-item" href="analysis8.php">Blood Type Of Employee</a>
                        <a class="dropdown-item" href="analysis9.php">Top 10 Duration</a>
                        <a class="dropdown-item" href="analysis10.php">Payment</a>
                        <a class="dropdown-item" href="analysis11.php">Lastest 5 Month New Member</a>
                        <a class="dropdown-item" href="analysis12.php">Top 5 Room</a>
                    </div>
                </li>



            </ul>


        </div>
    </nav>
    <br>
    <div class="container bg-light">
        <br>

        <?php
        error_reporting(0);
        //booking no
        $bookingno = mysqli_real_escape_string($con, $_GET["bookingno"]);
        //set status
        if ($bookingno == NULL) $ticket = 2;
        //head
        if ($ticket == 1) echo '<h3>Update Data Completed</h3>';
        //check member
        $memberornot = mysqli_fetch_array(mysqli_query($con, "SELECT MemberOrNot FROM bookinginfo WHERE bookingno = '$bookingno'"));
        if ($memberornot["MemberOrNot"] == 'Yes')
            $sql = "SELECT FirstName, LastName FROM memberinfo WHERE UserID = (SELECT UserID FROM bookinginfo WHERE bookingno = '$bookingno')";
        else if ($memberornot["MemberOrNot"] == 'No')
            $sql = "SELECT FirstName, LastName FROM guestinfo WHERE GuestID = (SELECT GuestID FROM bookinginfo WHERE bookingno = '$bookingno')";
        $name1row = mysqli_fetch_array(mysqli_query($con, $sql));
        $bookedby = $name1row["FirstName"] . " " . $name1row["LastName"];
        //total price
        $price = mysqli_fetch_array(mysqli_query($con, "SELECT Balance FROM bookinginfo WHERE bookingno = '$bookingno'"));
        //paid
        $paid = mysqli_fetch_array(mysqli_query($con, "SELECT SUM(Paid)AS paid FROM paymentinfo WHERE BookingNo = '$bookingno' GROUP BY ('$bookingno')"));
        //balance
        $balance = $price["Balance"] - $paid["paid"];
        //guestname
        $guestname = mysqli_fetch_array(mysqli_query($con, "SELECT GuestName FROM bookinginfo WHERE bookingno = '$bookingno'"));
        //key status
        $key = mysqli_fetch_array(mysqli_query($con, "SELECT KeyStatus FROM bookinginfo WHERE bookingno = '$bookingno'"));
        //roominfoarray
        $roomid = array();
        $roomtype = array();
        $canbecancel = array();
        $addbed = array();
        $foodservice = array();
        $sql = "SELECT r.RoomID,rf.RoomType,rf.CanBeCancel,r.AdditionBed,r.Foodservice
                FROM bookinginfo b, bookingroom r, roominfo rf
                WHERE b.BookingNo=r.BookingNo AND r.RoomID=rf.RoomID AND b.BookingNo='$bookingno'";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result)) {
            array_push($roomid, $row["RoomID"]);
            array_push($roomtype, $row["RoomType"]);
            array_push($canbecancel, $row["CanBeCancel"]);
            array_push($addbed, $row["AdditionBed"]);
            array_push($foodservice, $row["Foodservice"]);
        }

        if (isset($_GET['guestnameinput']))
            $guestnameinput = $_GET['guestnameinput'];
        else        $guestnameinput = NULL;
        //get key status
        $keynew = $_GET['keystatus'];
        ?>

        <form action="#" method="get">
            <?php echo $bookingno; ?>">
            <?php
            if ($ticket == 1) {
                echo '<table class="table table-striped" id="table">';
                ?>

                <thead class="thead-dark">
                    <tr>
                        <th colspan="2">Booking Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="40%">
                            Booking No
                        </td>
                        <td>
                            <?php echo $bookingno; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Booked By
                        </td>
                        <td>
                            <?php echo $bookedby; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Guest
                        </td>
                        <td>
                            <?php
                            if ($guestnameinput == NULL)
                                echo $guestname["GuestName"];
                            else
                                echo $guestnameinput;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Key Status
                        </td>
                        <td>
                            <?php
                            if ($keynew == 0)  echo '<font color="red">Not get key</font>';
                            else if ($keynew == 1)  echo '<font color="blue">Got key</font>';
                            else if ($keynew == 2)  echo '<font color="green">Returned key</font>';;
                            ?>
                        </td>
                    </tr>
                </tbody>
                </table>
            <?php
        }
        ?>
            <?php
            $lenght = count($roomid);
            // if ($key['KeyStatus'] == 0&&1){
            for ($i = 0; $i < $lenght; $i++) {
                $j = $i + 1;
                echo '<br>    <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th colspan="2">' . $j . ' ) ' . $roomtype[$i] . '</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="40%">
                            RoomID
                        </td>
                        <td width="60%">';
                echo $roomid[$i];
                echo '</td>
                </tr>
                <tr>
                    <td >
                        Can be Cancel
                    </td>
                    <td>';
                echo $canbecancel[$i];
                echo '</td>';

                echo '</tbody></table>';
            } ?>
        </form>
        <?php
            echo'<a class="btn btn-primary" href="formcheckin1.php" role="button">Back</a>';
        ?>

        <script>
            function sendfunction() {
                document.getElementById("sent").innerHTML = "<?php
                                                                //update guest & keystatus
                                                                $sql = "UPDATE bookinginfo SET GuestName = '$guestnameinput',KeyStatus = '$keynew' WHERE BookingNo = '$bookingno'";
                                                                if (!mysqli_query($con, $sql)) {
                                                                    echo "ERROR";
                                                                } else echo "1 record added";
                                                                ?>";
            }
        </script>
        <br>
    </div>

</body>
<?php mysqli_close($con); ?>

</html>