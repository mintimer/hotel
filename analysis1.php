<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php include('connect.php');
    ?>
</head>

<body>
<div class="container">
    <h3>Analysis 1</h3>
    จำนวนคนที่เข้าพักในโรงแรมสาขาต่างๆแต่ละเดือน ]]]]]]] <br><br>
    <form action="#" method="get">
        Select month and year :            
        <input type="month" name="month">

        <button type="submit" class="btn btn-success">Select</button>
    </form>
    <br>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Branch</th>
                <th>Guest</th>
            </tr>
        </thead>
        <tbody>
            <?php
            error_reporting(0);
            $Month=$_GET['month'];
            if($Month!="")
            echo 'Guest(s) in '.$Month;
            $sql =
            "SELECT i.BranchName,SUM(b.AmountOfGuest) AS Guests
            FROM branchinfo i 
            INNER JOIN roominfo r 
                ON i.BranchNo = r.BranchNo
            INNER JOIN bookingroom b 
                ON r.RoomID = b.RoomID
            INNER JOIN bookinginfo O
                on o.BookingNo = b.BookingNo
            WHERE o.CheckInDate LIKE '$Month%'
            GROUP BY i.BranchNo";
            echo'<br><br>';
            $result = mysqli_query($con,$sql);
            $total = 0;
            if($Month!="")
            while($row=mysqli_fetch_array($result)){
                echo '<tr>';
                echo '<td>'.$row['BranchName'].'</td>';
                echo '<td>'.$row['Guests'].'</td>';
                $total = $total + $row['Guests'];
                echo '</tr>';
            }
            echo '<tr><td>Total</td><td>'.$total.'</td></tr>';
            ?>
        </tbody>
    </table>
</div>
</body>
<?php mysqli_close($con);?>
</html>