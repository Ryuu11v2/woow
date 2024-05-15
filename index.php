<?php include 'include/config.php';

$sql = "SELECT * FROM `users` WHERE `users`.`id` = 1";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=$data['name']?> - <?=$data['title']?></title>
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


  <header id="header">
    <div class="container">

      <h1><a href="index.php"><?=$data['name']?></a></h1>

      <h2><span><?=$data['title']?></span> мэргэжлээр Их засаг олон улсын их сургуулийн <?=$data['place']?></h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Нүүр</a></li>
          <li><a class="nav-link" href="#about">Миний тухай</a></li>
          <li><a class="nav-link" href="#resume">CV</a></li>
          <li><a class="nav-link" href="#portfolio">Хийсэн төсөл</a></li>
          <li><a class="nav-link" href="#contact">Холбоо барих</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <div class="social-links">
        <?php   
          if($data['twitter']){
        ?>
            <a href="<?=$data["twitter"]?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
        <?php
          }
        ?>

        <?php   
          if($data['facebook']){
        ?>
            <a href="<?=$data["facebook"]?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <?php
          }
        ?>

        <?php   
          if($data['instagram']){
        ?>
            <a href="<?=$data["instagram"]?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
        <?php
          }
        ?>

        <?php   
          if($data['youtube']){
        ?>
            <a href="<?=$data["youtube"]?>" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
        <?php
          }
        ?>

        <?php   
          if($data['github']){
        ?>
            <a href="<?=$data["github"]?>" target="_blank" class="github"><i class="bi bi-github"></i></a>
        <?php
          }
        ?>

        <?php   
          if($data['linkedin']){
        ?>
            <a href="<?=$data["linkedin"]?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <?php
          }
        ?>

      </div>

    </div>
  </header>


  <section id="about" class="about">

 
    <div class="about-me container">

      <div class="section-title">
        <h2>Миний тухай</h2>
        <p>Ганзоригийн Ану-Үжин</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/gg.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?php echo $data['title']?></h3>
          <p class="fst-italic">
            <?=$data['slogan']?>
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Төрсөн өдөр:</strong> <span><?php echo date('d M Y', strtotime($data['birthday']))?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Сургууль:</strong> <span><a style="color: white;" href="<?=$data['website']?>" target="_blank"><?=$data['website']?></a></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Холбогдох утас:</strong> <span><a style="color: white;" href="tel:<?=$data['phone']?>"><?=$data['phone']?></a></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Байршил:</strong> <span><?=$data['city']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Нас:</strong> <span><?=$data['age']?></span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Програмчлалын хэл:</strong> <span><?=$data['degree']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Хэлний түвшин:</strong> <span><?=$data['certification']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Емайл:</strong> <span><a style="color: white;" href="mailto:<?=$data['email']?>"><?=$data['email']?></a></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Ажил хийх:</strong> <span>
                  <?php 
                  if($data['freelance'] == 1){
                    echo "Боломжтой";
                  }
                  else{
                    echo "Боломжгүй";
                  }
                  ?>

                </span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>

    <?php
    
    $counter = "SELECT * FROM `counter`";
    $counter_result = mysqli_query($con, $counter);

    ?>
 
    <div class="counts container">

      <div class="row">
    <?php
    if($counter_result -> num_rows > 0){
      while($row = $counter_result -> fetch_assoc()){
      ?>
        <div class="col-lg-3 col-md-6 mt-5">
          <div class="count-box">
            <i class="<?=$row['icon']?>"></i>
            <span data-purecounter-start="<?=$row['pre']?>" data-purecounter-end="<?=$row['post']?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><?=$row['title']?></p>
          </div>
        </div>
        <?php
      }
    }

    ?>

      </div>

    </div>


    <div class="interests container">

      <div class="section-title">
        <h2>Ур чадвар</h2>
      </div>

      <div class="row">

      <?php
      
      $skills = "SELECT * FROM `skills`";
      $skills_result = mysqli_query($con, $skills);

      if($skills_result -> num_rows > 0){
        while($skills_row = $skills_result -> fetch_assoc()){
          ?>
            <div class="col-lg-3 col-md-4">
              <div class="icon-box">
                <i class="<?=$skills_row['icon']?>" style="color: #<?=$skills_row['color']?>;"></i>
                <h3><?=$skills_row['title']?></h3>
              </div>
            </div>
          <?php
        }
      }

      ?>
      </div>

    </div>

    <div class="testimonials container">

      <div class="section-title">
        <h2>Сэтгэл ханамж</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

        <?php 
        
        $quets = "SELECT * FROM `quets`";
        $quets_result = mysqli_query($con, $quets);

        if($quets_result -> num_rows > 0){
          while($quets_row = $quets_result -> fetch_assoc()){
            ?>
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <?=$quets_row['quet']?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <h3><?=$quets_row['name']?></h3>
                  <h4><?=$quets_row['title']?></h4>
                </div>
              </div>
            <?php
          }
        }
        
        ?>
        </div>

        <div class="swiper-pagination"></div>
      </div>

      <div class="owl-carousel testimonials-carousel">

      </div>

    </div>

  </section>

  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>CV</h2>
        <p>Миний CV</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Дүгнэлт</h3>
          <div class="resume-item pb-0">
            <h4>Г.Ану-Үжин</h4>
            <p><em>Хэрэглэгч төвтэй статик/динамик ,төслийн менежментийн анхан шатны концепцоос дундаж шат, апп хөгжүүлэлт хүргэх хүртэл загварчлах, хөгжүүлэх чиглэлээр 2+ жилийн туршлагатай, шинэлэг, программ хангамжийн оюутан.</em></p>
            <p>
            <ul>
              <li>Их засаг ҮИТС</li>
              <li>95343142</li>
              <li>ujin@gmail.com</li>
            </ul>
            </p>
          </div>

          <h3 class="resume-title">Боловсрол</h3>
          <div class="resume-item">
            <h4>Нийслэлийн Ерөнхий Боловсролын Лаборатори &amp; 44 дүгээр сургууль </h4>
            <h5>2009 - 2022</h5>
          </div>
          <div class="resume-item">
            <h4>Программ хангамж баклавар &amp; Төслийн менежмент</h4>
            <h5>2022 - 2024</h5>
            <p><em>Их засаг Үндэсний инженер технологийн сургууль</em></p>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Мэргэжлийн туршлага</h3>
          <div class="resume-item">
            <h4>Fractal Tech</h4>
            <h5>2023 - Одоогийн</h5>
            <p><em>twin tower 1, 8 давхар, 802тоот </em></p>
            <p>
            <ul>
              <li>Кодчлол, төслийн менежтент, reactjs танилцах дадлагаар сурсан</li>
              <li>Промчлалын багийн 10 гишүүнд үүрэг даалгавар өгч, төслийн бүх талаар зөвлөгөө авсан. </li>
              <li>Төслийн чанар, үнэн зөв байдлыг хангахын тулд кодчлолын үнэлгээг хянах </li>
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>Төслийн менежмент</h4>
            <h5>2022 - 2023</h5>
            <p><em>twin tower 1, 8 давхар, 802тоот </em></p>
            <p>
            <ul>
              <li>Олон тооны маркетингийн хөтөлбөрүүд (Төлөвлөгөө, Gant chart гэх мэт, Зардлын төлөвлөгөө, Эрсдлийн төлөвлөгөө) боловсруулсан.</li>
              <li>Анхны танилцуулга (kick off), Багийн үйл явцын менежмент ,Зөрүүний анализ, Өөрчлөлтийн уулзалт, Дуусгалт</li>
              <li>Багийн үйл явцын менежмент, Waterfall аргачлал, Аgile аргачлал</li>
            </ul>
            </p>
          </div>
        </div>
      </div>

    </div>
  </section>

 

  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Хийсэн төсөл</h2>
        <p>Миний бүтээлүүд</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Бүгд</li>
            <?php
              $cat_list = "SELECT * FROM `category`";
              $cat_result = mysqli_query($con, $cat_list);
              if($cat_result -> num_rows > 0){
                while($cat_data = $cat_result -> fetch_assoc()){
                  ?>
                  <li data-filter=".<?php echo $cat_data['name']?>"><?php echo $cat_data['name']?></li>
                  <?php
                }
              }
            ?>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">
        <?php
          $portfolio = "SELECT * FROM `portfolio`";
          $portfolio_result = mysqli_query($con, $portfolio);

          if($portfolio_result -> num_rows > 0){
            while($portfolio_data = $portfolio_result->fetch_assoc()){
              $category = $portfolio_data['category'];
                $category_sql = "SELECT * FROM `category` WHERE `category`.`id`='$category'";
                $category_result = mysqli_query($con, $category_sql);
                $category_data = mysqli_fetch_assoc($category_result);
              ?>
                <div class="col-lg-4 col-md-6 portfolio-item <?=$category_data['name']?>">
                  <div class="portfolio-wrap">
                    <img src="<?=$portfolio_data['image']?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4><?=$portfolio_data['title']?></h4>
                      <p><?=$category_data['name']?></p>
                      <div class="portfolio-links">
                        <a href="<?=$portfolio_data['image']?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $portfolio_data['title']?>"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.php?id=<?php echo $portfolio_data['id']?>" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
            }
          }
          else{
            echo "Төсөл олдсонгүй.";
          }
        ?>
      </div>

    </div>
  </section>


  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Холбоо барих</h2>
        <p>Надтай холбогдоорой</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>Миний хаяг</h3>
            <p><?=$data['address']?></p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Профайл</h3>
            <div class="social-links">
              <?php   
                if($data['twitter']){
              ?>
                  <a href="<?=$data["twitter"]?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
              <?php
                }
              ?>

              <?php   
                if($data['facebook']){
              ?>
                  <a href="<?=$data["facebook"]?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
              <?php
                }
              ?>

              <?php   
                if($data['instagram']){
              ?>
                  <a href="<?=$data["instagram"]?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
              <?php
                }
              ?>

              <?php   
                if($data['youtube']){
              ?>
                  <a href="<?=$data["youtube"]?>" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
              <?php
                }
              ?>

              <?php   
                if($data['github']){
              ?>
                  <a href="<?=$data["github"]?>" target="_blank" class="github"><i class="bi bi-github"></i></a>
              <?php
                }
              ?>

              <?php   
                if($data['linkedin']){
              ?>
                  <a href="<?=$data["linkedin"]?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
              <?php
                }
              ?>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Емайл</h3>
            <p><?=$data['email']?></p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Холбогдох утас</h3>
            <p><?=$data['phone']?></p>
          </div>
        </div>
      </div>
      <?php
        if(isset($_POST['send_message'])){
          global $con;
          $name = mysqli_real_escape_string($con, $_POST['name']);
          $email = mysqli_real_escape_string($con, $_POST['email']);
          $subject = mysqli_real_escape_string($con, $_POST['subject']);
          $message = mysqli_real_escape_string($con, $_POST['message']);

          $contact = "INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";
          mysqli_query($con, $contact);
        }
      ?>
      <form action="#" method="post" class="mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Нэрээ оруулна уу" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Емайл оруулна уу." required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Сэдэв оруулна уу" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Зурвас оруулна уу" required></textarea>
        </div>
        <div class="text-center"><button type="submit" name="send_message">Зурвас илгээх</button></div>
      </form>

    </div>
  </section>

 

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