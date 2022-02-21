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
    <title>Home-Hotel Management</title>
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
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item"><a href="#services-container">Book My Stay</a></li>
            <li class="item"><a href="#client-section">Our Clients</a></li>
            <li class="item"><a href="contact.php">Contact us</a></li>
            <li class="item"><a href="#contact">Help</a></li>



        </ul>
</nav>


<div class="container">
    <center><h2>LOGIN PAGE</h2></center>
    <form action="" method="post">
    <center><table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" placeholder="Enter Admin Username" title="Enter Username"></td>
        </tr>

        <tr>
            <td>Password</td>
            <td><input type="password" name="password" placeholder="Enter Admin Password" title="Enter Password"></td>
        </tr>
        <tr>
       <td > <center><input  id ="form-box2" type="submit" name="submit" value="LOGIN"></center></td>
        </tr>
    </table></center>
    </form>
    <?php
        if(isset($_POST['submit']))
        {
             $username = $_POST['username']; 
             $password = $_POST['password'];
             $query1 = "SELECT * FROM admin";
             $run_query = mysqli_query($connection,$query1);
             $row = mysqli_fetch_array($run_query);
             $user = $row['username'];
             $pass = $row['password'];
             if($username == $user && $password == $pass)
             {
                 header("Location:home.php");
             }
             else{
                header("Location:index.php?Wrong User");
             }
        }
    ?>
</div>

    
</body>
</html>