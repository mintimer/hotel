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
        <h3>Analysis 6</h3>
        แสดงสมาชิกที่มีคะแนนสะสมตามที่กำหนด <br><br>

        <form action="#" method="get">
        <select name="minmax" class="form-control">
            <option selected value="DESC">Max</option>
            <option value="ASC">Min</option>
        </select>

        <label for="customRange2">Amount of member</label>
        <input type="range" class="custom-range" min="1" max="50" id="customRange2" name=range>
        <p>Value: <span id="demo"></span></p>

        <button type="submit" class="btn btn-success">Select</button>
    </form>

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Points</th>
                </tr>
            </thead>
            <tbody>
                <?php
                error_reporting(0);
                $minmax=$_GET['minmax'];
                $range=$_GET['range'];
                $sql =
                    "SELECT FirstName,LastName,Point
            FROM memberinfo
            ORDER BY point $minmax
            LIMIT $range";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo '<tr>';
                    echo '<td>' . $row['FirstName'] . '</td>';
                    echo '<td>' . $row['LastName'] . '</td>';
                    echo '<td>' . $row['Point'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <script>
var slider = document.getElementById("customRange2");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
</body>
<?php mysqli_close($con); ?>

</html>