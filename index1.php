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
    <link href="css/style1.css" rel="stylesheet">
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
        <form action="index1.php" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="Name" placeholder ="Enter Name" title="Name"></td>
                <td>ID NO</td>
                <td><input type="text" id ="form-box1" name="ID" placeholder ="Enter ID" title="Name"></td>
            </tr>

            <tr>
            <td>Address</td>
                <td><input type="text" name="Address" placeholder ="Enter Address" title="Address"></td>
            </tr>

            <tr>
            <td>City</td>
                <td><input type="text" name="City" placeholder ="Enter City" title="City"></td>
            </tr>

            <tr>
            <td>State</td>
                <td><input type="text" name="State" placeholder ="Enter State" title="state"></td>
            </tr>

            <tr>
            <td>Email</td>
                <td><input type="email" name="Email" placeholder ="Enter Email" title="state"></td>
            </tr>

            <tr>
            <td>Check-In Date</td>
                <td><input type="date" name="ci" title="state"></td>
            </tr>

            <tr>
            <td>Check-Out Date</td>
                <td><input type="date" name="co" title="state"></td>
            </tr>

            <tr>
            <td>No Of Members</td>
                <td><input type="text" name="members" placeholder="Enter No Of Members" title="members"></td>
            </tr>
            <td>
                <input  id ="form-box2"type="submit" name="submit" value="Submit">
            </td>
        </table>
        </form>
       <?php

       if (isset($_POST['submit']))
       {
           $Name = $_POST['Name'];
           $ID = $_POST['ID'];
           $Address = $_POST['Address'];
           $City = $_POST['City'];
           $State = $_POST['State'];
           $Email = $_POST['Email'];
           $ci = $_POST['ci'];
           $co = $_POST['co'];
              $members = $_POST['members'];
                $sql1 = "INSERT INTO form (Name, Address, City, State, Email, ci, co,members, ID) VALUES('$Name','$Address','$City','$State','$Email ','$ci','$co','$members','$ID')";
                if($connection->query($sql1)===TRUE)
                {
                    echo "Data Inserted";
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
