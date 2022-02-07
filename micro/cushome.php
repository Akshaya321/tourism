<html>
<head>
<title>customer home</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

</head>
<style>
    
    {
        margin: 0;
        padding: 0;
    }
 @import"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";   
body
{
    background-image: url('./feedimg.jpg');
    background-size: cover;
    background-position: center;   
    font-family: sans-serif;
}
label.logo{
    color: white;
    font-size: 35px;
    line-height: 50px;
    padding: 0 100px;
    font-weight: bold;
    float: left;
}
.menu-bar 
{
    background: black;
    text-align: center;
    
}   
.menu-bar ul
{
    display: inline-flex;
    list-style: none;
    color: #fff;

} 
.menu-bar ul li
{
    width: 120px;
    margin: -10px;
    padding: 15px;
}
.menu-bar ul li a
{
    text-decoration: none;
    color: #fff;
}
.active,.menu-bar ul li:hover
{
    background: #d31709a4;
    border-radius: 100px;

}
.menu-bar, .fa
{
    margin-right: 8px;

}   
.content span{
    color: red;
    font-size: 60px;
} 

</style>
<body>
    
    <?php
    session_start();
    $userid=$_SESSION['userid'];
    ?>
    <input type="hidden" name="userid" value="<?php echo $userid; ?>" readonly>

    <div  class="menu-bar">
        <nav>
            <label class="logo">CUSTOMER</label>
    <ul>
        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
        </li>
        <li><a href="viewpackuser.php"><i class="fa fa-globe"></i>Package</a>
        </li>
        <li><a href="view_bookings.php"><i class="fa fa-book"></i>View Booking</a>
        </li>
        <li><a href="aboutus.html"><i class="fa fa-pencil"></i>About us</a>
        </li>
        <li><a href="feedback.html"><i class="fa fa-comments"></i>Feedback</a></li>
        <li><a href="contact.html"><i class="fa fa-phone"></i>Contact us</a></li>
        <li><a href="user_profile.php"><i class="fa fa-user"></i>Profile</a>
        </li>
        <li><a href="index.html"><i class="fa fa-lock lock"></i>Logout</a></li>
    </ul>
        </nav>
    </div>
    <div class="content">
        <center><h2><span>W</span>ELCOME</h2></center>
        <marquee direction="left">
        <h1><span><br><br><br>W</span>elcome to a <span>L</span>andlocked District <span>I</span>dukki, is one of <span>M</span>ost nature rich areas of <span>K</span>erala </h1><br><br>
        </marquee>
       
    </div>
</body>
</html>
