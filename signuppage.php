<?php
    session_start();
?>
<html>
    <head>
        <title>Register</title>
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
    </head>
    <body>
        <div>
            <nav id = "navbar" class="navbar navbar-expand-lg navbar-light shadow fixed-top" style = "background-color:transparent">
                <div class="container" >
                    <a class="navbar-brand" href="maideasy.php#home">Maid Easy</a>
                        <button id = "navbar-ham" class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto">
                            <li class="nav-element current">
                                <a class="nav-link" href="maideasy.php#home">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <div class = "space" style = "color:transparent;">&nbsp</div>
                            <li class="nav-element">
                                <a class="nav-link" href="maideasy.php#about">About</a>
                            </li>
                            <div class = "space" style = "color:transparent;">&nbsp</div>
                            <li class="nav-element">
                                <a class="nav-link" href="maideasy.php#services">Services</a>
                            </li>
                            <div class = "space" style = "color:transparent;">&nbsp</div>
                            <li class="nav-element">
                                <a class="nav-link" href="maideasy.php#register">Register</a>
                            </li>
                            <div class = "space" style = "color:transparent;">&nbsp</div>
                            <li class="nav-element">
                                <a class="nav-link" href="maideasy.php#contact">Contact</a>
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
        <div class="input-img">
            <!--<img src="./test.jpg" alt="Add image here">  -->
            <h2 class="heading">SIGN UP</h2>
            <br><br>
            <form action="signup.php" method="POST">
                <div class="input-fields">
                    <label for ="name" class="labels">USERNAME<span style="color: transparent;">007Space</span></label><input type="text" id="name" name="Name"><br><br>
                    <label for ="password" class="labels">PASSWORD<span style="color: transparent;">007Space</span></label><input type="text" id="password" name="Password"><br><br>
                    <label for ="email" class="labels">HOUSE NO.<span style="color: transparent;">007Space</span> </label><input type="number" id="houseno" name="Houseno"><br><br>
                    <label for ="type" class="labels"> HELPER NAME <span style="color: transparent;">007Space</span></label><input type="text" id="helper-name" name="HelperName"><br><br>
                    <label for ="name" class="labels">WORK TYPE  <span style="color: transparent;">007Space</span></label>    
                        <select id="worktype-dropdown" name="WorkType">
                            <option>ffbdfv</option>
                            <option>ffbddbffv</option>
                            <option>fdfbfbddfv</option>
                            <option>ffdbfbdfv</option>
                        </select><br><br>
                    <label for ="name" class="labels">TIME SLOT <span style="color: transparent;">007Space</span></label><input type="text" id="name" name="TimeSlot"><br><br>  <!-- Fill this -->
                    <label for ="name" class="labels">COMMUNITY NAME <span style="color: transparent;">007Space</span></label><input type="text" id="community-name" name="CommunityName">
                </div>  
                <br>
                <div >
                    <button type="submit" id="register-button" style="float:left; ">
                        Submit
                    </button>
                </div>
            </form>
        </div>  
    </body>
    <!-- SCRIPTS -->
    <script src="lib/jquery.slim.min.js"></script> 
    <script src="lib/bootstrap.bundle.min.js"></script>
    <script src="lib/active-block.js"></script>
    <script src="lib/navbar.js"></script>
    <script src="lib/type.js"></script>
</html>