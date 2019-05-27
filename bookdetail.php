<html>
    <head>
        <title>Booking detail</title>
        <?php 
            include('connect.php');
            session_start();
        ?>
    </head>
    <body>
        Booking No: <?php echo $_SESSION['bno']?><br>
        Check in date: <?php echo $_SESSION['cidate']?><br>
        Check out date: <?php echo $_SESSION['codate']?><br>
        Total price: <?php ?><br>
        Using point: <?php echo $_SESSION['upoint']?><br>
        Discount percent: <?php ?><br>
        Total discount: <?php ?><br>    
        Balance: <?php ?><br>
        Get point: <?php ?><br>


    </body>
</html>