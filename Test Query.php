<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Staff Infomation</title>
</head>

<body>
<div class="container-fluid">
<h3>Staff Infomation</h3>

  <table class="table">

    <?php
    $con=mysqli_connect("127.0.0.1","root","","hotel");
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL:" .mysqli_connect_error();
    }
    $StaffID = mysqli_real_escape_string($con,$_POST["StaffID"]);
    $sql = "SELECT s.FirstName, s.LastName, s.Salary, s.Position, b.BranchName 
            FROM StaffInfo s JOIN BranchInfo b ON s.BranchNO = b.BranchNO 
            WHERE s.StaffID = '$StaffID' ;";
    $result = mysqli_query($con,$sql);
    $test = mysqli_fetch_array($result);
    if($test!=NULL){
        $result = mysqli_query($con,$sql);
        echo "
            <tr>
                <td>FirstName</td> 
                <td>LastName</td> 
                <td>Salary</td> 
                <td>Position</td>
                <td>BranchName</td>
            </tr>
        ";

       

        //for($x=1;$x<=5;$x++){
            $data = mysqli_fetch_array($result);
            echo "<tr>";
            for($y=0;$y<=4;$y++){
                echo "<td>$data[$y]</td>";
            }
            echo "</tr>";
        //}
    } else {
        echo "Not Found Staff";
    }

    mysqli_close($con);
    ?>

</table>
</div>
</body>
</html>