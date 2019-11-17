<?php
    session_start();
?>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>MaidEasy</title>
		<!-- ICON -->
		<link href = "img/cleaning-ConvertImage.png" rel = "icon"/>

		<!-- NAVBAR STYLESHEET -->
        <link href="./css/navbar.css" rel="stylesheet"/>
        <link href="./css/home.css" rel="stylesheet"/>
        <link href="lib/bootstrap.min.css" rel="stylesheet"/>
        <link href="./css/about.css" rel="stylesheet"/> 
        <link href="./css/contact.css" rel="stylesheet"/>
        <link href="./css/services.css" rel="stylesheet"/>
        <link href="./css/signup.css" rel="stylesheet"/>   
        <link href="./css/register.css" rel="stylesheet"/>
    </head>
	<body>
        <div>
            <nav id = "navbar" class="navbar navbar-expand-lg navbar-light shadow fixed-top" style = "background-color:transparent">
                <div class="container" >
                    <a class="navbar-brand" href="#home">Maid Easy</a>
                        <button id = "navbar-ham" class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto">
                            <li class="nav-element current">
                                <a class="nav-link" href="#">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <div class = "space" style = "color:transparent;">&nbsp</div>
                            <li class="nav-element">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <div class = "space" style = "color:transparent;">&nbsp</div>
                            <li class="nav-element">
                                <a class="nav-link" href="#services">Services</a>
                            </li>
                            <div class = "space" style = "color:transparent;">&nbsp</div>
                            <li class="nav-element">
                                <a class="nav-link" href="#register">Register</a>
                            </li>
                            <div class = "space" style = "color:transparent;">&nbsp</div>
                            <li class="nav-element">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                            <div class = "space" style = "color:transparent;">&nbsp</div>
                            <li class="nav-item dropdown nav-element" id="more">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  More
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php if(!isset($_SESSION["Username"])){ ?>
                                        <a class="dropdown-item nav-element" id="loginButton" style="color: white" href="loginpage.php">Login</a>
                                        <a class="dropdown-item nav-element" id="signupButton" style="color: white" href="signuppage.php">Sign Up</a>
                                    <?php } else { ?>
                                        <a class="dropdown-item nav-element" id="logoutButton" style="color: white" href="requestpage.php">Request</a>
                                        <a class="dropdown-item nav-element" id="logoutButton" style="color: white" href="logout.php">Logout</a>
                                    <?php } ?>
                                </div>
                              </li>
                            </ul>
                        </div>
                </div>
            </nav>
        </div>
        
        <!-- Home -->
        <div class = "block" id="home">
            <div class="home-container">
                <h1>Maid Easy</h1>
                <a href="#about" class="btn-get-started">Get Started</a>
                <h2>
                    <a href="" class="typewrite type" data-period="2000" data-type='[ "Washing", "Dusting", "Cleaning", "Sweeping" ]'>
                        <span class="wrap"></span>
                    </a>
                </h2>
              
            </div>
        </div>
        <!-- End of Home -->

        <!-- About US -->
        <div class = "block parallax block1" id = "about">

            <!-- <div align = "center"  style="height:400px;background-color:rgba(255, 115, 0, 0.479);font-size:16px;margin-block-start: 200px;">
                <b><h5 align = "left" style="color:white; font-family:montserrat;margin-inline-start: 215px;" >ABOUT US</h5></b>
            </div> -->
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <div class = "row1">&nbsp;</div>
            <div class = "outer">
                <div class = "row1">
                    <div class ="column1">
                        <p class = "TextToBeWritten"><h3 style="color:white;font-size: x-large;margin-left: 215px;">About Us</h3>
                            <p class = "TextToBeWritten">Utilizing a maid service may be considered due to a number of personal factors, including but not limited
                            to geographical location, social standing, lack of personal time, lack of experience. There are many reasons
                            why individuals may consider hiring help around the house, especially with cleaning. It may, for example, 
                            prove easier for them to enjoy time with their family rather than spending time cleaning.</p>
                        </p>
                    </div>
                    <div class ="column1">
                        <img src = "img/aboutus.jpg" style ="position: absolute;border-radius:10px;height:330px;width:530px;margin-top:55px;margin-left:25px">       
                    </div>
                </div>
            </div>
            <div class = "row1">&nbsp;</div>


        </div>
        <!-- End of About US -->

        <!-- Services -->
        <div class = "block" id = "services">
            <div class = "temp-dark">
                <br><br><br><br>
                <div class="services-container">
                    <div class="card-container">
                        <div class="image-container" >
                            <img src="img/cleaning.jpg" alt="To be added" class="services-imgs" />
                        </div>
                        <br><br><h2>CLEANING</h2>
                        <div class="overlay">
                            <h3 class="overlay-title">Cleaning</h3>
                            <div class="text">Text to be added</div>
                        </div>
                    </div>
                        
                    <div class = "space-contact">&nbsp</div>
                    <div class="card-container">
                        <div class="image-container" >
                            <img src="img/cooking.jpg" alt="To be added" class="services-imgs" />
                        </div>
                        <br><br><h2>COOKING</h2>
                        <div class="overlay">
                            <h3 class="overlay-title">Cooking</h3>
                            <div class="text">Text to be added</div>
                        </div>
                    </div>
                    <div class = "space-contact">&nbsp</div>
                    <div class="card-container">
                        <div class="image-container" >
                            <img src="img/washing.jpg" alt="To be added" class="services-imgs" />
                        </div>
                        <br><br><h2>WASHING</h2>
                        <div class="overlay">
                            <h3 class="overlay-title">Washing</h3>
                            <div class="text">Text to be added</div> <!--Includes Washing clothes with detergents, pressing and folding dried clothes-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of services -->

        <!-- Register -->
        <div class = "block parallaxr" id = "register" >
            <div class="container" style="height: 100vh;width:100vw;">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-left" style="margin-top: 100px;">
                            <h3 class="title-a" style="color:white;font-size: x-large;">
                            Register
                            </h3>
                            <p class="subtitle-a" style="color:white;">
                            We are what we provide and we provide the best.
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-box">
                            <div>
                                <span><img src = "img/apartment.jpg" style="border-radius: 25px; position:absolute; height:133px;width:200px;margin-left: 50px;"></span>
                        </div>
                            <div class="service-content">
                                <h2 class="s-title">Apartments</h2>
                                <p class="s-description text-justify">
                                        An apartment, flat or unit is a self-contained housing unit that occupies only part of a 
                                        building, generally on a single storey. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box">
                            <div>
                                <span><img src = "img/gated.jpg" style="border-radius: 25px; position:absolute; height:133px;width:200px;margin-left: 50px;"></span>
                            </div>
                            <div class="service-content">
                                <!-- <img src = "img/independent1.jpg"> -->
                                <h2 class="s-title">Gated Communities</h2>
                                <p class="s-description text-justify">
                                        In its modern form, a gated community is a form of residential community or housing estate
                                        containing strictly controlled entrances for pedestrians. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box">
                            <div>
                                <span><img src = "img/independent1.jpg" style="border-radius: 25px; position:absolute; height:133px;width:200px;margin-left: 50px;"></span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title">Independent House</h2>
                                <p class="s-description text-justify">
                                        A home, or domicile, is a living space used as a permanent or semi-permanent residence for 
                                        an individual, family, household or several families. 
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <!-- End of Register -->

        <div class = "contact-bg">
            <div class = "block" id = "contact" style="color: white;">
                <div class = "container" style = "display: flex;">
                    <div class = "contact-container">
                            <div id = "title" >CONTACT US</div>
                            <div>&nbsp</div>
                            <form id = "contact-form">
                                <div id = "contact-fields">
                                    <div class = "fields">
                                        <div>NAME</div>
                                        <div>&nbsp</div>
                                        <div>EMAIL ID</div>
                                        <div>&nbsp</div>
                                        <div>SUBJECT</div>
                                        <div>&nbsp</div>
                                        <div>NEW COMMUNITY</div>
                                    </div>
                                    <div class = "inputs">
                                        <input class = "input-box" type="text" name="name">
                                        <div>&nbsp</div>
                                        <input class = "input-box" type="text" name="email">
                                        <div>&nbsp</div>
                                        <input class = "input-box" type="text" name="subject">
                                        <div>&nbsp</div>
                                        <div>
                                            YES <input class = "rad" type="radio" name = "new-community" value="yes" checked> 
                                            &nbsp &nbsp
                                            NO  <input class = "rad" type="radio" name = "new-community" value="no">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <textarea id = "message" placeholder="Enter Message Here..."></textarea>
                                <br><br>
                                <div align = "center">
                                    <input id = "message-submit" type="submit" value="Submit">
                                </div>
                            </form>
                    </div>
                    <div class = "space-contact">&nbsp</div>
                    <!-- GOOGLE MAP LOCTAION OF COLLEGE -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.5831053856305!2d77.53232771477025!3d12.934494790880208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3e468d8d36d3%3A0x694d74f6ac640acf!2sPES%20University!5e0!3m2!1sen!2sin!4v1571836525650!5m2!1sen!2sin"></iframe>
                </div>
            </div>
        </div>
    </body>
    
    <!-- SCRIPTS -->
    <script src="lib/jquery.slim.min.js"></script> 
    <script src="lib/bootstrap.bundle.min.js"></script>
    <script src="lib/active-block.js"></script>
    <script src="lib/navbar.js"></script>
    <script src="lib/type.js"></script>
</html>
