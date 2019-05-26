<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php include('connect.php');
    $ticket = 0;
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
        <h3>Room Registration</h3>
        ฟอร์มเพิ่มห้องพัก Staff ID : <br><br>

        <form action="#" method="get">
            <label for="validationHotel">Select Hotel</label>
            <select name="branch" id="validationHotel" class="custom-select is-invalid" required onchange="hotelvalidate()">
                <option selected value="">Hotel</option>
                <?php
                $sql = "SELECT branchname,branchno FROM branchinfo";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo '<option value="' . $row['branchno'] . '">' . $row['branchname'] . '</option>';
                }
                ?>
            </select>
            <br>

            <div class="form-row">
                <div class="col">
                    <label for="validationRoomNumber">Room Number (3 Digits Number)</label>
                    <input type="text" id="validationRoomNumber" class="form-control is-invalid" onchange="roomnumbervalidate()" placeholder="Enter Room Number" name="roomnumber" input pattern="[0-9]{3}" minlength="3" maxlength="3" size="3" value="<?php if (isset($_GET['roomnumber'])) echo $_GET['roomnumber']; ?>" required>
                </div>
                <div class="col">
                    <label for="validationRoomType">Room Type</label>
                    <select name="roomtype" id="validationRoomType" class="custom-select is-invalid" required onchange="roomtypevalidate()">
                        <option selected value="">Choose Room Type</option>
                        <?php
                        // $sql = "SELECT RoomType FROM roomtype";
                        // $result = mysqli_query($con, $sql);
                        // while ($row = mysqli_fetch_array($result)) {
                        //     echo '<option value="' . $row['RoomType'] . '">' . $row['RoomType'] . '</option>';
                        // }
                        ?>
                        <option value='STD'>Standard</option>
                        <option value='SPR'>Superior</option>
                        <option value='DLX'>Deluxe</option>
                        <option value='SUT'>Suite</option>

                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="col-sm-6">
                    <label for="validationPrice">Price</label>
                    <input class="form-control is-invalid" placeholder="Enter Price" id="validationRoomPrice" step="500" type="number" name="price" required min="0" onchange="pricevalidate()">
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="validationcurrency">Currency</label>
                        <select name="currency" id="validationRoomCurrency" class="custom-select is-invalid" required onchange="currencyvalidate()">
                            <option selected value="">Choose currency</option>
                            <option value='THA'>Baht</option>
                            <option value='USD'>Dollars</option>
                        </select>

                    </div>
                </div>

                <div class="col-sm-2">
                    <label for="validationCancel">Can be Cancel</label>
                    <br>
                    <div class="custom-control custom-radio custom-control-inline" id="validationRoomCancel">
                        <input type="radio" id="customRadio1" name="cancel" class="custom-control-input" required value="Yes">
                        <label class="custom-control-label" for="customRadio1">Yes</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline" required>
                        <input type="radio" id="customRadio2" name="cancel" class="custom-control-input" value="No">
                        <label class="custom-control-label" for="customRadio2">No</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <button type="submit" class="btn btn-primary" >Next</button>
                </div>
            </div>


















             <br>                   
            <table class="invisible" id="table">
                <thead class="thead-dark">
                    <tr>
                        <th colspan="2">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    error_reporting(0);
                    $hotel = $_GET['branch'];
                    $sql = "SELECT BranchName FROM branchinfo WHERE BranchNo = '$hotel'";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_array($result);
                    $roomnumber = $_GET['roomnumber'];
                    $roomtype = $_GET['roomtype'];



                    $currency = $_GET['currency'];
                    if ($currency = "USD") {
                        $price = $_GET['price'] * 30;
                    } else {
                        $price = $_GET['price'];
                    }
                    $canbecel = $_GET['cancel'];

                    if (!$roomtype) {
                        $ticket = 1;
                    } else {
                        $ticket = 2;
                    }

                    echo '<tr><td>Staff Name</td><td>เดี๋ยวลิ้งเอา กูทำไม่เป็น</td>';
                    echo '<tr><td>Hotel</td><td>' . $row['BranchName'] . '</td>';
                    echo '<tr><td>RoomID</td><td>' . $hotel . $roomtype . $roomnumber . '</td>';
                    echo '<tr><td>Price in Baht</td><td>' . $price . '</td>';
                    echo '<tr><td>Can Be Cancel</td><td>' . $canbecel . '</td>';

                    ?>
                </tbody>
            </table>
























            

                <?php
                if ($ticket == 2) {
                    echo
                        '<div class="row">
                        <div class="col-md">
                    <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                    </div>';
                }
                ?>
           
    </div>
    </form>
    <br>








    </div>
    <script>
        <?php
        if (isset($_GET['roomnumber']))
            echo 'document.getElementById("validationRoomNumber").className = "form-control is-valid";
            document.getElementById("table").className = "table table-striped";';
        ?>

        function pricevalidate() {
            if (document.getElementById("validationRoomPrice").value) {
                document.getElementById("validationRoomPrice").className = "form-control is-valid";
            } else {
                document.getElementById("validationRoomPrice").className = "form-control is-invalid";
            }
        }

        function roomnumbervalidate() {
            if (document.getElementById("validationRoomNumber").value) {
                document.getElementById("validationRoomNumber").className = "form-control is-valid";
            } else {
                document.getElementById("validationRoomNumber").className = "form-control is-invalid";
            }
        }

        function hotelvalidate() {
            if (document.getElementById("validationHotel").value) {
                document.getElementById("validationHotel").className = "custom-select is-valid";
            } else {
                document.getElementById("validationHotel").className = "custom-select is-invalid";
            }
        }

        function roomtypevalidate() {
            if (document.getElementById("validationRoomType").value) {
                document.getElementById("validationRoomType").className = "custom-select is-valid";
            } else {
                document.getElementById("validationRoomType").className = "custom-select is-invalid";
            }

        }

        function currencyvalidate() {
            if (document.getElementById("validationRoomCurrency").value) {
                document.getElementById("validationRoomCurrency").className = "custom-select is-valid";
            } else {
                document.getElementById("validationRoomCurrency").className = "custom-select is-invalid";
            }

        }
       
    </script>
</body>
<?php mysqli_close($con); ?>

</html>