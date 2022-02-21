<?php
    include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>ADMIN AUTHENTICATION</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROOM DETAILS</title>
    <link href="css/style5.css" rel="stylesheet">
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
            <li class="item"><a href="contact.php">Help</a></li>



        </ul>
</nav>


<div class="container">


<center><h2>Welcome Admin</h2></center>
<table>
    <tr>
        <th width="48%" height="48px">Room No</th>
        <th width="48%" height="48px">Room Type</th>
        <th width="48%" height="48px">Price</th>
    </tr>
    <?php
        $query1 = "SELECT * FROM room";
        $run_query = mysqli_query($connection,$query1);
        while($row=mysqli_fetch_array($run_query))
        {

           $RoomNo = $row['RoomNo'];
           $RoomType = $row['RoomType'];
           $Price = $row['Price'];
          
    ?>
    <tr>
        <td width="48%" height="48px"><center><?php echo $RoomNo?></center></td>
        <td width="48%" height="48px"><center><?php echo $RoomType?></center></td>
        <td width="48%" height="48px"><center><?php echo $Price?></center></td>
    
    </tr>
    <?php
    }
    ?>

</table>

</div>  
</body>
</html>