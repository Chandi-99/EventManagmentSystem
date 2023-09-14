<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="webthemez.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Event Managment System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/font-icon.css">
    <link rel="stylesheet" href="css/animate.min.css">
</head>

<body>
    <!-- header section -->
    <!-- <section class="banner" role="banner" id="banner"> -->
    <header id="header">
        <div class="header-content clearfix"> <span class="logo"><a href="index.php">BEST<b>Events</b></a></span>
            <nav class="navigation" role="navigation">
                <ul class="primary-nav">
                    <li><a href="index.php">Home</a></li>
                </ul>
            </nav>
            <a href="#" class="nav-toggle">Menu<span></span></a>
        </div>
    </header>

    <!-- </section> -->
    <!-- header section -->

    <!-- login section -->
    <section id="contact" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="wow fadeInDown animated">Login</h2>
                <p class="wow fadeInDown animated">Please login to proceed further</p>
            </div>
            <div class="row">
                <div class=" conForm">
                    <form method="post" action="javascript:loginFunction();" name="lform" id="lform" onsubmit="return loginFunction()">
                        <input name="username" id="username" type="text"  placeholder="User name">
                        <br>
                        <input name="password" id="password" type="password"  placeholder="Password">
                        <br>
                        <p class="wow fadeInDown animated"> <b><a href="forgotPass.php">Forgot Password</a></b> ?</p>

                        <input type="submit" id="login" name="login" class="submitBnt" value="Login">
                    </form>
                    <script>
                        function loginFunction() {
                            var formAction = document.getElementById("lform");
                            formAction.setAttribute('method', "post");
                            var userName = document.getElementById("username").value;
                            var password = document.getElementById("password").value;
                            submitOK = "true";

                            if (userName == -1 || password.length == 0) {
                                alert("Please enter the request field");
                                submitOK = "false";
                            }
                            else {
                                if (userName == "a") {
                                    // alert("Logged in as Admin");
                                    submitOK = "true";
                                    formAction.setAttribute('action', "adminPanel.php");
                                }
                                else if (userName == "sp") {
                                    // alert("Logged in as Service Provider");
                                    submitOK = "true";
                                    formAction.setAttribute('action', "serviceProviderPanel.php");
                                }
                                else {
                                    // alert("User not found");
                                    submitOK = "true";
                                    formAction.setAttribute('action', "customerPanel.php");
                                }
                            }
                            if (submitOK == "false") {
                                return false;
                            }
                        }
                    </script>
                </div>
            </div>
            <div class="section-header">
                <p class="wow fadeInDown animated">New to <b><a href="signup.php">Best Events</a></b> ?</p>
            </div>
        </div>
    </section>
    <!-- login section -->

    <!-- JS FILES -->
    <script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.js"></script>
    <script type="text/javascript" src="js/global.js"></script>
    <script type="text/javascript" src="js/jquery.contact.js"></script>
    <script type="text/javascript">
    </script>
    <?php

    // if (isset($_POST['submit'])) {
    //     require_once "connection.php";
    //     $username = $_POST["username"];
    //     $password = $_POST["password"];

    //     $sql = "SELECT * FROM user WHERE user_name = "+$username+" AND password = "+$password;
    //     $result = $conn-> query($sql);
    //     if($result->num_rows > 0){

    //     }
    //     else{
    //         echo "Test 1";
    //     }
    //     if ($name == "" || $password == "" ) {
    //         echo '<script>alert("Please fill all the required inputs")</script>';
    //     } 
    // }
    ?>

</body>

</html>