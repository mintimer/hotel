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
        <title>login</title>
</head>

<body>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #339999;" id="mynav">
                <a class="navbar-brand" style="color: white">
                        <img src="pic/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                        JustFang
                </a>
        </nav>
        <div class="card" style="width: Responsive;">
                <img class="card-img-top" src="pic/hotel.jpeg" alt="Card image cap">
                <div class="card-body">
                        <form action="login.php" method="post">
                                <div class="form-group">
                                        <label for="inputusername">Username</label>
                                        <input type="username" name="user" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp" placeholder="Enter username">
                                </div>

                                <div class="form-group">
                                        <label for="InputPassword">Password</label>
                                        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <button type="submit" name="btn" value="member" class="btn btn-outline-primary" aria-pressed="true">LOG IN</button>
                                <button type="submit" name="btn" value="guest" class="btn btn-outline-secondary" aria-pressed="true">GUEST</button>


                        </form>
                </div>
                <?php
                session_start();
                if (isset($_POST['btn'])) {
                        if ($_POST['btn'] == 'member') {
                                $_SESSION['href'] = '#';
                                require 'verify.php';
                        } else {
                                $_SESSION['message'] = "Log in";
                                $_SESSION['href'] = 'login.php';
                                header("Location: welcome.php");
                        }
                }

                ?>
        </div>

</body>

</html>