<?php
ob_start();
session_start();
include("admin/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>technovalley</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"
    type="text/css" media="screen" />
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>








  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/gallery.css">
  <link rel="stylesheet" href="css/main.css">

  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.4/hammer.min.js"></script>
  <script src="js/gallery.js"></script>
  <script src="js/main.js"></script>


  <script>
    $('.counter-count').each(function () {
      $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
      }, {
        duration: 5000,
        easing: 'swing',
        step: function (now) {
          $(this).text(Math.ceil(now));
        }
      });
    });

  </script>


</head>

<body>




  <script type='text/javascript'>
    $(function () {
      setTimeout(function() {
        var overlay = $('<div id="overlay"></div>');
      overlay.fadeIn(2000);
      overlay.appendTo(document.body);
      $('.popup').fadeIn(1000);
      $('.close').click(function () {
        $('.popup').hide();
        overlay.appendTo(document.body).remove();
        return false;
      });
        }, 3000);
      




      $('.x').click(function () {
        $('.popup').hide();
        overlay.appendTo(document.body).remove();
        return false;
      });
    });

   
  </script>


  <!-- popup start -->
  <div class='popup'  style="display: none;">
    <div class='cnt223' id="contactForm" style="display: none;">


      <div class="form-sec" style="margin-top:0px; box-shadow:none; width:94%;">
        <a style="float:right;" href='' class='close'>X</a>
        <h4 class="text-center">Enquiry Form</h4>

        <form name="qryform" id="qryform" method="post">
          <div class="form-group">

            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
          </div>
          <br>
          <div class="form-group">

            <input type="email" class="form-control" id="name" placeholder="Enter Email" name="email" required>
          </div>
          <br>
          <div class="form-group">

            <input type="text" class="form-control" id="phone" placeholder="Enter Phone no." name="phone" required>
          </div>
          <br>
          <div class="form-group">

            <input type="text" class="form-control" id="name" placeholder="Subject" name="subject" required>
          </div>
          <br>
          <div class="form-group">

            <textarea name="issues" class="form-control" id="iq" placeholder="Enter your Issues/query" required></textarea>
          </div>
          <br>

          <button type="submit" name="submit-form" class="btn btn-warning col-md-12">ENQUIRE NOW</button>
        </form>
      </div>
    </div>
  </div>

  <script>
     window.onload = function() {
  setTimeout(function() {
    document.getElementById("contactForm").style.display = "block";
  }, 3000); // 3000 milliseconds = 3 seconds
};    
  </script>


  <!-- ======= popup end ======= -->






  <!-- ======= header  ======= -->

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">Plot No. 53609/4, First Floor, Gaborone West, Gaborone, Botswana.</a></i>
     
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php"> <img src="assets/img/logo.png"><span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="courses.html">COURSES</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li><a class="nav-link scrollto" href="blog.php">Blog</a></li>
          <li><a class="nav-link scrollto " href="contact.php">Contact</a></li>
    
      	<button type="button" class="btn btn-warning">ENQUIRE NOW</button> 
       
        </ul>
	
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<?php
    $statement2 = $pdo->prepare("SELECT * FROM tbl_slider");
    $statement2->execute();
    $result2 = $statement2->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result2 as $key2=> $row2) {
  ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="background: url(<?php echo BASE_URL; ?>/assets/uploads/<?php echo $row2['photo']; ?>);">
    <div class="container" data-aos="zoom-out" data-aos-delay="100 ">
 
        <div class="slider22">
        <div class="caption22">
          AFRICA's
          <div class="text-box">
            <div>Empowering</div>
            <div>Motivating</div>
            <div>Upskilling</div>
          </div>
        </div>
      </div>
   
    </div>
  </section><!-- End Hero -->
<?php } ?>






    
     <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-end">
          <div class="col-lg-12">
            <div class="row justify-content-end">

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch ply ">
                <div class="count-box py-5 ">
               
                  <span data-c-start="0" data-purecounter-end="100" class="purecounter">0         </span>  <span style="color:#fff; font-size:25px;">% </span>
                  <p>Success Rate</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch ply">
                <div class="count-box py-5">
                 
                  <span data-purecounter-start="0" data-purecounter-end="12" class="purecounter">0</span><span style="color:#fff; font-size:25px; font-weight:bold;">+ </span>
                  <p>Years of Service</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch ply">
                <div class="count-box pb-5 pt-0 pt-lg-5">
                
                  <span data-purecounter-start="0" data-purecounter-end="135" class="purecounter">0</span><span style="color:#fff; font-size:25px; font-weight:bold;">k+ </span>
                  <p>Students</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box pb-5 pt-0 pt-lg-5">
                 
                  <span data-purecounter-start="0" data-purecounter-end="22" class="purecounter">0</span> <span style="color:#fff; font-size:25px;">+ </span>
                  <p>Courses</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        

      </div>
    </section><!-- End About Section -->


    <!-- ======= Featured Services Section ======= -->


 
    <!-- ======= Skills Section ======= -->
   
    <!-- ======= Counts Section ======= -->
  
    <!-- ======= Clients Section ======= -->
  
    <!-- ======= Services Section ======= -->
  

    <!-- ======= Testimonials Section ======= -->
  
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h5>WELECOME TO TECHNOVALLY AFRICA</h5>
          <h3>Course Categories</h3>
      
        </div>

<div class="search-container">

<form class="text-center" action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
	</div>
	<br>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All Categories</li>
              <?php
                    $statement = $pdo->prepare("SELECT * FROM tbl_course_category ORDER BY category_id ASC");
                    $statement->execute();
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
                    foreach ($result as $key=> $row) {
                    $category_id = $row['category_id'];
                ?>
                <li data-filter=".filter-<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></li>
              <?php } ?>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <?php
            $statement = $pdo->prepare("SELECT * FROM tbl_course_category ORDER BY category_id ASC");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
            foreach ($result as $key=> $row) {
            $category_id = $row['category_id'];

            $statement1 = $pdo->prepare("SELECT * FROM tbl_course where category_id = $category_id");
            $statement1->execute();
            $result1 = $statement1->fetchAll(PDO::FETCH_ASSOC); 
            foreach ($result1 as $key1=> $row1) {
        ?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $row['category_id']; ?>">
                <img src="<?php echo BASE_URL; ?>assets/uploads/<?php echo $row1['photo']; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?php echo $row1['title']; ?></h4>
                  <!-- <p>Web</p> -->
                <!--   <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a> -->
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
        <?php } }?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  
  
  <div class="how-section1" >
  <div class="container">
                    <div class="row">
                       
                        <div class="col-md-6">
                            <h4>Welcome to technovalley
software consulting
</h4>
                                       
                        <p class="text-muted">Technovalley Africa is thrilled to announce its launch in Africa. Our goal is to empower and promote education by providing world-class education and skills training to students. Our innovative programs and experienced faculty will equip students with the knowledge and skills needed to become leaders in their field and drive the continent's development. Our organization is made up of three strategic business units that work together to provide a comprehensive education experience. Join us on this journey and be part of the change that is shaping Africa's future.</p>
                        </div>
						
				
				
				
				
				
				
				
				
				
				
				
				<div class="col-md-6">
                          <img src="assets/img/tech.png">
                        </div>		
						
                    </div>
                    
                    
                    
                </div>
  
  </div>
  
  
  
   <div class="main-container">
   
    <div class="container">
	<div class="row">
	<div class="col-md-6">
      <article>
       
      
        <section>
          <h2>our news&events </h2>
    <?php
        $statement = $pdo->prepare("SELECT * FROM tbl_blogs ORDER BY service_id DESC LIMIT 1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $key=> $row) {
        $service_id = $row['service_id'];
    ?>
          <div class="gallery">
            <div class="images">
              <div class="image active">
                <div class="content" style="background-image: url(<?php echo BASE_URL; ?>/assets/uploads/<?php echo $row['photo']; ?>)"></div>
              </div>
              <?php
                    $statement2 = $pdo->prepare("SELECT * FROM tbl_photo where service_id = $service_id");
                    $statement2->execute();
                    $result2 = $statement2->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($result2 as $key2=> $row2) {
                ?>
                      <div class="image">
                        <div class="content" style="background-image: url(<?php echo BASE_URL; ?>/assets/uploads/<?php echo $row2['photo_name']; ?>)"></div>
                      </div>
                <?php } ?>
            </div>
            <div class="thumbs">
              <div class="thumb active" style="background-image: url(<?php echo BASE_URL; ?>/assets/uploads/<?php echo $row['photo']; ?>)"></div>
              <?php
                    $statement2 = $pdo->prepare("SELECT * FROM tbl_photo where service_id = $service_id");
                    $statement2->execute();
                    $result2 = $statement2->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($result2 as $key2=> $row2) {
                ?>
                <div class="thumb" style="background-image: url(<?php echo BASE_URL; ?>/assets/uploads/<?php echo $row2['photo_name']; ?>)"></div>
              <?php } ?>
            </div>
			<h3><?php echo $row['service_title']; ?>  </h3>
			<P>
			<?php echo $row['service_content']; ?>
          </div>
    <?php } ?>
		  </div>
		  
		<div class="col-md-1 col-0">
		</div>
		
		
		<div class="col-md-5">
     <div class="ex1">
	 <div class="row">
    <?php
        $statement = $pdo->prepare("SELECT * FROM tbl_blogs ORDER BY service_id DESC");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $key=> $row) {
        $service_id = $row['service_id'];
    ?>
        	 <div class="col-md-8 col-12">
        	<P><?php echo $row['service_content']; ?> </P>
        	 </div>
        	 
        	 	 <div class="col-md-4 col-12  news">
        	<img src="<?php echo BASE_URL; ?>/assets/uploads/<?php echo $row['photo']; ?>">
        	 </div>
	       <hr>
           
      <?php } ?>
	 	<!--  <div class="col-md-8 col-12">
	<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </P>
	 </div>
	 
	 	 <div class="col-md-4 col-12  news">
	<img src="assets/img/Rectangle.png">
	 </div>
	 <hr>
	 	 <div class="col-md-8 col-12">
	<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </P>
	 </div>
	 
	 	 <div class="col-md-4 col-12  news">
	<img src="assets/img/Rectangle.png">
	 </div>
	 <hr>	 <div class="col-md-8 col-12">
	<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </P>
	 </div>
	 
	 	 <div class="col-md-4 col-12  news">
	<img src="assets/img/Rectangle.png">
	 </div>
	 <hr>	 <div class="col-md-8 col-12">
	<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </P>
	 </div>
	 
	 	 <div class="col-md-4 col-12  news">
	<img src="assets/img/Rectangle.png">
	 </div>
	 <hr>
	 	 <div class="col-md-8 col-12">
	<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </P>
	 </div>
	 
	 	 <div class="col-md-4 col-12  news">
	<img src="assets/img/Rectangle.png">
	 </div>
	 <hr>	 <div class="col-md-8 col-12">
	<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </P>
	 </div>
	 
	 	 <div class="col-md-4 col-12  news">
	<img src="assets/img/Rectangle.png">
	 </div>
	 <hr>	 <div class="col-md-8 col-12">
	<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </P>
	 </div>
	 
	 	 <div class="col-md-4 col-12  news">
	<img src="assets/img/Rectangle.png">
	 </div>
	 <hr>	 <div class="col-md-8 col-12">
	<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </P>
	 </div>
	 
	 	 <div class="col-md-4 col-12  news">
	<img src="assets/img/Rectangle.png">
	 </div>
	 <hr>	 <div class="col-md-8 col-12">
	<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </P>
	 </div>
	 
	 	 <div class="col-md-4 col-12  news">
	<img src="assets/img/Rectangle.png">
	 </div>
	 <hr>	 <div class="col-md-8 col-12">
	<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </P>
	 </div>
	 
	 	 <div class="col-md-4 col-12  news">
	<img src="assets/img/Rectangle.png">
	 </div>
	 <hr>	 <div class="col-md-8 col-12">
	<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </P>
	 </div>
	 
	 	 <div class="col-md-4 col-12  news">
	<img src="assets/img/Rectangle.png">
	 </div>
	 <hr>	 <div class="col-md-8 col-12">
	<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </P>
	 </div>
	 
	 	 <div class="col-md-4 col-12  news">
	<img src="assets/img/Rectangle.png">
	 </div>
	 <hr>	 <div class="col-md-8 col-12">
	<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </P>
	 </div>
	 
	 	 <div class="col-md-4 col-12  news">
	<img src="assets/img/Rectangle.png">
	 </div>
	 <hr>	 <div class="col-md-8 col-12">
	<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </P>
	 </div>
	 
	 	 <div class="col-md-4 col-12  news">
	<img src="assets/img/Rectangle.png">
	 </div>
	 <hr> -->
	 </div>
	 
	 </div>

    

    </div>
    <!-- #main -->
  </div>
  
  </div>
  
  
  
  
  
   <div class="lmw">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <P>Find Your <span class="yrl">Course </span> That<br> Makes Bright Future</P>
          <button type="button" class="btn btn-warning">ENQUIRE NOW</button>
        </div>



        <div class="col-md-5">
          <img src="assets/img/Ry.png">
        </div>





      </div>
    </div>
  </div>








  <div class="social_media_div">
    <ul class="icons_list">


      <li>
        <a href="javascript:void(0)"><i class="twitter-icon fa fa-facebook"></i></a>
      </li>
      <li>
        <a href="javascript:void(0)"><i class="googleplus-icon fa fa-instagram"></i></a>


      <li>

        <a href="javascript:void(0)"><i class="instagram-icon fa fa-whatsapp"></i></a>

      </li>

    </ul>
  </div>





<?php include('footer.php') ?>



  <!-- ======= Pricing Section ======= -->


  <!-- ======= Frequently Asked Questions Section ======= -->

  <!-- ======= Contact Section ======= -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  <style>
    #spin {
      color: #00a388;
      font-size: 55px;
      font-weight: bold;
    }

    #spin:after {
      content: "";
      animation: spin 48s linear infinite;
    }

    @keyframes spin {
      0% {
        content: "ipsum";
      }

      10% {
        content: "dolor";
      }

      20% {
        content: "sit";
      }

      30% {
        content: "amet";
      }

      40% {
        content: "consectetur";
      }

      50% {
        content: "adipisicing";
      }

      60% {
        content: "elit";
      }

      70% {
        content: "Hic";
      }

      80% {
        content: "atque";
      }

      90% {
        content: "fuga";
      }
    }





    .slider22 {
      height: 600px;

      text-align: center;
      position: relative;
      animation: slideColor 10s forwards infinite;
    }



    .caption22 {
      line-height: 100px;
      font-size: 51px;
      color: #fff;
      position: relative;
      top: 50%;
      transform: translateY(-50%);
      text-shadow: 0px 5px 5px rgba(0, 0, 0, .25);
      margin-left: 144px;
      font-weight: bold;
    }






    .text-box {
      display: inline-block;
      position: relative;
    }

    .text-box div {
      display: inline-block;
      position: absolute;
      top: 66px;
      transform: rotateX(-90deg);
      opacity: 0;
      text-shadow: 0px 5px 5px rgba(0, 0, 0, .25);
      animation-timing-function: ease;
      color: #00a88e;
      left: -506px;
      font-size: 50px;
      font-weight: bold;
    }


    .text-box div:nth-child(1) {
      animation: rollDown 10s forwards infinite;
    }

    .text-box div:nth-child(2) {
      animation: rollDown2 10s forwards infinite;
    }

    .text-box div:nth-child(3) {
      animation: rollDown3 10s forwards infinite;
    }

    @keyframes rollDown {
      0% {
        top: -200px;
        transform: rotateX(-90deg);
      }

      11% {
        top: -74px;
        transform: rotateX(0deg);
        opacity: 1;
      }

      22% {
        top: -74px;
        transform: rotateX(0deg);
        opacity: 1;
      }

      33% {
        top: 50px;
        transform: rotateX(30deg);
        opacity: 0;
      }
    }

    @keyframes rollDown2 {
      33% {
        top: -200px;
        transform: rotateX(-90deg);
      }

      44% {
        top: -74px;
        transform: rotateX(0deg);
        opacity: 1;
      }

      55% {
        top: -74px;
        transform: rotateX(0deg);
        opacity: 1;
      }

      66% {
        top: 50px;
        transform: rotateX(30deg);
        opacity: 0;
      }
    }

    @keyframes rollDown3 {
      66% {
        top: -200px;
        transform: rotateX(-90deg);
      }

      77% {
        top: -74px;
        transform: rotateX(0deg);
        opacity: 1;
      }

      88% {
        top: -74px;
        transform: rotateX(0deg);
        opacity: 1;
      }

      99% {
        top: 50px;
        transform: rotateX(30deg);
        opacity: 0;
      }
    }


    
  </style>

  <script>
    $('.nav-tabs-dropdown')
      .on("click", ".nav-link:not('.active')", function (event) {
        $(this).closest('ul').removeClass("open");
      })
      .on("click", ".nav-link.active", function (event) {
        $(this).closest('ul').toggleClass("open");
      });

      $('#qryform').on('submit', function (e) {
          e.preventDefault();
          $.ajax({
            type: 'post',
            url: 'popup-submit.php',
            data: $('#popup-form').serialize(),
            success: function (result) {
              alert('Your Message has been sent Successfully. We will contact you back soon.');
              $('#popup-form').val('');
              // $('#contactForm').css('display','none');
            }
          });

        });
  </script>


</body>

</html>