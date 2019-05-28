<html>

<head>
    <title>Add more room</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php
    include('connect.php');
    session_start();
    ?>
    <link rel="stylesheet" href="bgbooking2.css">
    <!-- <style>
            table,
            th,
            td {
                border: 1px solid black;
                border-collapse: collapse;
            }

            th {
                text-align: center;
            }
        </style> -->
</head>

<body class="bgbooking2">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #339999;" id="mynav">
        <a class="navbar-brand" style="color: white">
            <img src="pic/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            JustFang
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="welcome.php" style="color:white">HOME</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disable" href="#" style="color: #eceaea">BOOKING</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="viewdiscount.php" style="color: white">PROMOTION</a>
                </li>


                <li class="nav-item">
                    <?php
                    if ($_SESSION['role'] == 'member') {
                        echo "<a class=" . "nav-link" . " href=" . "review_form.php" . " style=" . "color:white" . ">Review</a>";
                    }
                    ?>
                </li>

            </ul>

            <?php
            if ($_SESSION['role'] == 'member') {
                echo "<a class=" . "'nav-link'" . " style=" . "'color: white'" . ">" . $_SESSION['message'] . "</a>";
                echo "<a href=" . "'login.php'" . "class=" . "'btn btn-secondary'" . ">LOG OUT</a>";
            } else {
                echo "<a href=" . "'login.php'" . "class=" . "'btn btn-light'" . ">LOG IN</a>";
            }
            ?>

        </div>
    </nav>
    <br>
    <div class="container bg-light">
        <br>
        <h3>Adding more room<br></h3>
        <h5 style="background-color: powderblue">เลือกห้องพัก</h5>
        <div class="container bg-dark text-white">
            <br>
            <form method="POST">
                <?php

                $sql = 'SELECT * FROM Roomtype';
                $result = mysqli_query($con, $sql);
                $roomtype[] = '';
                $x = 0;
                while ($row = mysqli_fetch_array($result)) {
                    $roomtype[$x++] = $row;
                }
                ?>
                <label for="rt">Roomtype</label>
                <div class="bg-light">
                   
                <table  class="table table-bordered">
                    <tr>
                        <td width="50%">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios0" value="<?php echo $roomtype[0]['RoomType']; ?>" checked>
                                <label class="form-check-label" for="exampleRadios0">
                                    <?php echo $roomtype[0]['RoomType']; ?>
                                    <br>
                                    <img src="<?php echo $roomtype[0]['ExPicture']; ?>" alt="img0" class="img-fluid img-thumbnail" height="400" width="400">
                                </label>
                            </div>
                        </td>
                        <td width="50%">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="<?php echo $roomtype[1]['RoomType']; ?>">
                                <label class="form-check-label" for="exampleRadios1">
                                    <?php echo $roomtype[1]['RoomType']; ?>
                                    <br>
                                    <img src="<?php echo $roomtype[1]['ExPicture']; ?>" alt="img0" class="img-fluid img-thumbnail" height="400" width="400">
                                </label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="<?php echo $roomtype[2]['RoomType']; ?>">
                                <label class="form-check-label" for="exampleRadios2">
                                    <?php echo $roomtype[2]['RoomType']; ?>
                                    <br>
                                    <img src="<?php echo $roomtype[2]['ExPicture']; ?>" alt="img0" class="img-fluid img-thumbnail" height="400" width="400">
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="<?php echo $roomtype[3]['RoomType']; ?>">
                                <label class="form-check-label" for="exampleRadios3">
                                    <?php echo $roomtype[3]['RoomType']; ?>
                                    <br>
                                    <img src="<?php echo $roomtype[3]['ExPicture']; ?>" alt="img0" class="img-fluid img-thumbnail" height="400" width="400">
                                </label>
                            </div>
                        </td>
                    </tr>
                </table>
                </div>
<br>
                <div class="container bg-white text-dark">
                    <br>
                <label for="gt">Guest</label>
                    <tr>
                        <td width="50%">
                            <select name="guest" id='gt' class="form-control">
                                <?php
                                for ($i = 1; $i <= 9; $i++)
                                    echo '<option value="' . $i . '">' . $i . '</option>';
                                ?>
                            </select>
                        </td>
                    <tr>
                        <br>
            </div>
                <div class="container bg-dark">
                    <br>
                <td width="50%" >
                            <input class="form-check-input" name="ab" type="checkbox" value="yes" id="adbed">
                            <label class="form-check-label" for="adbed">Additions Bed</label>
                            <br>
                            <input class="form-check-input" name="fd" type="checkbox" value="yes" id="food">
                            <label class="form-check-label" for="food">Food</label>
                            <br>
                        </td>
                        <br>
            </div>

                <!-- <input class="btn btn-info" name="add" type="submit" value="Add"> -->
                <input type="hidden" name="bookno" value="<?php echo $bno ?>">
                <button formaction="test.php" class="btn btn-info" name="add" type="submit" onclick="dialog()" value="Add">ADD</button>
                <script>
                    function dialog() {
                        Swal.fire({
                            position: 'top',
                            type: 'success',
                            title: 'Your room has been added',
                            showConfirmButton: true
                        })
                    }
                </script>
                    <?php 
                    if(isset($_SESSION['added'])){
                        if($_SESSION['added']==1){
                            echo '<button formaction="confirm.php" class="btn btn-success" name="submit" type="submit" value="submit">Submit</button>';
                            }
                        }
                    ?>
                </form>
            <br>
        </div>
        <br>
    </div>
    <br>
    </div>
    <br>
</body>

</html>