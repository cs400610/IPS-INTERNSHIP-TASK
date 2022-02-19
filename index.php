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

<!-- Section  -->
<section id="home">
        <h1 class="h-primary">Welcome to Grand Hotel</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo laboriosam exercitationem ipsam saepe porro rem,
            ducimus consectetur modi eius distinctio fuga itaque numquam et eaque accusamus iste enim impedit animi
            quas. Incidunt, id illo.</p>
        <button class="btn">BOOK Now</button>
</section>

<section id="services-container">
<h1 class="h-primary center" style="top:4px">Book My Room</h1>
<center><table>
    <tr>
        <th width="20%" height="50px">Destination</th>
        <th width="20%" height="50px">Check-In Date</th>
        <th width="20%" height="50px">Check-Out Date</th>
        <th width="20%" height="50px">Rooms</th>
        <td rowspan="2"><input type="submit" value="Check" name="submit"></td>
        
    </tr>
    <tr id="input">
       <td width="20%" height="50px"><center><input type="text" name="d1" size="25" placeholder="Enter your Destination"></center></td>
       <td width="20%" height="50px"><center><input type="date" size="25" name="ci"></center></td>
       <td width="20%" height="50px"><center><input type="date" size="25" name="co"></center></td>
       <td width="20%" height="50px"><center>
           <select name="room" id="room">
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
           </select>
           </center>
       </td>
    </tr>
</table></center>
</section>

<!-- Section page to explain about Hotel -->
<section id="hotel-detail">
        <h1 class="h-primary">ABOUT US- GRAND HOTEL</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi repellat recusandae repellendus laborum repudiandae perspiciatis dicta impedit, saepe quisquam sed odit similique iste reprehenderit consequatur quam explicabo. Id esse corrupti repellat dicta aspernatur fuga eveniet debitis hic maxime delectus nihil unde impedit similique architecto harum quidem aliquid recusandae, eligendi vitae.</p>
</section>


    <!-- Our Clients who visits our Hotel -->

    <section id="client-section">
        <h1 id="headerclient" class="h-primary center">Our Clients</h1>
        <div id="clients">
            <div class="client-item">
                <img src="image/client1.jpg" alt="Our Clients">
            </div>
            <div class="client-item">
                <img src="image/client2.jpg" alt="Our Clients">
            </div>
            <div class="client-item">
                <img src="image/client3.jpg" alt="Our Clients">
            </div>
            <div class="client-item">
                <img src="image/client4.jpg" alt="Our Clients">
            </div>
        </div>
    </section>

    
</body>
</html>