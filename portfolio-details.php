<?php include 'include/config.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ану-Үжин</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


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

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql = "SELECT * FROM `portfolio` WHERE `portfolio`.`id` = $id";
  $result = mysqli_query($con, $sql);
  $data = mysqli_fetch_assoc($result);

  $category = $data['category'];
  $category_sql = "SELECT * FROM `category` WHERE `category`.`id`='$category'";
  $category_result = mysqli_query($con, $category_sql);
  $category_data = mysqli_fetch_assoc($category_result);
}

?>
  <main id="main">

   
    <div id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div>
                  <img src="<?=$data['image']?>" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>

          <div class="col-lg-4 portfolio-info">
            <h3><?=$data['title']?></h3>
            <ul>
              <li><strong>Ангилал</strong>: <?=$category_data['name']?></li>
              <li><strong>Захиалагч</strong>: <?=$data['client']?></li>
              <li><strong>Төслийн огноо</strong>: <?php echo date('D M Y', strtotime($data['project_date']))?></li>
              <li><strong>Төслийн URL</strong>: <a href="#"><?=$data['url']?></a></li>
            </ul>

            <p>
              <?=$data['text']?>
            </p>
          </div>

        </div>

      </div>
    </div>

  </main>


  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>