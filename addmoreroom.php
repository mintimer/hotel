<html>
    <head>
        <title>Add more room</title>
        <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <?php include('connect.php'); ?>
        <link rel="stylesheet" href="bgbooking.css">
    </head>
    <body>
        <div id="addmore" name="addmore">
            <form class="form-control" method="POST">
                <div >
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
                    <select name="roomtype" id='rt' class="form-control">
                        <?php
                        for ($i = 0; $i < 4; $i++)
                            echo '<option value="' . $roomtype[$i]["RoomType"] . '">' . $roomtype[$i]["RoomType"] . '</option>';
                        ?>
                    </select>
                    <label for="gt">guest</label>
                    <select name="guest" id='gt' class="form-control">
                        <?php
                        for ($i = 1; $i <= 9; $i++)
                            echo '<option value="' . $i . '">' . $i . '</option>';
                        ?>
                    </select>
                    <input class="form-check-input" name="ab" type="checkbox" value="yes" id="adbed">
                    <label class="form-check-label" for="adbed">Additions Bed</label>
                    <br>
                    <input class="form-check-input" name="fd" type="checkbox" value="yes" id="food">
                    <label class="form-check-label" for="food">Food</label>
                    <br>
                    <!-- <input class="btn btn-info" name="add" type="submit" value="Add"> -->
                    <input type="hidden" name="bookno" value="<?php echo $bno ?>">
                    <button formaction="test.php" class="btn btn-info" name="add" type="submit" value="Add">ADD</button>
                </div>
            </form>
        </div>
    </body>
</html>