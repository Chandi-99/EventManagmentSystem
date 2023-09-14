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
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #ff5518;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }

        th {
            background-color: #ff5518;
            color: #1e1e1e;
        }

        tr:nth-child(even) {
            background-color: #bcbcbc;
        }
    </style>
</head>

<body>
    <!-- header section -->
    <!-- <section class="banner" role="banner" id="banner"> -->
    <header id="header">
        <div class="header-content clearfix"> <span class="logo"><a href="#">BEST<b>Events</b></a></span>
            <nav class="navigation" role="navigation">
                <ul class="primary-nav">
                    <li><a href="#newpackage">Create New Package</a></li>
                    <li><a href="#editpackage">Edit Package</a></li>
                    <li><a href="#vieworder">View Orders</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </nav>
            <a href="#" class="nav-toggle">Menu<span></span></a>
        </div>
    </header>

    <!-- </section> -->
    <!-- header section -->

    <!-- services section -->
    <section id="services" class="services service-section">
        <div class="container">
            <div class="section-header">
                <h2 class="wow fadeInDown animated">Welcome back Service Provider</h2>
                <!-- <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p> -->
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-recycle"></span>
                    <div class="services-content">
                        <!-- <h5>Musical Night</h5>
            <b>Day 1</b> -->
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p> -->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-heart"></span>
                    <div class="services-content">
                        <!-- <h5>Dancing Night</h5>
            <b>Day 2</b>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p> -->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-megaphone"></span>
                    <div class="services-content">
                        <!-- <h5>Food Night</h5>
            <b>Day 3</b>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services section -->

    <!-- new package section -->
    <section id="newpackage" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="wow fadeInDown animated">Add New Package</h2>
                <!-- <p class="wow fadeInDown animated">Please signup to proceed further</p> -->
            </div>
            <div class="row">
                <div class=" conForm">
                    <form method="post" action="serviceProviderPanel.php" name="lform" id="lform" onsubmit="return addAlert()">

                        <input name="packname" id="packname" type="text" placeholder="Package Name">
                        <br>
                        <input name="value" id="value" type="text" placeholder="Value">
                        <br>
                        <textarea style="width:500px;" name="comments" id="comments" cols="" rows="" placeholder="Package Discription..."></textarea>
                        <br>
                        <input type="submit" id="signup" name="signup" class="submitBnt" value="Add Package">
                    </form>
                    <script>
                        function addAlert() {
                            alert("Package added successfully")
                            return true
                        }
                    </script>
                </div>
            </div>
        </div>
    </section>
    <!-- new package section -->

    <!-- edit package section -->
    <section id="editpackage" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="wow fadeInDown animated">Edit Package</h2>
                <p class="wow fadeInDown animated">Enter Package Name to update</p>
                <br>
                <div class=" conForm" id="editSPForm">
                    <!-- <form method="post" name="regNumForm" id="regNumform"> -->
                    <input name="regNum" id="regNum" type="Text" required placeholder="Enter Package Name"><br>
                    <input type="submit" style="width: 220px;" id="getSP" name="getSP" class="submitBnt" value="Get Details" onclick="getPackageDetails()">
                    <!-- </form> -->
                    <script>
                        function getPackageDetails() {
                            var x = document.getElementById("packageDetails");
                            if (window.getComputedStyle(x).display === "none") {
                                x.style.display = "block";
                            }
                        }
                    </script>
                </div>
            </div>

            <div class=" conForm" id="packageDetails" style="display: none;">
                <form method="post" name="packageDetailsform" id="packageDetailsform" action="serviceProviderPanel.php" onsubmit="return updateAlert()">
                    <input name="packname" id="packname" type="text" placeholder="Package Name">
                    <br>
                    <input name="value" id="value" type="text" placeholder="Value">
                    <br>
                    <textarea style="width:500px;" name="comments" id="comments" cols="" rows="" placeholder="Package Discription..."></textarea>
                    <br>
                    <input type="submit" id="signup" name="signup" class="submitBnt" value="Add Package">
                </form>
                <script>
                    function updateAlert() {
                        alert("Package Updated Successfully")
                        return true
                    }
                </script>
            </div>

        </div>
    </section>
    <!-- edit package section -->

    <!-- view orders section -->
    <section id="vieworder" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="wow fadeInDown animated">All Orders</h2>
            </div>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>
                <tr>
                    <td>1999V</td>
                    <td>Thivsaln Roxz</td>
                    <td>sala123</td>
                </tr>
                <tr>
                    <td>1999V</td>
                    <td>Thivsaln Roxz</td>
                    <td>sala123</td>
                </tr>

                <?php

                // $conn = mysqli_connect("localhost", "root", "", "company");
                // if ($conn->connect_error) {
                //     die("Connection failed: " . $conn->connect_error);
                // }

                // $sql = "SELECT id, username, password FROM login";
                // $result = $conn->query($sql);

                // if ($result->num_rows > 0) {

                //     while ($row = $result->fetch_assoc()) {
                //         echo "<tr><td>" . $row["id"] . "</td><td>" . $row["username"] . "</td><td>"
                //             . $row["password"] . "</td></tr>";
                //     }
                //     echo "</table>";
                // } else {
                //     echo "0 results";
                // }
                // $conn->close();
                ?>

            </table>
            <!-- </div> -->
            <!-- </div> -->
        </div>
    </section>
    <!-- view orders section -->

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