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

    <body class="bgstaffreport"> 
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #339999;" id="mynav">
            <a class="navbar-brand" href="#" style="color: white">
                <img src="pic/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                JustFang
            </a>
                    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                  
            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                <ul class="navbar-nav mr-auto">              
                    <li class="nav-item">
                        <a class="nav-link" href="staff.php" style="color: white">HOME</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="#" style="color:white">Check in</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#"style="color: white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Room
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Find Room</a>
                            <a class="dropdown-item" href="#">Add New Room</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#"style="color: white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Report
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item disabled" href="#">Monthly Custumer</a>
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
            <h3>Analysis 1 : Monthly Custumer</h3>
            <h5 style="background-color: powderblue">จำนวนคนที่เข้าพักในโรงแรมสาขาต่างๆแต่ละเดือน</h5>
            <form action="#" method="get">
                Select month and year :            
                <input type="month" name="month">

            <button type="submit" class="btn btn-info">Select</button>
            </form>
            <br>

            <table class="invisible" id="table">
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
            <br>
        </div>

        <script>
        <?php
        if (isset($_GET['month']))
        if($_GET['month']!="")
            echo 'document.getElementById("table").className = "table table-striped";';
        ?>
        </script>




    
    </body>
    <?php mysqli_close($con);?>
</html>