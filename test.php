<html>

<body>
        <?php
       
       include('connect.php');
       $bno=$_POST['bookno'];
       $gno=$_POST['guest'];
       $addbed = isset($_POST['ab'])? 1:0;
       $food = isset($_POST['fd'])? 1:0;
       // echo $_SESSION['aval'];
       echo "bookno: ".$bno."<br>";
       echo "brancno: ".$_POST['branch']."<br>";
       // echo $addbed;
       // echo $food;
       echo "rt: ".$_POST['roomtype']."<br>";
       // echo $_POST['guest'];
       if (isset($_POST['add'])) {
               $sql = "SELECT RoomID
                                FROM roominfo
                                WHERE RoomID NOT IN (SELECT RoomID 
                                                    FROM bookingroom 
                                                    WHERE BookingNo IN (SELECT BookingNo 
                                                                        FROM bookinginfo 
                                                                        WHERE KeyStatus!='2'))
                                                    AND BranchNo =" . "'" . $_POST['branch'] . "'
                                                    AND RoomType =" . "'" . $_POST['roomtype'] . "'";
                                                    $result = mysqli_query($con, $sql) or die("Error: " . mysqli_error($sql));
                                                    $row = mysqli_fetch_array($result);
                                                    $rid=$row['RoomID'];
                                                    echo "Rid: ".$rid;
                                                    
                                                    
                                                    $sql2 = "INSERT INTO bookingroom
                                  VALUES('.$rid.','.$bno.','.$gno.','.$addbed.','.$food.')";
                        mysqli_query($con,$sql2) or die("Error: ".mysqli_error($con));

                }
       
        
        ?>
</body>

</html>