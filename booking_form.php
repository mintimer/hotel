<html>
<head>
<title>Booking Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php include('connect.php');
    ?>
</head>
    <div class="container">
    <body>
        <h3>Booking Form<br></h3>
        
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
        
        Check-In Date : <input id="cid" type="date" name="cidate" onChange = "show()">
        Check-Out Date : <input id="cod" type="date" name="codate" onChange = "show()">
        
        <p id="demo"></p>
        <Script>
            var night = new Date(night);
            function show() {
                var x = new Date(document.getElementById("cid").value);
                var y = new Date(document.getElementById("cod").value);
                night = (y-x)/(360*24*10000);
                if(night>0)
                    document.getElementById("demo").innerHTML = night + " Night(s)";
                else
                    document.getElementById("demo").innerHTML = "Please select the correct dates.";
            }
        </Script>

        <label for="discode">Discount Code <span id="percent"></span></label>
        <form>
            <input type="discountcode" name="disc" required class="form-control" id="discode" aria-describedby="discountHelp" placeholder="Enter Discount Code" onkeyup="show2(this.value)">
        </form>
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

        <p>Amount of Guest</p>

    </body>
    </div>
</html>