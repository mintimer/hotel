<!DOCTYPE html>
<html>

    <head>
        <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <?php include('connect.php');?>
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

    <body> 
        <div class="container bg-light" >
            <br>
            <h3>Discount Code</h3>
            <h5 style="background-color: powderblue">แสดงส่วนลดที่ยังสามารถใช้งานได้</h5>

            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Discount Code</th>
                        <th>Percentage</th>
                        <th>End Using Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        error_reporting(0);
                        $sql =
                        "SELECT DiscountCode,DiscountPercent AS Percent, DATE(EndUsingDate) AS EndUsingDate
                        FROM discountinfo 
                        WHERE DiscountCode NOT IN ( SELECT DiscountCode FROM bookinginfo WHERE DiscountCode is not null) AND DATE(EndUsingDate)-DATE(CURRENT_TIMESTAMP)>0
                        ORDER BY EndUsingDate";
                        $result = mysqli_query($con,$sql);
                        while($row=mysqli_fetch_array($result)){
                            echo '<tr>';
                            echo '<td>'.$row['DiscountCode'].'</td>';
                            echo '<td>'.$row['Percent'].'</td>';
                            echo '<td>'.$row['EndUsingDate'].'</td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
            <br>
        </div>
    </body>
    <?php mysqli_close($con);?>
</html>