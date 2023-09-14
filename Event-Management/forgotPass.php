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

    <!-- forgot password section -->
    <section id="contact" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="wow fadeInDown animated">Forgot Password</h2>
                <p class="wow fadeInDown animated">Please enter your email</p>
            </div>
            <div class="row">
                <div class=" conForm">
                    <!-- <form method="post" name="lform" id="lform"> -->
                        <input name="email" id="email" type="email" required placeholder="Email Address">
                        <br>
                        <input type="submit" style="width: 325px;" id="login" name="login" class="submitBnt"
                            value="Get Security Question" onclick="getQuestion()">
                    <!-- </form> -->
                    <script>
                        function getQuestion() {
                            var x = document.getElementById("securitryQuestion");
                            if (window.getComputedStyle(x).display === "none") {
                                x.style.display = "block";
                            }
                        }
                    </script>
                </div>
            </div>
            <!-- get question section -->
            <div class=" conForm" id="securitryQuestion" style="display: none;">
                <p class="wow fadeInDown animated" id="securitryQuestionText"> Question will appear here</p><br>
                <!-- <form method="post" name="pform" id="pform"> -->
                    <input name="answer" id="answer" type="Text" required placeholder="Enter Answer"><br>
                    <input type="submit" style="width: 220px;" id="login" name="login" class="submitBnt"
                        value="Check Answer" onclick="newPassword()">
                <!-- </form> -->
                <script>
                    function newPassword() {
                        var x = document.getElementById("newPassword");
                        if (window.getComputedStyle(x).display === "none") {
                            x.style.display = "block";
                        }
                    }
                </script>
            </div>
            <!-- get question section -->
            <!-- new password section -->
            <div class=" conForm" id="newPassword" style="display: none;">
                <form method="post" name="pform" id="pform" action="login.php" onsubmit="return resetAlert()">
                    <input name="pass1" id="pass1" type="password" required placeholder="Password"><br>
                    <input name="pass2" id="pass2" type="password" required placeholder="Re Enter Password"><br>
                    <input type="submit" style="width: 250px;" id="login" name="login" class="submitBnt"
                        value="Reset Password">
                </form>
                <script>
                    function resetAlert() {
                        alert("Your Password reset successfully")
                        return true
                    }
                </script>

            </div>
            <!-- new password section -->
        </div>
    </section>
    <!-- forgot password section -->

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
</body>

</html>