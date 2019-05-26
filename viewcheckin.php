<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php include('connect.php'); ?>
    <link rel="stylesheet" href="bgstaffreport.css">
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

<body class="bgstaffreport">
    <div class="container bg-light">
        <br>
        <h3>View Check-In</h3>
        <h5 style="background-color: powderblue">ตรวจสอบสถานะกุญแจ</h5>

        <form action="#" method="get">
            <select name="branch" class="form-control">
                <option selected value="">Choose Hotel</option>
                <?php
                $sql = "SELECT branchname,branchno FROM branchinfo";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo '<option value="' . $row['branchno'] . '">' . $row['branchname'] . '</option>';
                }

                ?>
            </select>
            <button type="submit" class="btn btn-info">Select</button>
        </form>

        <br>
        <table class="invisible" id="table">
            <thead class="thead-dark">
                <tr>
                    <th>Guest Name</th>
                    <th>BookingNo</th>
                    <th>RoomID</th>
                    <th>Key Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                error_reporting(0);
                $Branch = $_GET['branch'];
                if ($Branch != "") {
                    $temp = $_GET['branch'];
                    $sql = "SELECT branchname FROM branchinfo WHERE branchno = '$temp'";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_array($result);
                    echo 'Branch : ' . $Branch . '&nbsp' . $row['branchname'];
                }
                $sql =
                    "SELECT b.GuestName, b.BookingNo, r.RoomID, b.KeyStatus
                                        FROM bookinginfo b, bookingroom r, roominfo rf
                                        WHERE b.BookingNo=r.BookingNo AND r.RoomID=rf.RoomID AND rf.BranchNo='$Branch'
                                        ORDER BY b.KeyStatus";
                echo '<br>';
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo '<tr>';
                    echo '<td>' . $row['GuestName'] . '</td>';
                    echo '<td>' . $row['BookingNo'] . '</td>';
                    echo '<td>' . $row['RoomID'] . '</td>';
                    if($row['KeyStatus']==0)       echo '<td><font color="red">Not get Key</font></td>';
                    else if($row['KeyStatus']==1)  echo '<td><font color="blue">Got key</font></td>';
                    else if($row['KeyStatus']==2)  echo '<td><font color="green">Returned key</font></td>';
                    echo '</tr>';
                }

                ?>
            </tbody>
        </table>
        <br>
    </div>
    <script>
        <?php
        if (isset($_GET['branch'])) {
            if ($_GET['branch'] != "")
                echo 'document.getElementById("table").className = "table table-striped";';
        }

        ?>
    </script>
</body>
<?php mysqli_close($con); ?>

</html>