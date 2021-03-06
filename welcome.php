<html lang="en">

<head>
  <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <?php include('connect.php');
  ?>
  <link rel="stylesheet" href="fontstyle.css">
  <title>JustFang Hotel</title>
</head>

<body class="fontstyle">
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
          <a class="nav-link disable" style="color: #eceaea">HOME</a>
        </li>

        <li class="nav-item">
          <?php
            if($_SESSION['role']=='member')
              echo "<a class='nav-link' href='booking_form.php' style='color: white'>BOOKING</a>";
            else echo "<a class='nav-link' href='guest.php' style='color: white'>BOOKING</a>";
          ?>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="viewdiscount.php" style="color: white">PROMOTION</a>
        </li>


        <li class="nav-item">
          <?php
          if ($_SESSION['role'] == 'member') {
            echo "<a class=" . "nav-link" . " href=" . "review_form.php" . " style=" . "color:white" . ">REVIEW</a>";
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

  <img class="card-img-top" src="pic/hotel2.jpeg" alt="Card image cap">
</body>
<?php mysqli_close($con); ?>

</html>