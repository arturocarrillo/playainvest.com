<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('./views/partials/head.php');?>
  <title>Playainvest</title>
</head>
<body>
  <header>
    <?php include('./views/partials/header.php');?>
  </header>
  <main>
    <?php include('./views/pages/main-slider.php');?>
    <?php include('./views/pages/main-about.php'); ?>
    <?php include('./views/pages/main-about-2.php'); ?>
    <?php include('./views/pages/main-riviera.php'); ?>
    <?php include('./views/pages/main-services.php'); ?>
    <?php include('./views/pages/main-faqs.php'); ?>
  </main>
  <footer>
    <?php include('./views/partials/footer.php');?>
  </footer>
</body>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="./public/icon/js/all.js" type="text/javascript" charset="utf-8"></script>
<script>
  var myCarousel = document.querySelector('#myCarousel')
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 2000,
  wrap: false
})
</script>
</html>