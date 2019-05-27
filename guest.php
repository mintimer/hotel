<html>
<head>
    <title>Guest information</title>
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php include('connect.php');
    ?>
    <link rel="stylesheet" href="fontstyle.css">
</head>
<body>
    <form action="insertguest.php" method="POST">
        Email: <input type="email" name="email" require placeholder="example@mail.com"><br>
        Firstname: <input type="text" name="fName" require placeholder="Lorem"><br>
        Lastname: <input type="text" name="lName" require placeholder="Ipsum"><br>
        Phone: <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required placeholder="080-413-xxxx"><br>
        <input type="submit" name="submit" value="submit">
    </form>

</body>
</html>