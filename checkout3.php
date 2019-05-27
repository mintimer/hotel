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

<body>
    <div class="container">
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
        $amountguest = array();
        $sql = "SELECT r.RoomID,rf.RoomType,rf.CanBeCancel,r.AmountOfGuest
        FROM bookinginfo b, bookingroom r, roominfo rf
        WHERE b.BookingNo=r.BookingNo AND r.RoomID=rf.RoomID AND b.BookingNo='$bookingno'";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result)) {
            array_push($roomid, $row["RoomID"]);
            array_push($roomtype, $row["RoomType"]);
            array_push($canbecancel, $row["CanBeCancel"]);
            array_push($amountguest, $row["AmountOfGuest"]);
        }
        //get key status
        $keynew = $_GET['keystatus'];

        ?>


        <a class="btn btn-primary" href="/checkout1.php" role="button">Back</a>


        <script>
            function sendfunction() {

                document.getElementById("sent").innerHTML = "<?php
                                                                //update guest & keystatus
                                                                $sql = "UPDATE bookinginfo SET KeyStatus = '$keynew' WHERE BookingNo = '$bookingno'";
                                                                if (!mysqli_query($con, $sql)) {
                                                                    echo "ERROR";
                                                                } else echo "1 record added";
                                                                ?>";
            }
        </script>

</body>
<?php mysqli_close($con); ?>

</html>