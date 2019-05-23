<html>
<head>
    <title>User Login Page</title>
</head>
<body>
    <style>
        body{
            background: #eee;
        }
        #frm{
            border: solid gray 1px;
            width: 20%;
            border-radius: 5px;
            margin: 100px auto;
            background: white;
            padding: 50px;
        }
        #btn{
            color: #fff;
            background: #337ab7;
            padding: 5px;
            margin-left: 69%;
        }

    </style>

    <div id="frm">
        <form action="userhome.php" method="POST">
            <label>Username: </label>
            <input type="text" name="user"><br>
            
            <label>Password: </label>
            <input type="text" name="pass"><br>
            <input type="submit" id="btn" value="login">

        </form>
    </div>
</body>
</html>