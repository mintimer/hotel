<html>
<head>
    <title>Find available room</title>
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
    <?php include('connect.php'); ?>
    <br>
    <br>
    <div class="container bg-light">
        <form action="#" method="GET">
            <b>Branch No.:</b><input type="text" name="branchno"><br>
            <b>Roomtype:</b><input type="text" name="roomtype"><br>
            <button type="submit" name="submit" class="btn btn-info">Select</button>
        </form>
    <div <?php if (!isset($_GET['branchno'])||!isset($_GET['roomtype'])) {
                                    echo "style=" . "visibility" . ": hidden";
                    }?>> 
            <table class="table table-striped" id="table">
                <thead class="thead-dark">
                    <tr>
                    <th>Available room</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            $sql = "SELECT DISTINCT RoomID
                                    FROM roominfo
                                    WHERE RoomID NOT IN (SELECT RoomID 
                                                        FROM bookingroom 
                                                        WHERE BookingNo IN (SELECT BookingNo 
                                                                            FROM bookinginfo 
                                                                            WHERE KeyStatus!='2'))
                                                        AND BranchNo ="."'".$_GET['branchno']."'
                                                        AND RoomType ="."'".$_GET['roomtype']."'";
                            $result=mysqli_query($con,$sql) or die("Error: ".mysqli_error($sql));
                            while($row=mysqli_fetch_array($result)){   
                                echo '<tr>';    
                                echo '<td>'.$row['RoomID'].'</td>';
                                echo '</tr>';
                            }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>