<?php
$min[0]=1;
$max[0]=4;
$title[0]="Ignite";

$min[1]=2;
$max[1]=2;
$title[1]="Terra Mind";

$min[2]=1;
$max[2]=1;
$title[2]="Utopian";

$min[3]=1;
$max[3]=3;
$title[3]="Rotolare";

$min[4]=2;
$max[4]=2;
$title[4]="Minute to win it";

$min[5]=1;
$max[5]=1;
$title[5]="Draft your craft";

$event = $_GET['id'];

?>
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
                    <h1 id="heading" class="h1" style="font-family: 'Cabin Sketch', cursive;">PARTICIPATE</h1>
                </div>
            </div>
        </div>
        <div class="text-center">
            <div class="title h2"><?php echo $title[$event]; ?></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
                        <form method="POST" action="event<?php echo $event+1; ?>.php" id="formfield">
                            <?php
                            for ($i=0; $i <$max[$event] ; $i++) {
                            ?>
                            <div class="input-group input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="now-ui-icons users_circle-08"></i>
                                    </span>
                                </div>
                                <input name="member<?php echo $i+1; ?>" id="m<?php echo $i; ?>" type="text" class="form-control" placeholder="Member <?php echo $i+1; ?> Invoice number..." <?php if($i<$min[$event]){ echo "required"; } ?>>
                            </div>
                            <?php
                            }
                            ?>
                            <div class="send-button">
                                <input class="btn btn-primary btn-round btn-block btn-lg" value="Participate" type="submit" />
                            </div>
                        </form>
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
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/now-ui-kit.js?v=1.2.0" type="text/javascript"></script>
</body>

</html>