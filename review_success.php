<html>
<body>
    <?php
        include('connect.php');
        session_start();
        $sql2 = "INSERT INTO reviewinfo(BookingNo,Comment,RatingScore)
                VALUES("."'".$_SESSION['bookingno']."'".","."'".$_POST['comment']."'".","."'".$_POST['stars']."'".")";
        mysqli_query($con, $sql2)or die('Error:'.mysqli_error($con));

        $sql3 = "UPDATE RoomType rt
                 SET Rating = (SELECT AVG(ri.RatingScore)
                               FROM ReviewInfo ri
                               WHERE ri.BookingNo IN (SELECT br.BookingNo
                                                      FROM BookingRoom br
                                                      WHERE br.RoomID IN (SELECT ri.RoomID
                                                                          FROM RoomInfo ri
                                                                          WHERE ri.RoomType = "."'".$_SESSION['roomtype']."'".") ) )
                 WHERE rt.RoomType = "."'".$_SESSION['roomtype']."'";
        mysqli_query($con, $sql3);
        header("Location: review_form.php");
        mysqli_close($con);
    ?>
</body>
</html>
