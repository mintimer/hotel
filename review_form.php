<html>
<head>
    <title>Rating form</title>
</head>
<body>
    <h1> Rating Service Form</h1>
    <?php
        $userID = $_POST["u_id"];
        $u_firstname = $_POST["u_firstname"];
        $u_lastname = $_POST["u_lastname"];
    ?>
 
    <?php 
        echo "<b>User ID: </b>".$userID;
        echo " [ ".$u_firstname." ".$u_lastname." ]";
    ?>
    <form action="review_success.php" method="POST">
        <b>Booking No.</b> 
        <input type="number" name="booking_no"><br>
        <div>
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

        .rating label:last-child {
        position: static;
        }

        .rating label:nth-child(1) {
        z-index: 5;
        }

        .rating label:nth-child(2) {
        z-index: 4;
        }

        .rating label:nth-child(3) {
        z-index: 3;
        }

        .rating label:nth-child(4) {
        z-index: 2;
        }

        .rating label:nth-child(5) {
        z-index: 1;
        }

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

        .rating label:last-child .icon {
        color: #000;
        }

        .rating:not(:hover) label input:checked ~ .icon,
        .rating:hover label:hover input ~ .icon {
        color: #09f;
        }

        .rating label input:focus:not(:checked) ~ .icon:last-child {
        color: #000;
        text-shadow: 0 0 5px #09f;
        }
        
    </style>
    
    <script type="text/javascript">
            $(':radio').change(function() {
        console.log('New star rating: ' + this.value);
        });    
    </script>
        Comment<br>
        <textarea name="comment" rows="4" cols="20">    
        </textarea><br>
        <input type="submit" value="submit">
    </form> 

</body>
</html>