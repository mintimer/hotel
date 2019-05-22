<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    
        <b>Find Staff Information</b><br>

        <form action="/Test Query.php" method="post">
            <div class="form-group">
            <label for="InputStaffID">StaffID</label>
            <input type="text" class="form-control" name="StaffID" id="InpurStaffID" aria-describedby="emailHelp" placeholder="Enter StaffID">
            </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


        <!-- <form action="/Test Query.php" method="post">
            Staff ID. :<input type="text" name="StaffID"><br>
            <input type="submit">
        </form> -->
    </body>
</html>