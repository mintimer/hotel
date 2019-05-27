<html>
<head>
        <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <?php include('connect.php');?>
        <link rel="stylesheet" href="bgbooking.css">
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
    <title>Booking Form</title>
    </head>

    <body class="bgbooking"> 
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
          <a class="nav-link disable" href="#" style="color: #eceaea">BOOKING</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#" style="color: white">PROMOTION</a>
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
            <h3>Booking Form<br></h3>
            <div style="background-color: powderblue">
            <?php
            if($_SESSION['role'] == 'member'){
                $namee = $_SESSION['namee'];
                $userID = $namee['userid'];
                $u_firstname = $namee['firstname'];
                $u_lastname = $namee['lastname'];
                echo 'UserID : '.$userID;
            }
            else echo 'Guest';
            $sql = 'SELECT Max(BookingNo) as max FROM Bookinginfo';
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($result);
            $bno = $row['max']+1;
            echo '<br>BookingNo : '.$bno;
            ?>
            </div>
            <br>

            <div class="container bg-white">
            <br>
            <form id="form1" action="#" method="post">
            <label for="validationHotel">Select Hotel</label>
            <select name="branch" id="validationHotel" class="custom-select" required>
                <option selected value="">Hotel</option>
                <?php
                $sql = "SELECT branchname,branchno FROM branchinfo";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo '<option value="' . $row['branchno'] . '">' . $row['branchname'] . '</option>';
                }
                ?>
            </select><br><br>
        Check-In Date* : <input id="cid" type="date" name="cidate" onChange = "show()" value='<?php if(isset($_POST['cidate'])) echo $_POST['cidate']; ?>' required>
        Check-Out Date* : <input id="cod" type="date" name="codate" onChange = "show()" value='<?php if(isset($_POST['codate'])) echo $_POST['codate']; ?>' required>
        <p id="demo"></p>
        <Script>
            var night = new Date(night);
            function show() {
                var x = new Date(document.getElementById("cid").value);
                var y = new Date(document.getElementById("cod").value);
                night = (y-x)/(360*24*10000);
                var now = new Date();
                now = (x-now)/(360*24*10000);
                if(night>0 && now>0)
                    document.getElementById("demo").innerHTML = night + " Night(s)";
                else
                    document.getElementById("demo").innerHTML = 'Please select the correct dates.';
            }
        </Script>

        <label for="discode">Discount Code <span id="percent"></span></label>
        <input type="discountcode" name="disc" class="form-control" id="discode" value="<?php if(isset($_POST['disc'])) echo $_POST['disc']; ?>" placeholder="Enter Discount Code" onkeyup="show2(this.value)">
        <script>
            function show2(str) {
                if (str.length == 0) { 
                    document.getElementById("percent").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("percent").innerHTML = this.responseText;
                        }
                    }
                    xmlhttp.open("GET", "checkdiscode.php?q="+str, true);
                    xmlhttp.send();
                }
            }
        </script>
        <br>
        <div class="form-row">
        <div class="form-group col-md-2">
            <label for="exampleFormControlSelect1">Amount of Guest*</label>
            <select name="amo" class="form-control" id="exampleFormControlSelect1" required>
                <?php 
                    if(isset($_POST['amo'])) 
                        echo '<option value='.$_POST['amo'].'>'.$_POST['amo'].'</option>'; 
                ?>
                <option value="">---</option>
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
                <option value=6>6</option>
                <option value=7>7</option>
                <option value=8>8</option>
                <option value=9>9</option>
                <option value=10>10</option>
            </select>
        </div>
        </div>
        <?php
            if(!isset($_POST['next']) || !isset($success))
                echo '<input class="btn btn-info" name="next" type="submit" value="Next">';
        ?>
        <form><br>

        <?php
        $success = 0;
            if(isset($_POST['next'])){
                $cidate = strtotime($_POST['cidate']);
                $codate = strtotime($_POST['codate']);
                $night = ceil(($codate-$cidate)/60/60/24);
                $now = time();
                $code = $_POST["disc"];
                if(strlen($code)==0)
                    $percent=0;
                else
                    $percent = $_SESSION['percent'];
                if($night<=0 || $cidate < $now)
                    echo "<span style="."color:red".">Please select the correct date.<span>";
                else if($percent<=0 && strlen($code)>0 )
                    echo "<span style="."color:red".">Incorrect discount code.<span>";
                else $success = 1;
            }
        ?>
        
        <form action="#" class="form-control">
        <div <?php if($success==0) echo "style="."visibility".": hidden";?>>
            <?php
                if($success==1){
                    $sql = 'SELECT * FROM Roomtype';
                    $result = mysqli_query($con,$sql);
                    $roomtype[] = '';
                    $x = 0;
                    while($row = mysqli_fetch_array($result)){
                        $roomtype[$x++] = $row;
                    }
                }
            ?>
            <label for="rt">Roomtype</label>
            <select name="roomtype" id='rt' class="form-control">
                <?php
                    for($i=0;$i<4;$i++)
                        echo '<option value="'.$roomtype[$i]["RoomType"].'">'.$roomtype[$i]["RoomType"].'</option>';
                ?>
            </select> 
            <label for="gt">guest</label>
            <select name="guest" id='gt' class="form-control">
                <?php
                    for($i=0;$i<=$_POST['amo'];$i++)
                        echo '<option value="'.$i.'">'.$i.'</option>';
                ?>
            </select> 
        </div>
        </form>
        <br>
            </div>
            <br>
        </div>
        </div>
        
    </body>
    <?php mysqli_close($con); ?>
    </div>
</html>