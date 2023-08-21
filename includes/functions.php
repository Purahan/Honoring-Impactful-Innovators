<?php
//error_reporting(E_ALL);

function page_header() {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aryabhatta</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
<?php
}

function page_footer($showTagCloud=false) {
?>
    <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Purahan Gupta</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        CSS from <a href="https://getbootstrap.com/">Bootstrap</a><br />
        Photos from <a href="https://www.google.com/">Google</a><br />
        Information from <a href="https://en.wikipedia.com">Wikipedia</a><br />
        WordCloud with the help of <a href="https://github.com/mcc108/TagCloud">TagCloud</a>
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
  <?php if($showTagCloud) { ?>
    <script src="assets/js/TagCloud.min.js"></script>
    <script>
        var texts = [
            'Motions of the Solar System', 'Explained Eclipses', 'Area of a Triangle',
            'Approximation of π', 'Zero', 'Place Value System',
            'Trigonometry', 'Sidereal periods', 'Heliocentrism',
            'Astronomy', 'Mathematics',
        ];
        var tc = TagCloud('.tagContent', texts, {radius: 150});
        console.log(tc);
    </script>
  <?php } ?>
</body>

</html>
<?php
}

function nav_bar() {
    $headerClass = "active";
    $homeFile = "";
    if(strpos($_SERVER["SCRIPT_FILENAME"], 'index.php') === false) {
        $headerClass='';
        $homeFile = "index.php";
    }
?>
    <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Aryabhatta</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto <?=$headerClass?>" href="<?=$homeFile?>#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="<?=$homeFile?>#about">About</a></li>
          <li><a class="nav-link scrollto" href="<?=$homeFile?>#workarea">Areas of Work</a></li>
          <li><a class="nav-link scrollto" href="<?=$homeFile?>#significance">Significance of Work</a></li>
          <li><a class="nav-link scrollto" href="<?=$homeFile?>#discoveries">Discoveries</a></li>
          <li><a class="nav-link scrollto" href="<?=$homeFile?>#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

<?php
}

?>