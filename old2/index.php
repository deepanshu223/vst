<?php
require_once 'vendor/autoload.php';
$categories_fetched = true;
$categories = array();
$headers = array('Accept' => 'application/json');
$data = array();
//Fetch all categories
$body = Unirest\Request\Body::json($data);
$response = Unirest\Request::get('https://vasishtachary.com/blog/wp-json/wp/v2/categories', $headers, $body);
if($response->code != 200){
  $categories_fetched = false;
}else{
  $category_response = $response->body;
  foreach($category_response as $category){
    $categories[$category->id] = array("name"=>$category->name,"link"=>$category->link,"slug"=>$category->slug);
  }
}
?>


<!DOCTYPE html>
<html lang="zxx" class="no-js">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="shortcut icon" href="img/fav.png">

<meta name="author" content="vasishta chary">

<meta name="description" content="">

<meta name="keywords" content="">

<meta charset="UTF-8">

<title>Vasishta Chary - Consulting Portfolio</title>
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet">

<link rel="stylesheet" href="css/linearicons.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/nice-select.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/skills.css">
</head>
<body>




<header id="header">
<div class="container main-menu">
<div class="row align-items-center d-flex">
<div id="logo">
<a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
</div>
<nav id="nav-menu-container">
<ul class="nav-menu">
<li class=""><a class="active" href="index.html">Home</a></li>
<li><a href="#about">About</a></li>
<li><a href="#skills">Skills</a></li>
<li><a href="#service">Service</a></li>

<li><a href="#certifications">Certifications</a></li>

<li><a href="#work">Latest Work</a></li>
<li><a href="https://vasishtachary.com/blog" target="_blank">Blog</a></li>
</ul>
</nav>
</div>
</div>
</header>


<section class="home-banner-area">
<div class="container">
<div class="row fullscreen d-flex align-items-center">
<div class="banner-content col-lg-6 col-md-12 justify-content-center ">
<div class="me wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.2s">It's me</div>
<h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">Vasishta Chary</h1>
<div class="designation mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.1s">
Product <span class="designer">Consultant</span> and Growth <span class="developer">Hacker</span>
</div>
<a href="https://wa.me/919662915070" class="primary-btn" data-text="Get in Touch">
<span>H</span>
<span>i</span>
<span>r</span>
<span>e</span>
<span> </span>
<span>M</span>
<span>e</span>
</a>
</div>
<div class="banner-img col-lg-6 col-md-6 align-self-end">
<img class="img-fluid" src="img/banner-img.png" alt="">
</div>
</div>
</div>
</section>


<section class="brands-area">
<div class="container">
<div class="brand-wrap">
<div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
<div class="col single-brand">
<a href="#"><h3>PushStart</h3></a>
</div>
<div class="col single-brand">
<a href="ascian.in"><h3>Ascian Solutions</h3></a>
</div>
<div class="col single-brand">
<a href="#"><h3>Headstart</h3></a>
</div>
<div class="col single-brand">
<a href="#"><h3>Jabalpur SmartCity</h3></a>
</div>
<div class="col single-brand">
<a href="#"><h3>TheStartupToday</h3></a>
</div>
</div>
</div>
</div>
</section>


<section class="about-area section-gap" id="about">
<div class="container">
<div class="row align-items-center justify-content-between">
<div class="col-lg-6 about-left">
<img class="img-fluid" src="img/about-img.jpg" alt="">
</div>
<div class="col-lg-5 col-md-12 about-right">
<div class="section-title">
<h2>about myself</h2>
</div>
<div class="mb-50 wow fadeIn" data-wow-duration=".8s">
<p>
Growth Hacker and Product Consultant by profession, Founder of Multiple Startups with experience in Design Thinking, Product Designing, Growth Strategising, Advertising, and Digital Marketing.

</br></br>I have successfully executed over 50 marketing campaigns–covering E commerce, SaaS, Political and Fashion Industry, have custom-designed 50+ website, 15+ mobile app and have been involved in physical product design such as bags, Eco friendly lifestyle products, mystery boxes and more with multiple startups as well .

                        </br></br>can help you design, prototype and optimize your product, increase engagement goals, collect and utilize consumption data and use it to make your product bigger and better.

</p>
</div>
<a href="https://vasishtachary.com/work.pdf" class="primary-btn white" data-text="Download Profile" target="_blank">
<span>D</span>
<span>o</span>
<span>w</span>
<span>n</span>
<span>l</span>
<span>o</span>
<span>a</span>
<span>d</span>

</a>
<a href="https://.ascian.in" class="primary-btn" data-text="Ascian Solution" target="_blank">
<span>A</span>
<span>s</span>
<span>c</span>
<span>i</span>
<span>a</span>
<span>n</span>
</a>

</div>
</div>
</div>
</section>

<!--SKILLS-->
        <section class="white-bg" id="skill">
          <div class="container">
           <div class="row">
<div class="col-lg-12">
<div class="section-title">
<h2>Skills</h2>
<p></p>
</div>
</div>
</div>
<div class="row">
                <p class="content-detail">

                </p>

              <div class="col-md-9 content-right">
                <!--SKILLST-->
                <div class="skillst">
                  <div class="skillbar" data-percent="82%">
                    <div class="title head-sm">
                      Product Design
                    </div>
                    <div class="count-bar">
                      <div class="count"></div>
                    </div>
                  </div>
                  <div class="skillbar" data-percent="65%">
                    <div class="title head-sm">
                      Design Thinking
                    </div>
                    <div class="count-bar">
                      <div class="count"></div>
                    </div>
                  </div>
                  <div class="skillbar" data-percent="78%">
                    <div class="title head-sm">
                      Digital Marketing
                    </div>
                    <div class="count-bar">
                      <div class="count"></div>
                    </div>
                  </div>
                  <div class="skillbar" data-percent="63%">
                    <div class="title head-sm">
                      Brand Identity Design
                    </div>
                    <div class="count-bar">
                      <div class="count"></div>
                    </div>
                  </div>
                  <div class="skillbar" data-percent="65%">
                    <div class="title head-sm">
                      Influencer Marketing
                    </div>
                    <div class="count-bar">
                      <div class="count"></div>
                    </div>
                  </div>
                </div>
                <!--/.SKILLST END-->
              </div>
            </div>
          </div>
        </section>
        <!--/.SKILLS END-->


<section class="service-area section-gap" id="service">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<h2>Service Offers</h2>
<p></p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-8">
<div class="single-service wow fadeInUp" data-wow-duration="1s">
<span class="lnr lnr-screen"></span>
<h4>
<span>Growth</span> Hacking
</h4>
<p>I use innovative design and behavioral data to drive result-driven campaigns.I optimise the campaigns to not just have exclusive but inclusive growth. </br></br>

I working on scaling up in terms of Growth, customer engagement, customer life cycle using medium of Cotent Marketing, Search Engine Optimisation, Digital Marketing, Influencer Marekting, Product Optimisation et al.</p>
</div>
</div>
<div class="col-lg-4 col-md-8">
<div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
<span class="lnr lnr-laptop-phone"></span>
<h4><span>Product</span> Consulting
</h4>
<p>Often when we translate ideas into products we face multiple roadblocks along the way, from structure to design to data collection and at times actual ground level execution. </br></br>

As a consultant i make it all possible, from a road map to execution planning, Stratergic Support to making the product scrum, UI/UX guidelines, Consuption Pttern Matrix, Product Architecture and more.</p>
</div>
</div>
<div class="col-lg-4 col-md-8">
<div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
<span class="lnr lnr-database"></span>
<h4><span>Training</span> And Development
</h4>
<p>I have conducted workshops on Design Thinking, Business Communication, & Growth Hacking. My core workshops happen with colleges, I have done on campuses of JIMS, IIT Delhi, Delhi University and more. I also conduct open workshop for entrepreneurs focusing on advanced learning.</p></br>

<a href="https://vasishtachary.com/workshop.pdf" class="primary-btn white" data-text="Workshop Profile" target="_blank">
<span>D</span>
<span>o</span>
<span>w</span>
<span>n</span>
<span>l</span>
<span>o</span>
<span>a</span>
<span>d</span>

</a>
</div>
</div>

</div>
</div>
</section>



<section class="job-area section-gap-top section-gap-bottom-90" id="certifications">
<div class="container">
<div class="row d-flex">
<div class="col-lg-12">
<div class="section-title">
<h2>Certifications</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="single-job">
<div class="top-sec d-flex justify-content-between">
<div class="top-left">
<h4>Board Certified Scrum Manager</h4>
<p></p>
</div>
<div class="top-right">
<a href="#" class="primary-btn" data-text="2016">
<span>2</span>
<span>0</span>
<span>l</span>
<span>6</span>

</a>
</div>
</div>
<div class="bottom-sec wow fadeIn" data-wow-duration="2s">
Trained in Agile Framework and have executed multiple projects as a scrum master .
</div>
</div>
</div>

<div class="col-lg-6">
<div class="single-job">
<div class="top-sec d-flex justify-content-between">
<div class="top-left">
<h4>Design Thinking</h4>
<p></p>
</div>
<div class="top-right">
<a href="#" class="primary-btn" data-text="2014">
<span>2</span>
<span>0</span>
<span>l</span>
<span>4</span>

</a>
</div>
</div>
<div class="bottom-sec wow fadeIn" data-wow-duration="2s">
Recognized and Certified in Design Thinking and its implimentation.</div>
</div>
</div>

<div class="col-lg-6">
<div class="single-job">
<div class="top-sec d-flex justify-content-between">
<div class="top-left">
<h4>Adwords Google Certification</h4>
<p>Google</p>
</div>
<div class="top-right">
<a href="#" class="primary-btn" data-text="2015">
<span>2</span>
<span>0</span>
<span>l</span>
<span>5</span>

</a>
</div>
</div>
<div class="bottom-sec wow fadeIn" data-wow-duration="2s">
Certified in Google Adwords, Adsense and Analytics module.
</div>
</div>
</div>

<div class="col-lg-6">
<div class="single-job">
<div class="top-sec d-flex justify-content-between">
<div class="top-left">
<h4>Facebook Blueprints Certification</h4>
<p>Facebook</p>
</div>
<div class="top-right">
<a href="#" class="primary-btn" data-text="2017">
<span>2</span>
<span>0</span>
<span>l</span>
<span>7</span>

</a>
</div>
</div>
<div class="bottom-sec wow fadeIn" data-wow-duration="2s">
Facebook Certified Advertising and Planning Certification.
</div>
</div>
</div>
</div>
</section>

<section class="work-area section-gap-top section-gap-bottom-90" id="work">
<div class="container">
<div class="row d-flex justify-content-between align-items-end mb-80">
<div class="col-lg-6">
<div class="section-title">
<h2>Latest Works</h2>

</div>
</div>

</div>
<div class="filters-content">
<div class="row grid">
<div class="single-work col-lg-4 col-md-6 col-sm-12 all creative wow fadeInUp" data-wow-duration="2s">
<div class="relative">
<div class="thumb">
<div class="overlay overlay-bg"></div>
<img class="image img-fluid" src="img/work/w1.png" alt="">
</div>
<div class="middle">
<h4>Online Product and Growth Stratergy</h4>
<div class="cat">Full Time Consulting</div>
</div>
<a class="overlay" href="https://www.braaga.com" target="_blank"></a>
</div>
</div>
<div class="single-work col-lg-4 col-md-6 col-sm-12 all web-design branding wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
<div class="relative">
<div class="thumb">
<div class="overlay overlay-bg"></div>
<img class="image img-fluid" src="img/work/w2.png" alt="">
</div>
<div class="middle">
<h4>Online Product Design</h4>
<div class="cat">Full Time Consulting</div>
</div>
<a class="overlay" href="https://www.sodapoplove.com" target="_blank"></a>
</div>
</div>
<div class="single-work col-lg-4 col-md-6 col-sm-12 all branding web-design wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
<div class="relative">
<div class="thumb">
<div class="overlay overlay-bg"></div>
<img class="image img-fluid" src="img/work/w3.png" alt="">
</div>
<div class="middle">
<h4>Product Design</h4>
<div class="cat">Consulting Project</div>
</div>
<a class="overlay" href=https://"www.15bells.com" target="_blank"></a>
</div>
</div>
<div class="single-work col-lg-4 col-md-6 col-sm-12 all web-design wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
<div class="relative">
<div class="thumb">
<div class="overlay overlay-bg"></div>
<img class="image img-fluid" src="img/work/w4.png" alt="">
</div>
<div class="middle">
<h4>Product Design</h4>
<div class="cat">In-house Consulting</div>
</div>
<a class="overlay" href="https://www.nexuscircle.com" target="_blank"></a>
</div>
</div>
<div class="single-work col-lg-4 col-md-6 col-sm-12 all creative wow fadeInUp" data-wow-duration="2s">
<div class="relative">
<div class="thumb">
<div class="overlay overlay-bg"></div>
<img class="image img-fluid" src="img/work/avyuct.jpg" alt="">
</div>
<div class="middle">
<h4>ML/AI Product Design</h4>
<div class="cat">In-House Consulting</div>
</div>
<a class="overlay" href="https://www.avyuct.com" target="_blank"></a>
</div>
</div>
<div class="single-work col-lg-4 col-md-6 col-sm-12 all branding wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
<div class="relative">
<div class="thumb">
<div class="overlay overlay-bg"></div>
<img class="image img-fluid" src="img/work/w6.png" alt="">
</div>
<div class="middle">
<h4>Product Optimisation</h4>
<div class="cat">Consulting Project</div>
</div>
<a class="overlay" href="https://www.livesuada.com" target="_blank"></a>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="service-area section-gap" id="blog">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<h2>Blog Articles</h2>
<p></p>
</div>
</div>
</div>
<div class="row">
<?php
          //Fetch all blog posts
          $body = Unirest\Request\Body::json($data);

          $response = Unirest\Request::get('https://vasishtachary.com/blog/wp-json/wp/v2/posts', $headers, $body);
          $response->code;
          if($response->code == 200){
            $posts = $response->body;
            $count = 0;
            foreach ($posts as $post){
             $count ++;
             If($count>=4){break;}
             ?>
<div class="col-lg-4 col-md-8">
<div class="single-post row">
<!-- Blog Post Start-->
<div class="col-lg-12 col-md-12 ">
<div class="feature-img">
<?php
$image = "";
if($post->better_featured_image){
	$image = $post->better_featured_image->source_url;
}?>
<img class="img-fluid" src="<?=$image?>" alt="<?=json_encode($post->title->rendered)?>">
</div>
<a class="posts-title" href="<?=$post->link?>"><h3><?=$post->title->rendered?></h3></a>
<p class="excert">
<?=$post->excerpt->rendered?>
</p>


<a href="<?=$post->link?>" class="primary-btn" data-text="View More" target="_blank">
<span>V</span>
<span>i</span>
<span>e</span>
<span>w</span>
<span> </span>
<span>M</span>
<span>o</span>
<span>r</span>
<span>e</span>
</a>

</div>
</div>
</div>
<!-- Blog Post End-->
<?php }
          } ?>

</div>
</div>
</section>





<section class="contact-area section-gap">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="contact-title">
<h2>Contact Me</h2>
<p></p>
</div>
</div>
</div>
<div class="row mt-80">
<div class="col-lg-4 col-md-4">
<div class="contact-box">
<h4>Phone Number</h4>
<p style="color: white">+91 966 291 5070</br>
+1 415 483 5175</p>

</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="contact-box">
<h4>Email Id</h4>
<p style="color: white">hello@vasishtachary.com</p>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="contact-box">
<h4>Website</h4>
<p style="color: white">https://www.vasishtachary.com</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12 text-center">
<a href="https://wa.me/919662915070" class="primary-btn mt-50" data-text="Get in Touch">
<span>H</span>
<span>i</span>
<span>r</span>
<span>e</span>
<span> </span>
<span>M</span>
<span>e</span>
</a>
</div>
</div>
</div>
</section>


<footer class="footer-area">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="footer-top flex-column">
<div class="footer-logo">
<a href="#">
<img src="img/logo.png" alt="">
</a>
<h4>Follow Me</h4>
</div>
<div class="footer-social">
<a href="https://www.instagram.com/kawibaba/" target="_blank"><i class="fa fa-instagram" ></i></a>
<a href="https://www.linkedin.com/in/vasishtachary/" target="_blank"><i class="fa fa-linkedin"></i></a>
<a href="https://vasishtachary.com/blog" target="_blank"><i class="fa fa-wordpress"></i></a>
<a href="https://wa.me/919662615070" target="_blank"><i class="fa fa-whatsapp"></i></a>
</div>
</div>
</div>
</div>
<div class="row footer-bottom justify-content-center">
<p class="col-lg-8 col-sm-12 footer-text">

Copyright &copy; All rights reserved | Vasishta Chary</a>
</p>
</div>
</div>
</footer>


<div id="back-top">
<a title="Go to Top" href="#">
<i class="lnr lnr-arrow-up"></i>
</a>
</div>

<script src="js/vendor/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" type="text/javascript"></script>
<script src="js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="js/easing.min.js" type="text/javascript"></script>
<script src="js/hoverIntent.js" type="text/javascript"></script>
<script src="js/superfish.min.js" type="text/javascript"></script>
<script src="js/mn-accordion.js" type="text/javascript"></script>
<script src="js/jquery.ajaxchimp.min.js" type="text/javascript"></script>
<script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="js/owl.carousel.min.js" type="text/javascript"></script>
<script src="js/jquery.nice-select.min.js" type="text/javascript"></script>
<script src="js/isotope.pkgd.min.js" type="text/javascript"></script>
<script src="js/jquery.circlechart.js" type="text/javascript"></script>
<script src="js/mail-script.js" type="text/javascript"></script>
<script src="js/wow.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
<script src="js/jquery.appear.js" type="text/javascript"></script>
<script>
//Skill
    jQuery('.skillbar').each(function() {
      jQuery(this).appear(function() {
        jQuery(this).find('.count-bar').animate({
          width:jQuery(this).attr('data-percent')
        },3000);
        var percent = jQuery(this).attr('data-percent');
        jQuery(this).find('.count').html('<span>' + percent + '</span>');
      });
    });
</script>
</body>

<!-- Mirrored from colorlib.com/preview/theme/kenedy/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Mar 2019 21:10:47 GMT -->
</html>
