<html>
    <head>
        <title>Confirmation</title>
        <?php 
        include('connect.php');
        session_start();
        ?>
    </head>
    <body>
        <?php echo $_SESSION['uid']; ?>
        <form action="#" method="GET"> 
            Using point: 
            <select name="upoint" class="form-control">
                <option value="0">0</option>
                <?php
                        if($_SESSION['role']=='member'){
                            for($i=1;$i<=20;$i++)
                            echo "<option value='$i'>$i</option>";
                            
                            $sql="SELECT Point
                                  FROM memberinfo
                                  WHERE Username='".$_SESSION['uid']."'";
                            $result=mysqli_query($con,$sql) or die(mysqli_error($con));
                            $row=mysqli_fetch_array($result);    
                        }else $row['Point']=0;
                ?>
            </select>
            <button type="submit" class="btn btn-info">Check</button>
        </form>
        <?php 
            if(isset($row['Point'])&&isset($_GET['upoint'])){
                if($_GET['upoint']>$row['Point']){
                    echo "More than u have";
                }else {
                    echo "Goq";
                    $_SESSION['upoint']=$_GET['upoint'];
                }
            }
        ?>
        <a href="bookdetail.php">Use point</a>
    </body>
</html>