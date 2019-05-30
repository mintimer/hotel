<html>
    <head>
        <title>Confirmation</title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="bgbooking.css">
        <title>Confirmation</title>
        <?php 
        include('connect.php');
        session_start();
        ?>
    </head>
    <body class="bgbooking">
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
        <h2 class="font-weight-bold"> <?php echo $_SESSION['uid']; ?> </h2>
        <div class="container bg-dark text-white">
            <br>
        <form action="#" method="GET"> 
            Using point: 
            <?php if($_SESSION['role']=='member'){
                $sql = "SELECT Point FROM memberinfo WHERE username = '".$_SESSION['uid']."'";
                $result = mysqli_query($con,$sql);
                $row = mysqli_fetch_array($result);
                echo "You have ".$row['Point']." points."
                }?>
            <select name="upoint" class="form-control">
                <option value="0">0</option>
                <?php
                        if($_SESSION['role']=='member'){
                            for($i=1;$i<=20;$i++)
                            if($i==$_GET['upoint']){
                                echo "<option selected value='".$_SESSION['upoint']."'>".$_SESSION['upoint']."</option>";

                            }else echo "<option value='$i'>$i</option>";
                            
                            $sql="SELECT Point
                                  FROM memberinfo
                                  WHERE Username='".$_SESSION['uid']."'";
                            $result=mysqli_query($con,$sql) or die(mysqli_error($con));
                            $row=mysqli_fetch_array($result);    
                        }else $row['Point']=0;
                ?>
            </select>
            <br>
            <button type="submit" class="btn btn-danger">Check</button>
        </form>
        <br>
        </div>
        <?php 
            if(isset($row['Point'])&&isset($_GET['upoint'])){
                if($_GET['upoint']>$row['Point']){
                    echo "More than u have";
                    $_SESSION['upoint']=0;
                    
                }else {
                    $_SESSION['upoint']=$_GET['upoint'];
                    echo '<br><div class="col-12 text-center" >
                        <a class="btn btn-outline-info" href="bookdetail.php" role="button">Use point</a>
                        </div>';
                }
            }
        ?>             
        <br>
        </div>
    </body>
</html>