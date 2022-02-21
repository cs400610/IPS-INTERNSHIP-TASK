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
    <title>BOOKING</title>
    <link href="css/style6.css" rel="stylesheet">
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


<div class="container">


<center><h2>Welcome Admin</h2></center>
<table>
<center><tr>
        <th width="09%" height="50px">Name</th>
        <th width="10%" height="50px">ID NO</th>
        <th width="10%" height="50px">City</th>
        <th width="10%" height="50px">District</th>
        <th width="10%" height="50px">State</th>
        <th width="10%" height="50px">Check-In Date</th>
        <th width="10%" height="50px">Check-Out Date</th>
        <th width="10%" height="50px">No Of Members</th>
    </tr>
    <?php
        $query1 = "SELECT * FROM form";
        $run_query = mysqli_query($connection,$query1);
        while($row=mysqli_fetch_array($run_query))
        {
           $Name = $row['Name'];
           $ID = $row['ID'];
           $Address = $row['Address'];
           $City = $row['City'];
           $State = $row['State'];
           $ci = $row['ci'];
           $co = $row['co'];
           $members = $row['members'];
    ?>
    <tr></center>
        <td width="10%" height="50px"><center><?php echo $Name?></center></td>
        <td width="10%" height="50px"><center><?php echo $ID?></center></td>
        <td width="10%" height="50px"><center><?php echo $Address?></center></td>
        <td width="10%" height="50px"><center><?php echo $City?></center></td>
        <td width="10%" height="50px"><center><?php echo $State?></center></td>
        <td width="10%" height="50px"><center><?php echo $ci?></center></td>
        <td width="10%" height="50px"><center><?php echo $co?></center></td>
        <td width="10%" height="50px"><center><?php echo $members?></center></td>
    </tr>
    </tr>
    <?php
    }
    ?>
</table>

</div>  
</body>
</html>