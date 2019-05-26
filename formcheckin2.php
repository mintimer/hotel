<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bgstaffreport.css">
    <?php include('connect.php');
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
        <h3>Booking Info</h3>
        <?php
        //booking no
        $bookingno = mysqli_real_escape_string($con, $_GET["bookingno"]);
        //booked by
        //check member
        $memberornot = mysqli_fetch_array(mysqli_query($con, "SELECT MemberOrNot FROM bookinginfo WHERE bookingno = '$bookingno'"));
        if ($memberornot["MemberOrNot"] == 'Yes')
            $sql = "SELECT FirstName, LastName FROM memberinfo WHERE UserID = (SELECT UserID FROM bookinginfo WHERE bookingno = '$bookingno')";
        else if ($memberornot["MemberOrNot"] == 'No')
            $sql = "SELECT FirstName, LastName FROM memberinfo WHERE UserID = (SELECT GuestID FROM bookinginfo WHERE bookingno = '$bookingno')";
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
        $sql = "SELECT r.RoomID,rf.RoomType,rf.CanBeCancel
        FROM bookinginfo b, bookingroom r, roominfo rf
        WHERE b.BookingNo=r.BookingNo AND r.RoomID=rf.RoomID AND b.BookingNo='$bookingno'";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result)) {
            array_push($roomid, $row["RoomID"]);
            array_push($roomtype, $row["RoomType"]);
            array_push($canbecancel, $row["CanBeCancel"]);
        }
        ?>
        <form action="#" method="get">
            <table class="table table-striped" id="table">
                <thead class="thead-dark">
                    <tr>
                        <th colspan="2">Booking Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
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
                            Total Price
                        </td>
                        <td>
                            <?php echo $price["Balance"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Balance
                        </td>
                        <td>
                            <?php echo $balance; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Guest
                        </td>
                        <td>
                            <?php echo $guestname["GuestName"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Key Status
                        </td>
                        <td>
                            <?php
                            if ($key['KeyStatus'] == 0)       echo '<font color="red">Not get Key</font>';
                            else if ($key['KeyStatus'] == 1)  echo '<font color="blue">Got key</font>';
                            else if ($key['KeyStatus'] == 2)  echo '<font color="green">Returned key</font>';;
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>

            <br>
            <?php 
            $lenght = count($roomid);
            for($i = 0; $i <= $lenght; $i++){
                echo $roomid[$i];
                echo $roomtype[$i];
                echo $canbecancel[$i];
                echo '<br>';
            }
            
            
            
            
            
            
            
            
            
            
            
            
            ?>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th colspan="2">ชื่อห้อง</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            RoomID
                        </td>
                        <td>
                            รหัสห้อง
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Can be Cancel
                        </td>
                        <td>
                            รหัสห้อง
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Addon
                        </td>
                        <td>
                            เพิ่มเตียงเพิ่มอาหาร
                        </td>
                    </tr>

                </tbody>
            </table>




            <!-- <button type="submit" class="btn btn-success">next</button> -->
        </form>

</body>
<?php mysqli_close($con); ?>

</html>