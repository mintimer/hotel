<html>

<head>
    <title>Rating form</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bgreview.css">
</head>

<body class="bgreview">
<?php session_start(); ?>
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
          <a class="nav-link" href="welcome.php"  style="color:white">HOME</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="booking_form.php" style="color: white">BOOKING</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="viewdiscount.php" style="color: white">PROMOTION</a>
        </li>


        <li class="nav-item">
          <?php
          if ($_SESSION['role'] == 'member') {
            echo "<a class=" . "nav-link" . " href=#" . "review_form.php" . " style=" . "color:#eceaea" . ">REVIEW</a>";
          }
          ?>
        </li>

      </ul>
      
      <?php
        if($_SESSION['role']=='member'){
          echo "<a class=" ."'nav-link'"." style="."'color: white'".">".$_SESSION['message']."</a>";
          echo "<a href="."'login.php'". "class="."'btn btn-secondary'".">LOG OUT</a>";
        }else{
          echo "<a href="."'login.php'". "class="."'btn btn-light'".">LOG IN</a>";
        }
      ?>

    </div>
  </nav>
  <br>
        <div class="container bg-light">
<br>
    <h3> Rating Service Form</h3>
    <?php
    include('connect.php');
    $namee = $_SESSION['namee'];

    $userID = $namee['userid'];
    $u_firstname = $namee['firstname'];
    $u_lastname = $namee['lastname'];
    ?>
    <div style="background-color: powderblue">
        <?php
        echo "<b>User ID: </b>" . $userID;
        echo " [ " . $u_firstname . " " . $u_lastname . " ]";
        ?>
    </div>
    <br>
        <div class="container bg-white">
        <br>
        <form action="#" method="POST">
            <b>Select room</b>
            <select required name="roomid" class="form-control">
                <?php
                if (!isset($_POST['roomid'])) {
                    echo "<option value=''".">----------------------------------------</option>";
                    $_POST['roomtype'] = NULL;
                    $_SESSION['bName'] = NULL;
                    $_SESSION['bCountry'] = NULL;
                }
                $sql = "SELECT ri.RoomID, ri.RoomType, bri.BranchName, bri.BranchCountry, bi.BookingNo
                        FROM roominfo ri
                        INNER JOIN 	branchinfo bri ON ri.BranchNo = bri.BranchNo
                        INNER JOIN bookingroom br ON ri.RoomID = br.RoomID
                        INNER JOIN bookinginfo bi ON br.BookingNo = bi.BookingNo
                        WHERE bi.UserID = '$userID' AND TIMESTAMPDIFF(DAY,bi.CheckOutDate,CURRENT_TIMESTAMP) <= 100";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    if ($row['RoomID'] == $_POST['roomid']) {
                        echo "<option selected=" . "selected" . " value='" . $row['RoomID'] . "'>" . $row['RoomType'] . ": " . $row['RoomID'] . "</option>";
                        $_SESSION['roomtype'] = $row['RoomType'];
                        $_SESSION['bName'] = $row['BranchName'];
                        $_SESSION['bCountry'] = $row['BranchCountry'];
                        $_SESSION['bookingno'] = $row['BookingNo'];
                    } else {
                        echo "<option value='" . $row['RoomID'] . "'>" . $row['RoomType'] . ": " . $row['RoomID'] . "</option>";
                    }
                }
                ?>
            </select>
            <br>
            <button type="submit" class="btn btn-info">Select</button>
        </form>
            <?php
                    if(isset($_POST['roomid'])){
                        echo "<b>Room ID: </b>".$_POST['roomid']."<br>";
                        echo "<b>Room Type: </b>".$_SESSION['roomtype']."<br>";
                        echo "<b>Branch: </b>".$_SESSION['bName']."<br>";
                        echo "<b>Country: </b>".$_SESSION['bCountry']."<br>";
                        echo "<b>Booking No.: </b>".$_SESSION['bookingno']."<br>";
                    }
                
            ?>

        <form action="review_success.php"  method="POST">
            <div class="col-12 text-center" <?php if (!isset($_POST['roomid'])) {
                        echo "style=" . "visibility" . ": hidden";
                    } ?>>
                    <div class="rating">
                        <label>
                            <input type="radio" name="stars" value="1" />
                            <span class="icon">★</span>
                        </label>
                        <label>
                            <input type="radio" name="stars" value="2" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                        </label>
                        <label>
                            <input type="radio" name="stars" value="3" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                        </label>
                        <label>
                            <input type="radio" name="stars" value="4" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                        </label>
                        <label>
                            <input type="radio" name="stars" value="5" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                        </label>
                    </div>
                <!-- <input type="hidden" name="stars"> -->
            </div>
                <style>
                    .rating {
                        display: inline-block;
                        position: relative;
                        height: 50px;
                        line-height: 50px;
                        font-size: 50px;
                    }

                    .rating label {
                        position: absolute;
                        top: 0;
                        left: 0;
                        height: 100%;
                        cursor: pointer;
                    }

                    .rating label:last-child {position: static;}
                    .rating label:nth-child(1) {z-index: 5;}
                    .rating label:nth-child(2) {z-index: 4;}
                    .rating label:nth-child(3) {z-index: 3;}
                    .rating label:nth-child(4) {z-index: 2;}
                    .rating label:nth-child(5) {z-index: 1;}
                    .rating label input {
                        position: absolute;
                        top: 0;
                        left: 0;
                        opacity: 0;
                    }
                    .rating label .icon {
                        float: left;
                        color: transparent;
                    }
                    .rating label:last-child .icon {color: #000;}
                    .rating:not(:hover) label input:checked~.icon,
                    .rating:hover label:hover input~.icon {color: #09f;}
                    .rating label input:focus:not(:checked)~.icon:last-child {
                        color: #000;
                        text-shadow: 0 0 5px #09f;
                    }
                </style>

                <!-- <script type="text/javascript">
                    $(':radio').change(function() {
                        console.log('New star rating: ' + this.value);
                    });
                </script> -->

            <div <?php if (!isset($_POST['roomid'])) {
                            echo "style=" . "visibility" . ": hidden";}?>>
                    <b>Comment</b><br>
                        <textarea class="form-control" type="textarea" name="comment" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                    <!-- <br><input type="button" onclick="dialog()" value="submit"> -->
                    <br>
                    <div class="col-12 text-center" >
                    <button type="submit" onclick="dialog()" value="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
                
                <script>  
                        function dialog() {
                            Swal.fire({
                                position: 'top',
                                type: 'success',
                                title: 'Your review has been saved',
                                showConfirmButton: true
                            })

                        }
                </script>
            </form>
        <br>
        </div>
        <br>
        </div>
        <br>

   <?php mysqli_close($con); ?>
</body>

</html>