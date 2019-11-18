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
        <link href="./css/request.css" rel="stylesheet"/>

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
        <div class="existing-requests">
            <!--TO BE DONE-->
            <h4 style="text-align: center; margin-top:15px; font-family:montserrat;">All Requests</h4>
            <div id="add-requests"></div>
        </div>
        <div class="request-fields">
            <form method="POST">
                <input type="text" id="name" placeholder="Your Name" name="Name" required><br>
                <input type="text" id="houseno" placeholder="Your House No." name="HouseNo" required><br>
                <select id="work-tbd" name="WorkType" required>
                    <option>Cooking</option>
                    <option>Washing</option>
                    <option>Cleaning</option>
                </select><br>
                <select id="time" name="Time">
                    <option>8.00 - 9.00am</option>
                    <option>9.00 - 10.00am</option>
                    <option>10.00 - 11.00am</option>
                </select><br>
                <input type="number" id="payment" placeholder="You want to pay" name="Pay" required/><br>
                <input type="submit" class="sub" value="REQUEST" /> <br>
            </form>
        </div>
    </body>
    <!-- SCRIPTS -->
    <script src="lib/jquery.min.js"></script> 
    <script src="lib/bootstrap.bundle.min.js"></script>
    <script src="lib/active-block.js"></script>
    <script src="lib/navbar.js"></script>
    <script>
        $(document).ready(function(){
            //alert("Jquery is working");
            displayFromDatabase();
            $(".sub").click(function(){
                var name=$("#name").val();
                var houseno=$("#houseno").val();
                var worktype=$("#work-tbd").val();
                var time=$("#time").val();
                var pay=$("#payment").val();

                $.ajax({
                    url:"ajax.php",
                    type:"POST",
                    async:false,
                    data:{
                        "clicked-submit":1,
                        "Name":name,
                        "House":houseno,
                        "WorkType":worktype,
                        "Time":time,
                        "Pay":pay
                    },
                    success: function(data){
                        displayFromDatabase();
                        $("#name").val('');
                        $("#houseno").val('');
                        $("#work-tbd").val('');
                        $("#time").val('');
                        $("#payment").val('');

                    }
                });
            });
        });

        function displayFromDatabase(){
            $.ajax({
                url:"ajax.php",
                type:"POST",
                async:false,
                data:{
                    "display":1
                },
                success:function(d){
                    $("#add-requests").html(d);
                }
            })
        }

    </script>
</html>