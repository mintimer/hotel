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
        <br>
        <?php
        //booking no
        $bookingno = mysqli_real_escape_string($con, $_GET["bookingno"]);
        //booked by
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
        $sql = "SELECT r.RoomID,rf.RoomType,rf.CanBeCancel
        FROM bookinginfo b, bookingroom r, roominfo rf
        WHERE b.BookingNo=r.BookingNo AND r.RoomID=rf.RoomID AND b.BookingNo='$bookingno'";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result)) {
            array_push($roomid, $row["RoomID"]);
            array_push($roomtype, $row["RoomType"]);
            array_push($canbecancel, $row["CanBeCancel"]);
        }
        //gettime
        date_default_timezone_set('Asia/Bangkok');
        $date = date('Y-m-d h:i:s a', time());
        ?>
        <form action="/formcheckin3.php" method="get">
            <div class="invisible">
                <input type="text" class="form-control" name="bookingno" id="bookingno" placeholder="Enter Booking" value="<?php echo $bookingno; ?>">
            </div>
            <table class="table table-striped" id="table">
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
                            <?php
                            if ($guestname["GuestName"] != "")
                                echo $guestname["GuestName"];
                            else {
                                echo '<input type="text" id="guestnameinput" class="form-control" 
                                placeholder="Enter Guest Name" name="guestnameinput" required >';
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Key Status
                        </td>
                        <td>
                            <?php
                            if ($key['KeyStatus'] == 0) {
                                echo '<font color="red">Not get key</font>';
                                echo '<div class="col"><div class="form-group"><select name="keystatus" class="custom-select">';
                                echo '<option selected value="0">Choose new status</option>';
                                echo '<option value=" 1 "><font color="blue">Got key</font></option>';
                                echo '<option value=" 2 "><font color="green">Returned key</font></option>';
                                echo '</select> </div> </div>';
                            } else if ($key['KeyStatus'] == 1) {
                                echo '<font color="blue">Got key</font>';
                                // echo '<div class="col"><div class="form-group"><select name="keystatus" class="custom-select">';
                                // echo '<option selected value="1">Choose new status</option>';
                                // echo ' <option value=" 2 "><font color="green">Returned key</font></option>';
                                // echo '</select> </div> </div>';
                                
                            } else if ($key['KeyStatus'] == 2)  echo '<font color="green">Returned key</font>';
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>

            <?php
            $lenght = count($roomid);
            if ($key['KeyStatus'] == 0&&1){
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
                echo '</td>
                    </tr>
                    <tr>
                        <td>
                            Addon
                        </td>
                        <td>';
                $checkbed = 'bed' . $i;
                $checkbreakfast = 'breakfast' . $i;
                echo '
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="' . $checkbed . '"name="' . $checkbed . '">
                <label class="form-check-label">Extra Bed (+฿700)</label>
              </div>';
                echo '
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="' . $checkbreakfast . '"name="' . $checkbreakfast . '">
                <label class="form-check-label">Breakfast (+฿100/person)</label>
              </div>';
                echo '</td>
                    </tr>
                    </tbody>
                    </table>';
            }
            echo '<button type="submit" class="btn btn-success">confirm</button>';
            }
                else echo'<a class="btn btn-primary" href="/formcheckin1.php" role="button">Back</a>';
            ?>
        </form>

        <?php
        // if ($key['KeyStatus'] == 0&&1)
        for ($i = 0; $i < $lenght; $i++) {
            $j = $i + 1;
            $bed = array();
            $breakfast = array();

            $checkbed = 'bed' . $i;
            $checkbreakfast = 'breakfast' . $i;
            $temp3 = isset($_GET["$checkbed"]) ? 1 : 0;
            $temp4 = isset($_GET["$checkbreakfast"]) ? 1 : 0;
            if ($temp3 == "")
                $bed[$i] = 0;
            else
                $bed[$i] = $temp3;
            if ($temp4 == "")
                $breakfast[$i] = 0;
            else
                $breakfast[$i] = $temp4;

            // $j = $i + 1;
            // echo $j . ') ';
            // echo 'bed : ' . $bed[$i];
            // echo '<br>';
            // echo 'breakfast : ' . $breakfast[$i];
            // echo '<br>';
            // echo '<br>';
        }

        ?>




</body>
<?php mysqli_close($con); ?>

</html>