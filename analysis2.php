<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php include('connect.php');
    ?>
    <link rel="stylesheet" href="bg_report.css">
</head>

<body class="bgreport"> 
<div class="container">
    <h3>Analysis 2</h3>
    จำนวนพนักงานในตำแหน่งต่างๆในโรงแรมแต่ละสาขา <br><br>
    <form action="#" method="get">
        <select name="branch" class="form-control">
            <option selected value="">Choose Hotel</option>
            <?php
                    $sql = "SELECT branchname,branchno FROM branchinfo";
                    $result = mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($result)){
                    echo '<option value="'.$row['branchno'].'">'.$row['branchname'].'</option>';
                    }
                
            ?>
        </select>

        <button type="submit" class="btn btn-success">Select</button>
    </form>
    <br>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Position</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php
            error_reporting(0);
            $Branch=$_GET['branch'];
            if($Branch!="")
            echo 'Branch : '.$Branch;
            $sql =
            "SELECT Position, COUNT(StaffID) AS Amount 
            FROM staffinfo
            WHERE BranchNo = '$Branch'
            GROUP BY Position";
            echo'<br>';
            $result = mysqli_query($con,$sql);
            $total = 0;
            while($row=mysqli_fetch_array($result)){
                echo '<tr>';
                echo '<td>'.$row['Position'].'</td>';
                echo '<td>'.$row['Amount'].'</td>';
                $total = $total + $row['Amount'];
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