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
                    <li><a href="#newSP">Create SP</a></li>
                    <li><a href="#editSP">Edit SP</a></li>
                    <li><a href="#editcustomer">Edit Customer</a></li>
                    <li><a href="#inquireies">View Inquiries</a></li>
                    <li><a href="#">Ongoing Events</a></li>
                    <!-- <li><a href="#">Edit Events</a></li> -->
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
                <h2 class="wow fadeInDown animated">Welcome back Admin</h2>
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

    <!-- addSP section -->
    <section id="newSP" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="wow fadeInDown animated">Create New Service Provider</h2>
                <p class="wow fadeInDown animated">Fill the required field to add new Service Provider</p>
                <br>
            </div>
            <div class="row">
                <div class=" conForm">
                    <form method="post" action="adminPanel.php" name="addSPform" id="addSPform" onsubmit="return addAlert()">
                        <input name="name" id="name" type="text" placeholder="Full Name">
                        <br>
                        <input name="address" id="address" type="text" placeholder="Address">
                        <br>
                        <input name="mnumber" id="mnumber" type="text" placeholder="Mobile Number">
                        <br>
                        <input name="spRegNum" id="spRegNum" type="text" placeholder="Service Provider Register Number">
                        <br>
                        <input name="spType" id="spType" type="text" placeholder="Service Provider Type">
                        <br>
                        <input name="email" id="email" type="email" placeholder="Email Address">
                        <br>
                        <input name="password" id="password" type="password" placeholder="Password">
                        <br>
                        <input type="submit" id="addSP" name="addSP" class="submitBnt" value="Add SP">
                    </form>
                    <script>
                        function addAlert() {
                            alert("Service Provider added successfully")
                            return true
                        }
                    </script>
                </div>
            </div>
        </div>
    </section>
    <!-- addSP section -->

    <!-- editSP section -->
    <section id="editSP" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="wow fadeInDown animated">Edit Service Provider</h2>
                <p class="wow fadeInDown animated">Enter register number to update Service Provider</p>
                <br>
                <div class=" conForm" id="editSPForm">
                    <!-- <form method="post" name="regNumForm" id="regNumform"> -->
                    <input name="regNum" id="regNum" type="Text" required placeholder="Enter Service Privider Register Number"><br>
                    <input type="submit" style="width: 220px;" id="getSP" name="getSP" class="submitBnt" value="Check Answer" onclick="getSPDetails()">
                    <!-- </form> -->
                    <script>
                        function getSPDetails() {
                            var x = document.getElementById("spDetails");
                            if (window.getComputedStyle(x).display === "none") {
                                x.style.display = "block";
                            }
                        }
                    </script>
                </div>
            </div>

            <div class=" conForm" id="spDetails" style="display: none;">
                <form method="post" name="spDetailsform" id="spDetailsform" action="adminPanel.php" onsubmit="return updateAlert()">
                    <input name="name" id="name" type="text" placeholder="Full Name">
                    <br>
                    <input name="address" id="address" type="text" placeholder="Address">
                    <br>
                    <input name="mnumber" id="mnumber" type="text" placeholder="Mobile Number">
                    <br>
                    <input name="spRegNum" id="spRegNum" type="text" placeholder="Service Provider Register Number">
                    <br>
                    <input name="spType" id="spType" type="text" placeholder="Service Provider Type">
                    <br>
                    <input name="email" id="email" type="email" placeholder="Email Address">
                    <br>
                    <input type="submit" id="updateSP" name="updateSP" class="submitBnt" value="Update SP">
                </form>
                <script>
                    function updateAlert() {
                        alert("Service Provider Updated Successfully")
                        return true
                    }
                </script>
            </div>

        </div>
    </section>
    <!-- editSP section -->

    <!-- edit customer section -->
    <section id="editcustomer" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="wow fadeInDown animated">Edit Customer</h2>
                <p class="wow fadeInDown animated">Enter NIC number to update Customer</p>
                <br>
                <div class=" conForm" id="editCusForm">
                    <!-- <form method="post" name="regNumForm" id="regNumform"> -->
                    <input name="nicnum" id="nicnum" type="Text" required placeholder="Enter NIC Number"><br>
                    <input type="submit" style="width: 220px;" id="getcustomer" name="getcustomer" class="submitBnt" value="Get Customer" onclick="getCustomerDetails()">
                    <!-- </form> -->
                    <script>
                        function getCustomerDetails() {
                            var x = document.getElementById("customerDetails");
                            if (window.getComputedStyle(x).display === "none") {
                                x.style.display = "block";
                            }
                        }
                    </script>
                </div>
            </div>

            <div class=" conForm" id="customerDetails" style="display: none;">
                <form method="post" name="customerDetailsform" id="customerDetailsform" action="adminPanel.php" onsubmit="return updateAlert()">
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
                    <input type="submit" style="width: 250px;" id="updateSP" name="updateSP" class="submitBnt" value="Update Customer">
                </form>
                <script>
                    function updateAlert() {
                        alert("Customer Updated Successfully")
                        return true
                    }
                </script>
            </div>

        </div>
    </section>
    <!-- edit customer section -->

    <!-- inquiries section -->
    <section id="inquireies" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="wow fadeInDown animated">All Inquiries</h2>
            </div>
            <!-- <div class="row"> -->
            <!-- <div class=" conForm"> -->
            <!-- <form method="post" action="https://Templates Hub.net/php/contact.php" name="addSPform"
                        id="addSPform">
                        <input name="name" id="name" type="text" placeholder="Full Name">
                        <br>
                        <input name="address" id="address" type="text" placeholder="Address">
                        <br>
                        <input name="mnumber" id="mnumber" type="text" placeholder="Mobile Number">
                        <br>
                        <input name="spRegNum" id="spRegNum" type="text" placeholder="Service Provider Register Number">
                        <br>
                        <input name="spType" id="spType" type="text" placeholder="Service Provider Type">
                        <br>
                        <input name="email" id="email" type="email" placeholder="Email Address">
                        <br>
                        <input name="password" id="password" type="password" placeholder="Password">
                        <br>
                        <input type="submit" id="addSP" name="addSP" class="submitBnt" value="Add SP">
                    </form> -->
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
    <!-- inquiries section -->

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