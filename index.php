<!DOCTYPE html>
<html lang="en">

<head>
  <?php require "head.html"; ?>
</head>

<body class="index-page sidebar-collapse">
  <!-- Navbar -->
  <?php require "navbar.html"; ?>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header clear-filter" filter-color="">
      <div class="page-header-image" data-parallax="false" style="background-image:url('./assets/img/header.jpg');">
      </div>
      <div class="container">
        <div class="content-center brand">
          <h1><br><br></h1>
          <h1 id="heading" class="h1" style="font-family: 'Cabin Sketch', cursive;">PARADOX 19'</h1>
          <h3 style="font-family: 'Cabin Sketch', cursive;">THE CHALLENGE FOR INNOVATIVE MINDS</h3>
          <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#myModal" id="mybutt">
            <i class="now-ui-icons travel_info"></i> &nbsp; Help &nbsp;
          </button>
          <button class="btn btn-primary btn-lg btn-neutral btn-round" type="button">
            <i class="now-ui-icons ui-1_send"></i> &nbsp; Register &nbsp;
          </button>
          <button class="btn btn-primary btn-round" type="button">
            <i class="now-ui-icons sport_trophy"></i> Participate
          </button>
        </div>
        <div style="position: absolute; bottom: 0; right: 0; float: right;">
          <span class="h4">👑</span>
          <span class="h5"> H@ckers Inc.</span> apoorva mohite, komal chitragar, mrunal ambekar
        </div>
      </div>
    </div>
    <div class="wrapper">
    <div class="section section-basic" id="basic-elements">
      <div class="container">
        <br><br>
        <p>PARADOX’19 is a National Level Technical Fest organized by KLS Gogte Institute of Technology, Department of Civil Engineering. It is a two days technical fest for civil engineering students, where the student’s will showcase their talents and skills.</p>
        <br><br>
        <ul>
          <h5>GENERAL RULES</h5><br>
          1. All events are open to students of Civil Engineering department.<br>
          2. Only Rotolare and Ignite Events are open to students of all branches of engineering.<br>
          3. Travel allowance will not be given.<br>
          4. Possession of college ID on the day of event is mandatory.<br>
          5. In case of misconduct the team will be disqualified.<br>
          6. The decision of judges will be final.<br>
          7. Each student can participate maximum of 3 events (one from each group).<br>
          8. Registration can be done online at www.paradox19.git.edu<br>
          9. Registration fees Rs. 250 per person.<br>
        </ul>
        <br>
        <ul>
          <h5>STAFF COORDINATORS</h5>
          Supriya Kulkarni - 9902383565<br>
          Anagha Garagatti - 9986697291<br>
          Vikhyat Katti - 8088007011<br>
          M. M. Patil - 8147899079<br>
        </ul>
      </div>
    </div>
  </div>
    <!-- Sart Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header justify-content-center">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="now-ui-icons ui-1_simple-remove"></i>
            </button>
            <h4 class="title title-up">HELP</h4>
          </div>
          <div class="modal-body">
            <p>For any help or queries, contact<br>
              <h6>Student Coordinators:</h6>
              TANVEER SHAIKH - 9696126767<br>
              GAUTAMI GHODEKAR - 7406210076<br>
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--  End Modal -->
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
  <script>
    $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

</html>