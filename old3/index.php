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
<html lang="en">

<head>

		<!-- Meta -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

		<!-- Title -->
		<title>Vasishta Chary - Consulting Profile</title>

		<!-- CSS Plugins -->
        <link rel="stylesheet" href="css/plugins/bootstrap.min.css">
        <link rel="stylesheet" href="css/plugins/font-awesome.css">
		<link rel="stylesheet" href="css/plugins/magnific-popup.css">
		<link rel="stylesheet" href="css/plugins/simplebar.css">
		<link rel="stylesheet" href="css/plugins/owl.carousel.min.css">
		<link rel="stylesheet" href="css/plugins/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/plugins/jquery.animatedheadline.css">

		<!-- CSS Base -->
        <link rel="stylesheet" class="back-color" href="css/style-light.css">


		<!-- Settings Style -->
		<link rel="stylesheet" class="posit-nav" href="css/settings/left-nav.css" />
		<link rel="stylesheet" class="theme-color" href="css/settings/green-color.css" />
		<link rel="stylesheet" class="box-st" href="css/settings/circle-box.css" />

    </head>
    <body>



		<!-- Preloader -->
		<div id="preloader">
  			<div class="loading-area">
    			<div class="circle"></div>
  			</div>
  			<div class="left-side"></div>
  			<div class="right-side"></div>
		</div>

		<!-- Main Site -->
		<div id="home">
  		<div id="about">
    	<div id="resume">
     	<div id="portfolio">
        <div id="blog">
		<div id="contact">

			<div class="header-mobile">
                <a class="header-toggle"><i class="fas fa-bars"></i></a>
                <h2>Vasishta Chary</h2>
            </div>

			<!-- Left Block -->
			<nav class="header-main" data-simplebar>

				<!-- Logo -->
				<div class="logo">
            		<img src="img/white.png" alt="">
            	</div>

          		<ul>
					<li data-tooltip="Home" data-position="top">
            			<a href="#home" class="icon-h fas fa-house-damage"></a>
					</li>
					<li data-tooltip="About" data-position="top">
            			<a href="#about" class="icon-a fas fa-user-tie"></a>
					</li>
					<li data-tooltip="Resume" data-position="top">
            			<a href="#resume" class="icon-r fas fa-address-book"></a>
					</li>
					<li data-tooltip="Portfolio" data-position="top">
            			<a href="#portfolio" class="icon-p fas fa-briefcase"></a>
					</li>
					<li data-tooltip="Blog" data-position="top">
            			<a href="#blog" class="icon-b fas fa-receipt"></a>
					</li>
					<li data-tooltip="Contact" data-position="bottom">
						<a href="https://calendly.com/kawibaba/consulting" target="_blank" class="icon-c fas fa-envelope"></a>
					</li>
          		</ul>

				<!-- Sound wave -->

			 </nav>

			<!-- Home Section -->
          	<div class="pt-home">

				<div class="addition-bg">

					<!-- Html Video -->
					<div class="html-video-container" data-vide-bg="img/bg.mp4"></div>
				</div>

             	<section>

					<!-- Banner -->
					<div class="banner">
  						<h1>Vasishta Chary</h1>
						<p class="cd-headline rotate-1">
							<span>I am a</span>
							<span class="cd-words-wrapper">
								<b class="is-visible">Consultant</b>
								<b>Product Designer</b>
								<b>Growth Hacker</b>
								<b>Community Ninja</b>
                <b>HeadStarter</b>
							</span>
						</p>
					</div>

					<!-- Language -->


					<!-- Social -->
					<div class="social">
            			<ul>
                    <li><a href="https://www.instagram.com/kawibaba/" target="_blank"><i class="fab fa-instagram" ></i></a></li>
                    <li><a href="https://www.linkedin.com/in/vasishtachary/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="https://vasishtachary.com/blog" target="_blank"><i class="fab fa-wordpress"></i></a></li>
              			<li><a href="#"><i class="fab fa-spotify"></i></a></li>
						        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="https://wa.me/919662615070" target="_blank"><i class="fab fa-whatsapp"></i></a></li>

            			</ul>
        			</div>
			  	</section>
          	</div>

			<!-- About Section -->
			<div class="page pt-about" data-simplebar>
				<section class="container">

					<!-- Section Title -->
					<div class="header-page mt-70 mob-mt">
						<h2>About Me</h2>
						<span></span>
					</div>

					<!-- Personal Info Start -->
					<div class="row mt-100">

						<!-- Information Block -->
						<div class="col-lg-12 col-sm-12">
    						<div class="info box-1">
								<div class="row">
									<div class="col-lg-3 col-sm-4">
										<div class="photo">
											<img alt="" src="img/user-photo.jpg">
										</div>
									</div>
									<div class="col-lg-9 col-sm-8">
										<h4>Vasishta Chary</h4>
										<div class="loc">

										</div>
                    Growth Hacker and Product Consultant by profession, Founder of Multiple Startups with experience in Design Thinking, Product Designing, Growth Strategising, Advertising, and Digital Marketing.

                  </br></br>I have successfully executed over 50 marketing campaigns–covering E commerce, Saas, Political and Fashion Industries, have custom-designed 50+ website, 15+ mobile app and have been involved in physical product design such as bags, Eco friendly lifestyle products, mystery boxes and more with multiple startups as well .

                </br></br>I can help you design, prototype and optimize your product, increase engagement goals, collect and utilize consumption data and use it to make your product bigger and better.

									</div>

									<!-- Icon Info -->
									<div class="col-lg-3 col-sm-4">
                                		<div class="info-icon">
                                     		<i class="fas fa-award"></i>
                                     		<div class="desc-icon">
												<h6>7 Years Startup</h6>
                                            	<p>Experience</p>
                                       		</div>
                                		</div>
                                	</div>

									<!-- Icon Info -->
									<div class="col-lg-3 col-sm-4">
                                		<div class="info-icon">
                                     		<i class="fas fa-certificate"></i>
                                     		<div class="desc-icon">
												<h6>50+ Projects</h6>
                                            	<p>Completed</p>
                                      		</div>
                                		</div>
                                	</div>

									<!-- Icon Info -->
									<div class="col-lg-3 col-sm-4">
                                		<div class="info-icon">
                                     		<i class="fas fa-user-astronaut"></i>
                                     		<div class="desc-icon">
												<h6>Freelance</h6>
                                           		<p>Available</p>
                                        	</div>
                                		</div>
                                	</div>
									<div class="col-lg-3 col-sm-12 pt-50">
                                		<a href="vst/new/profile.pdf" class="btn-st">Download Profile</a>
                                	</div>
								</div>
							</div>
						</div>
					</div>




          <!-- Experience & Education Row Start -->
					<div class="row mt-100">

					                        <!-- Header Block -->
                          <div class="col-md-12">
                            <div class="header-box mb-50">
                              <h3>Startups Founded</h3>
                            </div>
                          </div>

                          <!-- Service Item -->

                          <div class="col-lg-6 col-sm-6">
                            <div class="service box-1 mb-40">
                              <div class="photo">
                                <a href="https://ascian.in" target="_blank"><img alt="" src="img\logo\1.png"></a>
                              </div>
                            </div>
                          </div>

                          <!-- Service Item -->
                          <div class="col-lg-6 col-sm-6">
                            <div class="service box-1 mb-40">
                              <div class="photo">
                                <a href="https://thybookbox.com" target="_blank"><img alt="" src="img\logo\2.png"></a>
                              </div>
                              </div>
                            </div>


                          <!-- Service Item -->
                          <div class="col-lg-6 col-sm-6">
                            <div class="service box-1 mb-40">
                              <div class="photo">
                                <a href="https://ecoterri.com" target="_blank"><img alt="" src="img\logo\3.png"></a>
                              </div>
                              </div>
                            </div>


                          <!-- Service Item -->
                          <div class="col-lg-6 col-sm-6">
                            <div class="service box-1 mb-40">
                              <div class="photo">
                                <a href="https://thestartuptoday.com" target="_blank"><img alt="" src="img\logo\4.png"></a>
                              </div>
                              </div>
                            </div>


					</div>




          <!-- Interests Row Start -->
					<div class="row mt-100">

						<!-- Header Block -->
						<div class="col-md-12">
							<div class="header-box mb-50">
								<h3>My Interests</h3>
							</div>
						</div>

						<div class="col-lg-12 col-sm-12">
							<div class="box-2">
								<div class="row">
									<!-- Interests Item -->
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
                                     		<i class="fas fa-music"></i>
                                    	 	<div class="desc-inter">
												<h6>Music</h6>
                               	        	</div>
										</div>
									</div>

									<!-- Interests Item -->
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
                                     		<i class="fas fa-tv"></i>
                                     		<div class="desc-inter">
												<h6>TV Shows</h6>
                                       		</div>
                                		</div>
									</div>

                  <!-- Interests Item -->
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
                                    	 	<i class="fas fa-film"></i>
                                     		<div class="desc-inter">
												<h6>Movies</h6>
                                   	    	</div>
                                		</div>
									</div>

									<!-- Interests Item -->
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
                                    	 	<i class="fas fa-utensils"></i>
                                     		<div class="desc-inter">
												<h6>Cooking</h6>
                                   	    	</div>
                                		</div>
									</div>

									<!-- Interests Item -->
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
                                 	    	<i class="fas fa-pen-fancy"></i>
                                 	    	<div class="desc-inter">
												<h6>Poetry</h6>
                                	       	</div>
                                		</div>
									</div>

									<!-- Interests Item -->
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
                                    	 	<i class="fas fa-book"></i>
                                     		<div class="desc-inter">
												<h6>Books</h6>
                                    	   	</div>
                                		</div>
									</div>

                  <!-- Interests Item -->
                  <div class="col-lg-3 col-sm-6">
                    <div class="inter-icon">
                                        <i class="fas fa-route"></i>
                                        <div class="desc-inter">
                        <h6>Travelling</h6>
                                          </div>
                                    </div>
                  </div>

									<!-- Interests Item -->
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
        	                             	<i class="fas fa-camera-retro"></i>
            	                         	<div class="desc-inter">
												<h6>Photography</h6>
                    	                   	</div>
                        	        	</div>
									</div>
								</div>
							</div>
						</div>
					</div>
        </br></br></br>

			  	</section>
         	</div>

			<!-- Resume Section -->
          	<div class="page pt-resume" data-simplebar>
            	<section class="container">

					<!-- Section Title -->
					<div class="header-page mt-70 mob-mt">
						<h2>Resume</h2>
    					<span></span>
					</div>
          <!-- Service Row Start -->
          <div class="row mt-100">

              </div>


              <div class="row mt-100 mb-60">

                <!-- Header Block -->
                <div class="col-md-12">
                  <div class="header-box mb-90">
                    <h3>Services Offered</h3>
                  </div>
                </div>

                <!-- Price Item -->
                <div class="col-lg-4 col-sm-12">
                  <div class="price box-1">
                    <div class="head-price">

                      <h4>Growth Hacking</h4>
                    </div>
                    <div class="body-price">

                      <div class="list-price">
                    </br> I use innovative design and behavioral data to drive result-driven campaigns.I optimise the campaigns to not just have exclusive but inclusive growth. </br></br>

                        I working on scaling up in terms of Growth, customer engagement, customer life cycle using medium of Cotent Marketing, Search Engine Optimisation, Digital Marketing, Influencer Marekting, Product Optimisation et al.</p>
                        </div>

                    </div>

                  </div>
                </div>

                <!-- Price Item -->
                <div class="col-lg-4 col-sm-12">
                  <div class="price box-1">
                    <div class="head-price">

                      <h4>Product Consulting</h4>
                    </div>
                    <div class="body-price">
                    <div class="list-price">
                    </br>    Often when we translate ideas into products we face multiple roadblocks along the way, from structure to design to data collection and at times actual ground level execution. </br></br>

                        As a consultant i make it all possible, from a road map to execution planning, Stratergic Support to making the product scrum, UI/UX guidelines, Consuption Pttern Matrix, Product Architecture and more.</p>

                    </div>

                  </div>
                </div>
                </div>

                <!-- Price Item -->
                <div class="col-lg-4 col-sm-12">
                  <div class="price box-1">
                    <div class="head-price">

                      <h4>Training And Development</h4>
                    </div>
                    <div class="body-price">

                      <div class="list-price">
                </br>     I have conducted workshops on Design Thinking, Business Communication, & Growth Hacking. My core workshops happen with colleges, I have done on campuses of JIMS, IIT Delhi, Delhi University and more. I also conduct open workshop for entrepreneurs focusing on advanced learning.</p></br>
                        </div>
                        <a href="vst/new/workshops.pdf" class="btn-st">Download Profile</a> </br></br></br>

                    </div>

                  </div>
                </div>
              </div>


					<!-- Skills Row Start -->
					<div class="row mt-100">

						<!-- Header Block -->
						<div class="col-md-12">
							<div class="header-box mb-50">
								<h3>Skills</h3>
							</div>
						</div>
					</div>

					<div class="box-1 skills">
						<div class="row">
							<div class="col-lg-6 col-sm-6">

								<!-- Skill Item -->
								<div class="skill-item">
									<h4 class="progress-title">Product Design</h4>
									<div class="progress">
										<div class="progress-bar" style="width:80%">
											<div class="progress-value">80%</div>
										</div>
									</div>
								</div>

								<!-- Skill Item -->
								<div class="skill-item">
									<h4 class="progress-title">Design Thinking</h4>
									<div class="progress">
										<div class="progress-bar" style="width:85%">
											<div class="progress-value">85%</div>
										</div>
									</div>
								</div>

								<!-- Skill Item -->
								<div class="skill-item">
									<h4 class="progress-title">Brand Identity Design</h4>
									<div class="progress">
										<div class="progress-bar" style="width:75%">
											<div class="progress-value">75%</div>
										</div>
									</div>
								</div>

								<!-- Skill Item -->
								<div class="skill-item">
									<h4 class="progress-title">Influencr Marketing</h4>
									<div class="progress">
										<div class="progress-bar" style="width:80%">
											<div class="progress-value">80%</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
								<div class="row">

									<!-- Skill Item -->
									<div class="col-lg-6 col-sm-6">
										<div class="chart" data-percent="60" data-bar-color="#fff"> 60% <p>Machine Learning</p></div>
									</div>

									<!-- Skill Item -->
									<div class="col-lg-6 col-sm-6">
										<div class="chart" data-percent="70" data-bar-color="#fff"> 70% <p>Community Building</p></div>
									</div>

									<!-- Skill Item -->
									<div class="col-lg-6 col-sm-6">
										<div class="chart" data-percent="80" data-bar-color="#fff"> 80% <p>Growth Hacking</p></div>
									</div>

									<!-- Skill Item -->
									<div class="col-lg-6 col-sm-6">
										<div class="chart" data-percent="90" data-bar-color="#fff"> 90% <p>Marketing</p></div>
									</div>
								</div>
							</div>
						</div>
					</div>
        </br> </br> </br>

					<!-- Work Process Row Start -->

			  	</section>
         	</div>

			<!-- Portfolio Section -->
          	<div class="page pt-portfolio" data-simplebar>
            	<section class="container">

					<!-- Section Title -->
					<div class="header-page mt-70 mob-mt">
						<h2>Portfolio</h2>
    					<span></span>
					</div>

					<!-- Portfolio Filter Row Start -->
					<div class="row mt-100">
						<div class="col-lg-12 col-sm-12 portfolio-filter">
							<ul>
								<li class="active" data-filter="*">All</li>
								<li data-filter=".product">Product Design</li>
								<li data-filter=".growth">Growth Hacking</li>
								<li data-filter=".consulting">Consulting</li>
							</ul>
						</div>
					</div>

					<!-- Portfolio Item Row Start -->
					<div class="row portfolio-items mt-100 mb-100">

						<!-- Portfolio Item -->
						<div class="item col-lg-4 col-sm-6 product growth">
							<figure>
								<img alt="" src="img/portfolio/bells.jpg">
								<figcaption>
									<h3>15 Bells</h3>
									<p>Product Design and Growth Hacking</p>
                  <a class="image-link" href="img/portfolio/bells.jpg"></a>
								</figcaption>
							</figure>
						</div>
            <!-- Portfolio Item -->
            <div class="item col-lg-4 col-sm-6 product consulting">
							<figure>
								<img alt="" src="img/portfolio/cyware.jpg">
								<figcaption>
									<h3>Cyware</h3>
									<p>Product Design and Consulting</p>
                  <a class="image-link" href="img/portfolio/cyware.jpg"></a>
								</figcaption>
							</figure>
						</div>
            <!-- Portfolio Item -->
            <div class="item col-lg-4 col-sm-6 product consulting">
							<figure>
								<img alt="" src="img/portfolio/iifw.jpg">
								<figcaption>
									<h3>India Intimate Fashion Week</h3>
									<p>Product Design and Consulting</p>
                  <a class="image-link" href="img/portfolio/iifw.jpg"></a>
								</figcaption>
							</figure>
						</div>
            <!-- Portfolio Item -->
            <div class="item col-lg-4 col-sm-6 product">
              <figure>
                <img alt="" src="img/portfolio/info-leap.jpg">
                <figcaption>
                  <h3>Info Leap</h3>
                  <p>Product Design</p>
                  <a class="image-link" href="img/portfolio/info-leap.jpg"></a>
                </figcaption>
              </figure>
            </div>
            <!-- Portfolio Item -->
            <div class="item col-lg-4 col-sm-6 product consulting">
							<figure>
								<img alt="" src="img/portfolio/nexus.jpg">
								<figcaption>
									<h3>Nexus Circle</h3>
									<p>Product Design and Consulting</p>
                  <a class="image-link" href="img/portfolio/nexus.jpg"></a>
								</figcaption>
							</figure>
						</div>
            <!-- Portfolio Item -->
            <div class="item col-lg-4 col-sm-6 consulting">
							<figure>
								<img alt="" src="img/portfolio/w1.png">
								<figcaption>
									<h3>Braaga</h3>
									<p>Consulting</p>
                  <a class="image-link" href="img/portfolio/w1.png"></a>
								</figcaption>
							</figure>
						</div>
            <!-- Portfolio Item -->
            <div class="item col-lg-4 col-sm-6 growth consulting">
							<figure>
								<img alt="" src="img/portfolio/w2.png">
								<figcaption>
									<h3>SodaPopLove</h3>
									<p>Consulting and Growth Hacking</p>
                  <a class="image-link" href="img/portfolio/w2.png"></a>
								</figcaption>
							</figure>
						</div>
            <!-- Portfolio Item -->
            <div class="item col-lg-4 col-sm-6 product consulting">
							<figure>
								<img alt="" src="img/portfolio/ym.png">
								<figcaption>
									<h3>Youth Manifesto for Congress Candidate</h3>
									<p>Product Design and Consulting</p>
                  <a class="image-link" href="img/portfolio/ym.png"></a>

								</figcaption>
							</figure>
						</div>





				</section>
       	   	</div>

			 <!-- Blog Section -->
          	<div class="page pt-blog" data-simplebar>
            	<section class="container">

					<!-- Section Title -->
             		<div class="header-page mt-70 mob-mt">
						<h2>Blog</h2>
    					<span></span>
					</div>

					<!-- Blog Row Start -->
					<div class="row blog-masonry mt-100 mb-50">
					<?php
						$body = Unirest\Request\Body::json($data);
						$response = Unirest\Request::get('https://vasishtachary.com/blog/wp-json/wp/v2/posts', $headers, $body);
						$response->code;
						if($response->code == 200){
							$posts = $response->body;
							$count = 0;
							foreach ($posts as $post){
								$count ++;
								if($count>=7){break;}
						?>
						<!-- Blog Item -->
						<div class="col-lg-4 col-sm-6">
							<div class="blog-item">
								<div class="thumbnail">
								<?php
								$image = "";
								if($post->better_featured_image){
									$image = $post->better_featured_image->source_url;
								}?>
									<a href="<?=$post->link?>"><img alt="<?=json_encode($post->title->rendered)?>" src="<?=$image?>"></a>
								</div>
								<h4><a href="<?=$post->link?>"><?=$post->title->rendered?></a></h4>
								<ul>
                            		<?php if($categories_fetched){
									$post_categories = array();
									foreach($post->categories as $cat){ ?>
										<li><a href="#"><a class="category_name" href="<?=$categories[$cat]['link']?>">
											<?=$categories[$cat]['name']?>
										</a></a></li><!-- Category -->
									<?php }
								}?>
                            	</ul>
								<p><?=$post->excerpt->rendered?></p>
								<div class="blog-btn">
									<a href="<?=$post->link?>" class="btn-st">Read More</a>
								</div>
							</div>
						</div>
						<?php }
						} ?>
					</div>
            	</section>
			</div>


        </div>
      	</div>
    	</div>
  		</div>
		</div>
		</div>

		<!-- All Script -->
		<script src="js/jquery.min.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/simplebar.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.animatedheadline.min.js"></script>
		<script src="js/jquery.easypiechart.js"></script>
		<script src="js/jquery.validation.js"></script>
		<script src="js/tilt.js"></script>
        <script src="js/main.js"></script>
		<script src="js/main-demo.js"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=false"></script>

		<!-- Page Script -->
		<script src="js/vide.js"></script>

    </body>

<!-- Mirrored from baha.malyarchuk.space/index-html-video.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 21:58:42 GMT -->
</html>
