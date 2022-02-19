<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Hotel Management</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="favicon" type="img/icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&family=Baloo+Thambi+2:wght@600&display=swap"
        rel="stylesheet">
    
</head>

<body>

<!-- Navbar for the Web Application -->
<nav id="navbar">
        <div class="container" id="logo">
            <img src="image/logo.jpg" alt="logo">
        </div>
        <div id="navbar-text">
            <h1>Grand Hotel</h1>
        </div>

        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container">Book My Stay</a></li>
            <li class="item"><a href="#client-section">Our Clients</a></li>
            <li class="item"><a href="#contact">Contact us</a></li>
            <li class="item"><a href="#contact">Help</a></li>



        </ul>
</nav>


<!-- Registration Form for the user to fill the form -->
<section id="form">
    <div id="form-box">
        <form action="adminindex1.php" method="post">
        <table>
            <tr>
                <td>Room No</td>
                <td><input type="text" name="RoomNo" placeholder ="Enter Room No" title="Room No"></td>
                
            </tr>

            <tr>
                <td>Room Type</td>
                <td><input type="text" name="RoomType" placeholder ="Enter Room Type" title="Room Type"></td>
                
            </tr>

            <tr>
            <td>Room-Price</td>
                <td><input type="text" name="Price" placeholder ="Enter Room-Price" title="Enter Room-Price"></td>
            </tr>

            <td>
                <input  id ="form-box2"type="submit" name="submit" value="Submit">
            </td>
        </table>
        </form>
        <?php

       if (isset($_POST['submit']))
       {
           $RoomNo = $_POST['RoomNo'];
           $RoomType = $_POST['RoomType'];
           $Price = $_POST['Price'];
                $sql = "INSERT INTO room (RoomNo, RoomType, Price) VALUES('$RoomNo','$RoomType','$Price')";
                if($connection->query($sql) === TRUE)
                {
                    echo "Data is Inserted";
                }
                else{
                    echo "Data is not interested";
                }
       }
       ?>
    </div>
</section>


</body>
</html>
