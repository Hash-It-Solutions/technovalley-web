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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" type="text/css" media="screen" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

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
  <!-- =======================================================
  * Template Name: BizLand - v3.10.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
  
  
  
  
  
  <script>
$('.counter-count').each(function () {
        $(this).prop('Counter',0).animate({
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
           <li><a class="nav-link scrollto " href="courses.php">COURSES</a></li>
          <li><a class="nav-link scrollto active" href="about.php">About</a></li>
          <li><a class="nav-link scrollto" href="blog.php">Blog</a></li>
          <li><a class="nav-link scrollto " href="contact.php">Contact</a></li>
    
      	<button type="button" class="btn btn-warning">ENQUIRE NOW</button> 
       
        </ul>
	
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div class="banner-blog">
  <div>
  <p class="text-center"> Technovally Blog </p>
  </div>  
</div>

  <!-- ======= banner end ======= -->

<?php
	$keyy = 0;
    $statement = $pdo->prepare("SELECT * FROM tbl_category ORDER BY category_id DESC ");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
    foreach ($result as $key=> $row) {
    	
    $category_id = $row['category_id'];

        $statement = $pdo->prepare("SELECT * FROM tbl_blogs where category_id = $category_id ORDER BY service_id DESC LIMIT 1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC); 
        if(count($result)){
        	if($keyy % 2 == 0){
?> 
  
    <!-- ======= IT INFRASTRUCTURE START ======= -->
   
    <div class="container">
	<div class="row">
		<div class="col-md-6">
	      <!-- <article> -->
	       
	      <br><br>
	          <h2><?php echo $row['category_name']; ?> </h2>
			    <?php                      
			        foreach ($result as $key=> $row) {
			        	$service_id = $row['service_id'];
			    ?>
		          	<div class="gallery">
		            	<div class="images">
			            	<div class="image <?php if($key == 0){ echo 'active';} ?>" >
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
			                    	$key2++;
			                ?>
			                <div class="thumb <?php echo $key2; ?>" style="background-image: url(<?php echo BASE_URL; ?>/assets/uploads/<?php echo $row2['photo_name']; ?>)"></div>
			              <?php } ?>
			            </div>
						<h3><?php echo $row['service_title']; ?>  </h3>
						<P><?php echo $row['service_content']; ?></P>
		        </div>
	    	<?php } ?>
		  </div>
		  
		<div class="col-md-1 col-0">
		</div>
		
		
		<div class="col-md-5">
     <div class="ex1">
	 <div class="row">
    <?php
        $statement = $pdo->prepare("SELECT * FROM tbl_blogs where service_id = $service_id ORDER BY service_id DESC");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $key=> $row) {
        $service_id = $row['service_id'];
    ?>
        	 <div class="col-md-8 col-12">
        	<P><?php echo $row['service_content']; ?> </P>
        	 </div>
        	 
        	 	 <div class="col-md-4 col-12  news">
        	<img src="<?php echo BASE_URL; ?>/assets/uploads/<?php echo $row['photo']; ?>" height="66">
        	 </div>
	       <hr>
           
      <?php } ?>

	 </div>
	 
	 </div>

    

    </div>
  </section>
  
  </div>
  
  </div>
  
 <?php $keyy ++ ;} else{
 	?> 
 	 <div class="orange">
 	    <div class="container">
	<div class="row">
	<div class="col-md-6">
      <!-- <article> -->
       
      <br><br>
          <h2><?php echo $row['category_name']; ?> </h2>
    <?php                      
        foreach ($result as $key=> $row) {
        	$service_id = $row['service_id'];
        
    ?>
          <div class="gallery">
            <div class="images">
              <div class="image <?php if($key == 0){ echo 'active';} ?>" >
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
                    	$key2++;
                ?>
                <div class="thumb <?php echo $key2; ?>" style="background-image: url(<?php echo BASE_URL; ?>/assets/uploads/<?php echo $row2['photo_name']; ?>)"></div>
              <?php } ?>
            </div>
			<h3><?php echo $row['service_title']; ?>  </h3>
			<P>
			<?php echo $row['service_content']; ?></P>
          </div>
    <?php } ?>
	  </div>
		  
		<div class="col-md-1 col-0">
		</div>
		
		
		<div class="col-md-5">
     <div class="ex2">
	 <div class="row">
    <?php
        $statement = $pdo->prepare("SELECT * FROM tbl_blogs where service_id = $service_id ORDER BY service_id DESC");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $key=> $row) {
        $service_id = $row['service_id'];
    ?>
        	 <div class="col-md-8 col-12">
        	<P><?php echo $row['service_content']; ?> </P>
        	 </div>
        	 
        	 	 <div class="col-md-4 col-12  news">
        	<img src="<?php echo BASE_URL; ?>/assets/uploads/<?php echo $row['photo']; ?>" height="66">
        	 </div>
	       <hr>
           
      <?php } ?>
	 </div>
	 
	 </div>

    

    </div>
  </section>
  
  
  
  
  
  
  
  
  
  
  
  
  </div>
  
  </div>
</div>
<?php $keyy ++ ; } } } ?>
  
      <!-- ======= IT INFRASTRUCTURE END ======= -->
  
  
  
  
  
  
     <!-- ======= IT INFRASTRUCTURE END ======= -->
  
  
  <!-- ======= Metaverse ======= -->
  
<!--   <div class="orange">
  
  
  <div class="container">
	<div class="row">
	<div class="col-md-6">
	<br><br>
      <article>
       
      
       
          <h2>Metaverse  </h2>
          <div class="gallery">
            <div class="images">
              <div class="image active">
                <div class="content" style="background-image: url(img/01.jpg)"></div>
              </div>
              <div class="image">
                <div class="content" style="background-image: url(img/02.jpg)"></div>
              </div>
              <div class="image">
                <div class="content" style="background-image: url(img/03.jpg)"></div>
              </div>
              <div class="image">
                <div class="content" style="background-image: url(img/04.jpg)"></div>
              </div>
            </div>
            <div class="thumbs">
              <div class="thumb active" style="background-image: url(img/01.jpg)"></div>
              <div class="thumb" style="background-image: url(img/02.jpg)"></div>
              <div class="thumb" style="background-image: url(img/03.jpg)"></div>
              <div class="thumb" style="background-image: url(img/04.jpg)"></div>
            </div>
			<h3>Lorem Ipsum is simply dummy text  </h3>
			<P>
			Technovalley Africa is thrilled to announce its launch in Africa. Our goal is to empower and promote education by providing world-class education and skills training to students. Our innovative programs and experienced .
          </div>
	  </div>
		  
		<div class="col-md-1 col-0">
		</div>
		
		
		<div class="col-md-5">
     <div class="ex2">
	 <div class="row">
	 <div class="col-md-8 col-12">
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
	 <hr>
	 </div>
	 
	 </div>

    

    </div>
  </section>
  
  
  
  
  </div>
  
  </div>
  
  </div> -->
         <!-- ======= Metaverse END ======= -->
		 
		 
		 
  <BR> <BR> <BR>
  
  
  
  
  
  
  
  
  
    <!-- ======= Emerging Technologies START ======= -->
  
  
  <!-- <div class="container">
	<div class="row">
	<div class="col-md-6">
      <article>
       
      
       
          <h2>Emerging Technologies  </h2>
          <div class="gallery">
            <div class="images">
              <div class="image active">
                <div class="content" style="background-image: url(img/01.jpg)"></div>
              </div>
              <div class="image">
                <div class="content" style="background-image: url(img/02.jpg)"></div>
              </div>
              <div class="image">
                <div class="content" style="background-image: url(img/03.jpg)"></div>
              </div>
              <div class="image">
                <div class="content" style="background-image: url(img/04.jpg)"></div>
              </div>
            </div>
            <div class="thumbs">
              <div class="thumb active" style="background-image: url(img/01.jpg)"></div>
              <div class="thumb" style="background-image: url(img/02.jpg)"></div>
              <div class="thumb" style="background-image: url(img/03.jpg)"></div>
              <div class="thumb" style="background-image: url(img/04.jpg)"></div>
            </div>
			<h3>Lorem Ipsum is simply dummy text  </h3>
			<P>
			Technovalley Africa is thrilled to announce its launch in Africa. Our goal is to empower and promote education by providing world-class education and skills training to students. Our innovative programs and experienced .
          </div>
	  </div>
		  
		<div class="col-md-1 col-0">
		</div>
		
		
		<div class="col-md-5">
     <div class="ex1">
	 <div class="row">
	 <div class="col-md-8 col-12">
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
	 <hr>
	              </div>
	 
	         </div>

         </div>
  </section>
  
  
      </div>
  
  </div> -->
  <!-- ======= Emerging Technologies END ======= -->
  
  
  <!-- <br><br><br> -->
  
  
    <!-- ======= Cyber security START ======= -->
  
  
  <!-- <div  style="background-color:#25425C;">
  
  
  <div class="container">
	<div class="row">
	<div class="col-md-6">
	<br><br>
      <article>
       
      
       
          <h2 style="color:#FFFFFF;">Cyber security  </h2>
          <div class="gallery">
            <div class="images">
              <div class="image active">
                <div class="content" style="background-image: url(img/01.jpg)"></div>
              </div>
              <div class="image">
                <div class="content" style="background-image: url(img/02.jpg)"></div>
              </div>
              <div class="image">
                <div class="content" style="background-image: url(img/03.jpg)"></div>
              </div>
              <div class="image">
                <div class="content" style="background-image: url(img/04.jpg)"></div>
              </div>
            </div>
            <div class="thumbs">
              <div class="thumb active" style="background-image: url(img/01.jpg)"></div>
              <div class="thumb" style="background-image: url(img/02.jpg)"></div>
              <div class="thumb" style="background-image: url(img/03.jpg)"></div>
              <div class="thumb" style="background-image: url(img/04.jpg)"></div>
            </div>
			<h3 style="color:#fff;">Lorem Ipsum is simply dummy text  </h3>
			<p style="color:#fff;">
			Technovalley Africa is thrilled to announce its launch in Africa. Our goal is to empower and promote education by providing world-class education and skills training to students. Our innovative programs and experienced 
          </p></div>
	  </article></div>
		  
		<div class="col-md-1 col-0">
		</div>
		
		
		<div class="col-md-5">
     <div class="ex2" style="background-color:#25425C; color:#FFFFFF;">
	 <div class="row">
	 <div class="col-md-8 col-12 " >
	<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </P>
	 </div>
	 
	 	 <div class="col-md-4 col-12  news">
	<img src="assets/img/Rectangle.png">
	 </div>
	 <hr>
	 	 <div class="col-md-8 col-12 ">
	<P style="color:#fff;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </P>
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
	 <hr>
	 </div>
	 
	 </div>

    

    </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  </div>
  
  </div>
  
  </div> -->
  
  <!-- ======= Cyber security END ======= -->
  
  
 
 
 
 <!-- ======= FOOTER START ======= -->
  
 <?php include('footer.php') ?> 
  
  
    <!-- ======= END FOOTER SECTION ======= -->
   

  
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
  
  body{
  overflow-x: hidden;
  }
  #spin {
  color:#00a388;
  font-size:55px;
  font-weight:bold;
}
#spin:after {
  content:"";
  animation: spin 48s linear infinite;
}
@keyframes spin {
  0% { content:"ipsum"; }
  10% { content:"dolor"; }
  20% { content:"sit"; }
  30% { content:"amet"; }
  40% { content:"consectetur"; }
  50% { content: "adipisicing"; }
  60% { content: "elit"; }
  70% { content: "Hic"; }
  80% { content: "atque"; }
  90% { content: "fuga"; }
}





.slider22{
	height: 300px;

	text-align: center;
	position: relative;
	animation: slideColor 10s forwards infinite;
}

.caption22{
	line-height: 100px;
	font-size: 60px;
	color: #fff;
	position: relative;
	top: 50%;
	transform: translateY(-50%);
	text-shadow: 0px 5px 5px rgba(0,0,0,.25);
	margin-left: -300px;
	font-weight:bold;
}

.text-box{
	display: inline-block;
	position: relative;
}

.text-box div{
	display: inline-block;
	position: absolute;
	top: -200px;
	transform: rotateX(-90deg);
	opacity: 0;
	text-shadow: 0px 5px 5px rgba(0,0,0,.25);
	animation-timing-function: ease;
	color:#00a88e;
}

.text-box div:nth-child(1){
	animation: rollDown 10s forwards infinite;
}

.text-box div:nth-child(2){
	animation: rollDown2 10s forwards infinite;
}

.text-box div:nth-child(3){
	animation: rollDown3 10s forwards infinite;
}

@keyframes rollDown {
	0%{
		top: -200px;
		transform: rotateX(-90deg);
	}
	11%{
		top: -74px;
		transform: rotateX(0deg);
		opacity: 1;
	}
	22%{
		top: -74px;
		transform: rotateX(0deg);
		opacity: 1;
	}
	33%{
		top: 50px;
		transform: rotateX(30deg);
		opacity: 0;
	}
}

@keyframes rollDown2 {
	33%{
		top: -200px;
		transform: rotateX(-90deg);
	}
	44%{
		top: -74px;
		transform: rotateX(0deg);
		opacity: 1;
	}
	55%{
		top: -74px;
		transform: rotateX(0deg);
		opacity: 1;
	}
	66%{
		top: 50px;
		transform: rotateX(30deg);
		opacity: 0;
	}
}

@keyframes rollDown3 {
	66%{
		top: -200px;
		transform: rotateX(-90deg);
	}
	77%{
		top: -74px;
		transform: rotateX(0deg);
		opacity: 1;
	}
	88%{
		top: -74px;
		transform: rotateX(0deg);
		opacity: 1;
	}
	99%{
		top: 50px;
		transform: rotateX(30deg);
		opacity: 0;
	}
}


}


#hero {
  height: 55vh!important;
  background: url(../img/hero-bg.png);
    background-size: auto;
  background-size: cover;
  position: relative;
}


  </style>
  
  
  

</body>

</html>