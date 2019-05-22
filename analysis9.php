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
    <h3>Analysis 9</h3>
    จำนวนวันของคนที่เข้ามาใช้บริการของโรงแรมนานที่สุด 10 อันดับแรก <br><br>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Guest Name</th>
                <th>Amount of days</th>
            </tr>
        </thead>
        <tbody>
            <?php
            error_reporting(0);
            $sql =
            "SELECT GuestName, SUM( DateDiff(CheckOutDate,CheckInDate)) AS DAYs
            FROM bookinginfo
            GROUP BY GuestName
            ORDER BY DAYs DESC
            LIMIT 10";
            $result = mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result)){
                echo '<tr>';
                echo '<td>'.$row['GuestName'].'</td>';
                echo '<td>'.$row['DAYs'].'</td>';

                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>
</body>
<?php mysqli_close($con);?>
</html>