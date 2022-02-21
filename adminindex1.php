<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROOM UPDATE</title>
    <link href="css/style4.css" rel="stylesheet">
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
            <li class="item"><a href="home.php">Home</a></li>
            <li class="item"><a href="adminindex1.php">Room Update</a></li>
            <li class="item"><a href="booking.php">Bookings</a></li>
            <li class="item"><a href="roomdetails.php">Room Details</a></li>
            <li class="item"><a href="#contact">Help</a></li>



        </ul>
</nav>


<section id="form">
    <div id="form-box">
        <form action="adminindex1.php" method="post">
        <center><table>
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
        </table></center>
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
                    echo "Data Inserted Successfully";
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
