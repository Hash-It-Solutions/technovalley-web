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


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>







  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/gallery.css">
  <link rel="stylesheet" href="css/main.css">

  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.4/hammer.min.js"></script>
  <script src="js/gallery.js"></script>
  <script src="js/main.js"></script>

  
  
  
  
  
  
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

      <h1 class="logo"><a href="index.html"> <img src="assets/img/logo.png"><span>.</span></a></h1>
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
  <div class="banner-about">
  <div class="container">
  <p class="text-center">  technovalley contact us<br>
 </p>
  </div>  
</div>























<br><br>
  <div class="container cmtl">
<div class="col-md-12">
    <div class="form-area">  
        <form role="form">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
					</div><br>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
					</div><br>
					<div class="form-group">
						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
					</div><br>
					
					
					<div class="form-group col-md-12">
                 <select class="span3" id="subject" name="subject" required="">
                    <option selected value="na">
                        select course
                    </option>
    
                    <option value="service">
                        General Customer Service
                    </option>
    
                    <option value="suggestions">
                        Suggestions
                    </option>
    
                    <option value="product">
                        Product Support
                    </option>
                </select>                  
                    </div><br>
					
                    <div class="form-group col-md-12">
                 <select class="span3" id="subject" name="subject" required="">
                    <option selected value="na">
                        select center
                    </option>
    
                    <option value="service">
                        General Customer Service
                    </option>
    
                    <option value="suggestions">
                        Suggestions
                    </option>
    
                    <option value="product">
                        Product Support
                    </option>
                </select>                  
                    </div>
					<br>
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" required="">
  <label for="vehicle1"> I Agree to receive communication via Email, SMS &
WhatsApp from Technovally Software Consulting</label>
       
		 <button type="submit" id="submit" name="submit" class="btn btn-warning pull-right col-md-12">Submit Form</button>
        </form>
		<br>
		<br>	<br>
    </div>
</div>
</div>
<br><br><br>
    <div class="container bout1">
	
        <div class="row">


            <div class="col-lg-7  bthh ">
			<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d62873.006146276755!2d76.25785284884188!3d9.970278225047469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d9.9312328!2d76.26730409999999!4m5!1s0x3b080d03f03e1553%3A0xdc6b00414e05a296!2stechnovalley%20advanced%20knowledge%20services!3m2!1d10.011664!2d76.3123602!5e0!3m2!1sen!2sin!4v1675346847284!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

<!-- Card #2, Intermediate -->
            

<!-- Card #3, Professional -->
            <div class="col-12 col-md-5 xyr">
            <div class="card bg-light mb-3">
                <div class="card-header btn btn-warning  text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
                <div class="card-body" style="background: rgba(255, 140, 66, 0.2);">
                    <p>Technovalley Africa Proprietory Limited, Plot No. 53609/4, First Floor, Gaborone West, Gaborone, Botswana.</p>
                    <p> <span style=" font-weight:bold;">Phone:</span> +91 484 4140100-111</p>
                    <p>+91 484 4140100-111</p>
                    <p> <span style=" font-weight:bold;">Mobile:</span> +91 484 4140100-111   </p>
                    <p>info@technovalley.co.in</p>

                </div>

            </div>
        </div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
    </div>
  
  </div>
  

  <br>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

<?php include('footer.php') ?>
  
  
  
    <!-- ======= Pricing Section ======= -->
   

    <!-- ======= Frequently Asked Questions Section ======= -->
   
    <!-- ======= Contact Section ======= -->
  
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 

  <!-- Vendor JS Files -->


 
  
  
  <style>
  
  
  
  
  
  
  
  
  
  
  
  
  
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


body{
overflow-x :hidden;
}




.container .bout1{
max-width:1410px !important;
}









  </style>
  
  
  

</body>

</html>