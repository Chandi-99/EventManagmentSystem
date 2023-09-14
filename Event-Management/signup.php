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

    <!-- signup section -->
    <section id="contact" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="wow fadeInDown animated">Signup</h2>
                <p class="wow fadeInDown animated">Please signup to proceed further</p>
            </div>
            <div class="row">
                <div class=" conForm">
                    <form method="post" action="" name="lform" id="lform">

                        <input name="name" id="name" type="text" placeholder="Full Name">
                        <br>
                        <input name="address" id="address" type="text" placeholder="Address">
                        <br>
                        <input name="nic" id="nic" type="text" placeholder="NIC Number">
                        <br>
                        <input name="mnumber" id="mnumber" type="number" placeholder="Mobile Number">
                        <br>
                        <input name="email" id="email" type="email" placeholder="Email Address">
                        <br>
                        <input name="sec_q" id="sec_q" type="text" placeholder="Enter Security Question">
                        <br>
                        <input name="sec_a" id="sec_a" type="text" placeholder="Enter Answer">
                        <br>
                        <input name="password" id="password" type="password" placeholder="Password">
                        <br>
                        <input name="cpassword" id="cpassword" type="password" placeholder="Confirm Password">
                        <br>
                        <input type="submit" id="signup" name="signup" class="submitBnt" value="Signup">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- signup section -->

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
    // require_once "connection.php";
    // $name = $_POST["name"];
    // $address = $_POST["address"];
    // $nic = $_POST["nic"];
    // $mnumber = $_POST["mnumber"];
    // $email = $_POST["email"];
    // $password = $_POST["password"];
    // $cPassword = $_POST["cpassword"];

    // // $sql = "INSERT INTO customer"
    // if($name == "" || $address == "" || $nic == "" || $mnumbre == "" || $email == "" || $password == "" || $cPassword == ""){
    //     echo '<script>alert("Please fill all the required inputs")</script>';
    // }else if($password != $cPassword){
    //     echo '<script>alert("Please check your password")</script>';
    // }else if ($mnumber < 9 ){
    //     echo '<script>alert("Please check your password")</script>';
    // }
    ?>
</body>

</html>