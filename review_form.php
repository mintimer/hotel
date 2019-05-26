<html>

<head>
    <title>Rating form</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</head>

<body>
    <h1> Rating Service Form</h1>
    <?php
    include('connect.php');
    session_start();
    $namee = $_SESSION['namee'];

    $userID = $namee['userid'];
    $u_firstname = $namee['firstname'];
    $u_lastname = $namee['lastname'];
    ?>

    <?php
    echo "<b>User ID: </b>" . $userID;
    echo " [ " . $u_firstname . " " . $u_lastname . " ]";
    ?>
    <form action="#" method="POST">
        <b>Select room</b>
        <select name="roomid" class="form-control">
            <?php
            if (!isset($_POST['roomid'])) {
                echo "<option select=" . "selected" . ">----------------------------------------</option>";
                $_POST['roomtype'] = NULL;
                $_SESSION['bName'] = NULL;
                $_SESSION['bCountry'] = NULL;
            }
            $sql = "SELECT ri.RoomID, ri.RoomType, bri.BranchName, bri.BranchCountry
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
                } else {
                    echo "<option value='" . $row['RoomID'] . "'>" . $row['RoomType'] . ": " . $row['RoomID'] . "</option>";
                }
            }
            ?>
        </select>
        <button type="submit" class="btn btn-info">Select</button>
    </form>

    <?php
            if(isset($_POST['roomid'])){
                echo $_POST['roomid'];
                echo $_SESSION['roomtype'];
                echo $_SESSION['bName'];
                echo $_SESSION['bCountry'];
            }

            // while ($row = mysqli_fetch_array($result)) {
            //     echo $row['BranchCountry']." ".$row['BranchName']."<br>";
            //     // if($row['Roomtype']==$_POST['roomtype']){
            //     // }
            // }
        
    ?>
    <br>
    <br>
    <br>
    <br>


    <form action="review_success.php"  method="POST">
        <div <?php if (!isset($_POST['roomid'])) {
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

            <script type="text/javascript">
                $(':radio').change(function() {
                    console.log('New star rating: ' + this.value);
                });
            </script>

        <div <?php if (!isset($_POST['roomid'])) {
                        echo "style=" . "visibility" . ": hidden";}?>>
                <b>Comment</b><br>
                    <textarea class="form-control" type="textarea" name="comment" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                <!-- <br><input type="button" onclick="dialog()" value="submit"> -->
                <br><input type="submit" value="submit">
                <!-- onclick="dialog()" -->
            </div>
                <?php
                    if(isset($_POST['comment'])){
                        $comment = $_POST['comment'];
                    }else{
                        $comment = "Nothing";
                    }
                ?>
            <script>
                    function dialog() {
                        var comment="<?php echo $comment ?>";
                        Swal.fire({
                            position: 'top',
                            type: 'success',
                            title: 'Your work has been saved: '+comment,
                            showConfirmButton: true,
                        })
                    
                    }
            </script>
        </form>

   <?php mysqli_close($con); ?>
</body>

</html>