<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "head.html"; ?>
</head>

<body class="landing-page sidebar-collapse">
    <!-- Navbar -->
    <?php require "navbar.html"; ?>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header page-header-small">
            <div class="page-header-image" data-parallax="true" style="background-image: url('./assets/img/header.jpg');">
            </div>
            <div class="content-center">
                <div class="container">
                    <h3 style="font-family: 'Cabin Sketch', cursive;">PARADOX '19</h3>
                    <h1 id="heading" class="h1" style="font-family: 'Cabin Sketch', cursive;">INVOICE</h1>
                </div>
            </div>
        </div>
        <div class="section section-contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
                        <h4><strong>Invoice Number: </strong><br></h4>
                        <center>
                            <div align="left">
                                USN: <br>
                                Customer ID: <br>
                                Email: <br>
                                Phone: <br>
                                Payment status: <br>
                                Transaction ID: <br>
                                Bank Transaction ID: <br>
                                Amount: <br>
                            </div>
                        </center>
                        <h5>Thank you for registering!</h5>
                        <h6>Please save a screenshot of the above for further reference.</h6>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer footer-default">
            <div class="container">
                <div class="copyright" id="copyright">
                    &copy;
                    <script>
                    document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                    </script>, 
                    <span class="h4">👑</span>
                    <span class="h5"> H@ckers Inc.</span> apoorva mohite, komal chitragar, mrunal ambekar
                </div>
            </div>
        </footer>
    </div>
    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="./assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/now-ui-kit.js?v=1.2.0" type="text/javascript"></script>
</body>

</html>