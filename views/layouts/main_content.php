
      <!-- Main Content -->
      <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper" style="background-image: url('<?php echo base_url(); ?>assest_html/images/background.png')">
          <!-- Subpages -->
          <div class="subpages">

            <!-- Home Subpage -->
            <section class="pt-page pt-page-1 section-without-bg section-paddings-0 table" data-id="home">
              <div class="section-inner">
                <div class="home-page-block">
                  <h2><?php echo $about_me->first_name . ' ' . $about_me->last_name; ?></h2>
                  <div class="owl-carousel text-rotation">                                    
                    <div class="item">
                      <p class="home-page-description"> <?php echo $about_me->job; ?></p>
                    </div>
                    <div class="item">
                      <p class="home-page-description"> <?php echo $about_me->role; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- End of Home Subpage -->

		
            <!-- About Me Subpage -->
            <section class="pt-page pt-page-2" data-id="about_me">
              <div class="border-block-top-110"></div>
              <div class="section-inner">
                <div class="section-title-block">
                  <div class="section-title-wrapper clearfix">
                    <h2 class="section-title">About Me</h2>
                    <h5 class="section-description"> <?php echo $about_me->role; ?></h5>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-4 subpage-block">
                    <div class="my-photo-block tilt-effect">
             
<img src="<?php echo base_url('uploads/profile_photos/' . $about_me->profile_image); ?>" alt="User Photo">



                    </div>
                  </div>

                  <div class="col-sm-6 col-md-6 col-lg-4">
                    <h3><?php echo $about_me->job;?></h3>
                    <p><?php echo $about_me->about_desc;?></p>
                  </div>

                  <div class="col-sm-6 col-md-6 col-lg-4 subpage-block">
                    <ul class="info-list">
                      <li><span class="title">Age</span><span class="value"> <?php echo $about_me->age;?></span></li>
                      <li><span class="title">Residence</span><span class="value"><?php echo $about_me->residence; ?></span></li>
					    <li><span class="title">Address</span><span class="value"><?php echo $about_me->address; ?></span></li>
						  <li><span class="title">E-mail</span><span class="value"><?php echo $about_me->email; ?></span></li>
						    <li><span class="title">Phone</span><span class="value"><?php echo $about_me->phone; ?></span></li>
							  <li><span class="title">Skype</span><span class="value"><?php echo $about_me->social_media; ?></span></li>
							    <li><span class="title">Freelance</span><span class="value"><?php echo $about_me->availability; ?></span></li>
                    </ul>

                    <ul class="social-links">
                      <li><a class="tip social-button" href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li> <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
                      <li><a class="tip social-button" href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                      <li><a class="tip social-button" href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                      <li><a class="tip social-button" href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                      <li><a class="tip social-button" href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                      <!--<li><a class="tip social-button" href="#" title="last.fm"><i class="fa fa-lastfm"></i></a></li>-->
                      <!--<li><a class="tip social-button" href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>-->
                    </ul>
                  </div>
                </div>

                <!-- Services block -->
                <div class="block-title">
                  <h3>Services</h3>
                </div>

                <div class="row">
                  <div class="col-sm-6 col-md-3 subpage-block">
                    <div class="service-block"> 
                      <div c66lass="service-info">
					   <img src="<?php echo base_url(); ?>assest_html/images/service/web_design_icon.png" alt="">
                        <h4>Web Design</h4>
                        <p>Lorem ipsum dolor s664it amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-3 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
					   <img src="<?php echo base_url(); ?>assest_html/images/service/photography_icon.png" alt="Photography">
                        <h4>Photography</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-3 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
					  <img src="<?php echo base_url(); ?>assest_html/images/service/creativity_icon.png" alt="Creativity">
                        <h4>Creativity</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-3 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
					  <img src="<?php echo base_url(); ?>assest_html/images/service/advetising_icon.png" alt="Advetising">
                        <h4>Advertising</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End of Services block -->

                <!-- Clients block -->
                <div class="block-title">
                  <h3>Clients</h3>
                </div>

                <div class="row">
                  <div class="col-sm-4 col-md-2 subpage-block">
                    <div class="client-block">
					<img src="<?php echo base_url(); ?>assest_html/images/clients/client_1.png" alt="image">
                    </div>
                  </div>

                  <div class="col-sm-4 col-md-2 subpage-block">
                    <div class="client-block">
						<img src="<?php echo base_url(); ?>assest_html/images/clients/client_2.png" alt="image">
                    </div>
                  </div>

                  <div class="col-sm-4 col-md-2 subpage-block">
                    <div class="client-block">
    	<img src="<?php echo base_url(); ?>assest_html/images/clients/client_3.png" alt="image">
                    </div>
                  </div>

                  <div class="col-sm-4 col-md-2 subpage-block">
                    <div class="client-block">
                  	<img src="<?php echo base_url(); ?>assest_html/images/clients/client_4.png" alt="image">
                    </div>
                  </div>

                  <div class="col-sm-4 col-md-2 subpage-block">
                    <div class="client-block">
   	<img src="<?php echo base_url(); ?>assest_html/images/clients/client_5.png" alt="image">
                    </div>
                  </div>

                  <div class="col-sm-4 col-md-2 subpage-block">
                    <div class="client-block">
                      	<img src="<?php echo base_url(); ?>assest_html/images/clients/client_6.png" alt="image">
                    </div>
                  </div>
                </div>
                <!-- End of Clients block -->

                <div class="row">
                  <div class="col-sm-12 col-md-12 subpage-block">
                    <div class="block-title">
                      <h3>Testimonials</h3>
                    </div>
                    <div class="testimonials owl-carousel">
                      <!-- Testimonial 1 -->
                      <div class="testimonial-item">
                        <!-- Testimonial Content -->
                        <div class="testimonial-content">
                          <div class="testimonial-text">
                            <p>"Phasellus eu nunc tincidunt, ultricies elit vitae, pretium eros. Sed sed ipsum sed massa."</p>
                          </div>
                        </div>            
                        <!-- /Testimonial Content -->  
                        <!-- Testimonial Author -->
                        <div class="testimonial-credits">
                          <!-- Picture -->
                          <div class="testimonial-picture"> 
							<img src="<?php echo base_url(); ?>assest_html/images/testimonials/testimonial_photo_1.jpg" alt="image">
                          </div>              
                          <!-- /Picture -->
                          <!-- Testimonial author information -->
                          <div class="testimonial-author-info">
                            <p class="testimonial-author">Maria Richardson</p>
                            <p class="testimonial-firm">Lindsley's Lumber</p>
                          </div>
                        </div>
                        <!-- /Testimonial author information -->               
                      </div>
                      <!-- End of Testimonial 1 -->

                      <!-- Testimonial 2 -->
                      <div class="testimonial-item">
                        <!-- Testimonial Content -->
                        <div class="testimonial-content">
                          <div class="testimonial-text">
                            <p>"Vivamus porta dapibus tristique. Suspendisse et arcu eget nisi convallis eleifend nec ac lorem."</p>
                          </div>
                        </div>            
                        <!-- /Testimonial Content -->  
                        <!-- Testimonial Author -->
                        <div class="testimonial-credits">
                          <!-- Picture -->
                          <div class="testimonial-picture">
						  	<img src="<?php echo base_url(); ?>assest_html/images/testimonials/testimonial_photo_2.jpg" alt="image">
                          </div>              
                          <!-- /Picture -->
                          <!-- Testimonial author information -->
                          <div class="testimonial-author-info">
                            <p class="testimonial-author">John Doe</p>
                            <p class="testimonial-firm">Apple Inc.</p>
                          </div>
                        </div>
                        <!-- /Testimonial author information -->               
                      </div>
                      <!-- End of Testimonial 2 -->

                      <!-- Testimonial 3 -->
                      <div class="testimonial-item">
                        <!-- Testimonial Content -->
                        <div class="testimonial-content">
                          <div class="testimonial-text">
                            <p>"Aliquam congue auctor lectus sed fermentum. Nulla ultricies tellus quis sapien lacinia egestas."</p>
                          </div>
                        </div>            
                        <!-- /Testimonial Content -->  
                        <!-- Testimonial Author -->
                        <div class="testimonial-credits">
                          <!-- Picture -->
                          <div class="testimonial-picture">
						  	<img src="<?php echo base_url(); ?>assest_html/images/testimonials/testimonial_photo_3.jpg" alt="image">
                          </div>              
                          <!-- /Picture -->
                          <!-- Testimonial author information -->
                          <div class="testimonial-author-info">
                            <p class="testimonial-author">George McQueen</p>
                            <p class="testimonial-firm">Harmony House</p>
                          </div>
                        </div>
                        <!-- /Testimonial author information -->               
                      </div>
                      <!-- End of Testimonial 3 -->
                    </div>
                  </div>
                </div>

                <!-- Fun facts block -->
                <div class="block-title">
                  <h3>Fun Facts</h3>
                </div>

                <div class="row">
                  <div class="col-sm-6 col-md-3 subpage-block">
                    <div class="fun-fact-block gray-bg tilt-effect">
                      <i class="pe-7s-icon pe-7s-smile"></i>
                      <h4>Happy Clients</h4>
                      <span class="fun-value">1,024</span>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-3 subpage-block tilt-effect">
                    <div class="fun-fact-block">
                      <i class="pe-7s-icon pe-7s-alarm"></i>
                      <h4>Working Hours</h4>
                      <span class="fun-value">6,256</span>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-3 subpage-block tilt-effect">
                    <div class="fun-fact-block gray-bg">
                      <i class="pe-7s-icon pe-7s-medal"></i>
                      <h4>Awards Won</h4>
                      <span class="fun-value">21</span>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-3 subpage-block tilt-effect">
                    <div class="fun-fact-block">
                      <i class="pe-7s-icon pe-7s-coffee"></i>
                      <h4>Coffee Consumed</h4>
                      <span class="fun-value">20,000</span>
                    </div>
                  </div>
                </div>
                <!-- End of Fun fucts block -->
              </div>
            </section>
            <!-- End of About Me Subpage -->

            <!-- Resume Subpage -->
            <section class="pt-page pt-page-3" data-id="resume">
              <div class="border-block-top-110"></div>
              <div class="section-inner">
                <div class="section-title-block">
                  <div class="section-title-wrapper">
                    <h2 class="section-title">Resume</h2>
                    <h5 class="section-description">6 Years of Experience</h5>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6 col-md-4 subpage-block">
                    <div class="block-title">
                      <h3>Education</h3>
                    </div>
                    <div class="timeline">
                      <!-- Single event -->
                      <div class="timeline-event te-primary">
                        <h5 class="event-date"><?php echo $resume->education_year; ?></h5>
                        <h4 class="event-name"><?php echo $resume->education_course; ?></h4>
                        <span class="event-description"><?php echo $resume->education_university; ?></span>
                        <p><?php echo $resume->education_description; ?></p>
                      </div>
                      <!-- Single event -->
                      <div class="timeline-event te-primary">
                        <h5 class="event-date">2009</h5>
                        <h4 class="event-name">Specialization Course</h4>
                        <span class="event-description">University of Studies</span>
                        <p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p>
                      </div>
                      <!-- Single event -->
                      <div class="timeline-event te-primary">
                        <h5 class="event-date">2008</h5>
                        <h4 class="event-name">Specialization Course</h4>
                        <span class="event-description">University of Studies</span>
                        <p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-4 subpage-block">
                    <div class="block-title">
                      <h3>Experience</h3>
                    </div>
                    <div class="timeline">
                      <!-- Single event -->
                      <div class="timeline-event te-primary">
                        <h5 class="event-date"><?php echo $resume->experience_start; ?></h5>
                        <h4 class="event-name"><?php echo $resume->experience_position; ?></h4>
                        <span class="event-description"><?php echo $resume->experience_company; ?></span>
                        <p><?php echo $resume->experience_description; ?></p>
                      </div>
                      <!-- Single event -->
                      <div class="timeline-event te-primary">
                        <h5 class="event-date">Dec 2011 - Nov 2012</h5>
                        <h4 class="event-name">Web Designer</h4>
                        <span class="event-description">Apple Inc.</span>
                        <p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p>
                      </div>
                      <!-- Single event -->
                      <div class="timeline-event te-primary">
                        <h5 class="event-date">Jan 2010 - Dec 2011</h5>
                        <h4 class="event-name">Graphic Designer</h4>
                        <span class="event-description">Web Agency</span>
                        <p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-4 subpage-block">
                    <div class="block-title">
                      <h3>Design Skills</h3>
                    </div>
                    <div class="skills-info">
                      <h4>Web Design</h4>                               
                      <div class="skill-container">
                        <div class="skill-percentage skill-1"></div>
                      </div>

                      <h4>Graphic Design</h4>
                      <div class="skill-container">
                        <div class="skill-percentage skill-2"></div>
                      </div>

                      <h4>Print Design</h4>
                      <div class="skill-container">
                        <div class="skill-percentage skill-3"></div>
                      </div> 
                    </div>

                    <div class="block-title">
                      <h3>Coding Skills</h3>
                    </div>
                    <div class="skills-info">
                      <h4>HML5</h4>                               
                      <div class="skill-container">
                        <div class="skill-percentage skill-4"></div>
                      </div>

                      <h4>CSS3</h4>
                      <div class="skill-container">
                        <div class="skill-percentage skill-5"></div>
                      </div>

                      <h4>jQuery</h4>
                      <div class="skill-container">
                        <div class="skill-percentage skill-6"></div>
                      </div>

                      <h4>Wordpress</h4>
                      <div class="skill-container">
                        <div class="skill-percentage skill-7"></div>
                      </div>

                      <h4>PHP</h4>
                      <div class="skill-container">
                        <div class="skill-percentage skill-8"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-12">
                    <div class="download-cv-block">
                      <a class="button" target="_blank" href="#">Download CV</a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- End Resume Subpage -->


            <!-- Portfolio Subpage -->
            <section class="pt-page pt-page-4" data-id="portfolio">
              <div class="border-block-top-110"></div>
              <div class="section-inner">
                <div class="section-title-block">
                  <div class="section-title-wrapper">
                    <h2 class="section-title">Portfolio</h2>
                    <h5 class="section-description">My Best Works</h5>
                  </div>
                </div>

                <!-- Portfolio Content -->
                <div class="portfolio-content">
                              
                  <!-- Portfolio filter -->
                  <ul id="portfolio_filters" class="portfolio-filters">
                    <li class="active">
                      <a class="filter btn btn-sm btn-link active" data-group="all">All</a>
                    </li>
                    <li>
                      <a class="filter btn btn-sm btn-link" data-group="media">Media</a>
                    </li>
                    <li>
                      <a class="filter btn btn-sm btn-link" data-group="illustration">Illustration</a>
                    </li>
                    <li>
                      <a class="filter btn btn-sm btn-link" data-group="video">Video</a>
                    </li>
                  </ul>
                  <!-- End of Portfolio filter -->

                  <!-- Portfolio Grid -->
                  <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">

                    <!-- Portfolio Item 1 -->
                    <figure class="item" data-groups='["all", "media"]'>
                      <a class="ajax-page-load" href="portfolio-1.html">
							<img src="<?php echo base_url(); ?>assest_html/images/portfolio/1.jpg" alt="image">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Media</small>
                          <i class="pe-7s-icon pe-7s-display2"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 1 -->

                    <!-- Portfolio Item 2 -->
                    <figure class="item" data-groups='["all", "video"]'>
                      <a href="https://player.vimeo.com/video/97102654?autoplay=1" title="Praesent Dolor Ex" class="lightbox mfp-iframe">
							<img src="<?php echo base_url(); ?>assest_html/images/portfolio/2.jpg" alt="image">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Video</small>
                          <i class="pe-7s-icon pe-7s-video"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 2 -->

                    <!-- Portfolio Item 3 -->
                    <figure class="item" data-groups='["all","illustration"]'>
          <a href="images/portfolio/full/3.jpg" class="lightbox" title="Duis Eu Eros Viverra">
					   <!--	<img src="<?php echo base_url(); ?>assest_html/images/portfolio/full/3.jpg" alt="image"  class="lightbox" title="Duis Eu Eros Viverra">-->
							<img src="<?php echo base_url(); ?>assest_html/images/portfolio/3.jpg" alt="image">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Illustration</small>
                          <i class="pe-7s-icon pe-7s-photo"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 3 -->

                    <!-- Portfolio Item 4 -->
                    <figure class="item" data-groups='["all", "media"]'>
                      <a class="ajax-page-load" href="portfolio-2.html">
						<img src="<?php echo base_url(); ?>assest_html/images/portfolio/4.jpg" alt="image">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Media</small>
                          <i class="pe-7s-icon pe-7s-display2"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 4 -->

                    <!-- Portfolio Item 5 -->
                    <figure class="item" data-groups='["all", "illustration"]'>
                  <a href="images/portfolio/full/5.jpg" class="lightbox" title="Aliquam Condimentum Magna Rhoncus"> 
                    
						<img src="<?php echo base_url(); ?>assest_html/images/portfolio/5.jpg" alt="">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Illustration</small>
                          <i class="pe-7s-icon pe-7s-photo"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 5 -->

                    <!-- Portfolio Item 6 -->
                    <figure class="item" data-groups='["all", "media"]'>
                      <a class="ajax-page-load" href="portfolio-3.html">
						<img src="<?php echo base_url(); ?>assest_html/images/portfolio/6.jpg" alt="">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Media</small>
                          <i class="pe-7s-icon pe-7s-display2"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 6 -->

                    <!-- Portfolio Item 7 -->
                    <figure class="item" data-groups='["all", "video"]'>
                      <a href="https://player.vimeo.com/video/97102654?autoplay=1" title="Nulla Facilisi" class="lightbox mfp-iframe">
						<img src="<?php echo base_url(); ?>assest_html/images/portfolio/7.jpg" alt="">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Video</small>
                          <i class="pe-7s-icon pe-7s-video"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 7 -->

                    <!-- Portfolio Item 8 -->
                    <figure class="item" data-groups='["all",  "media"]'>
                      <a class="ajax-page-load" href="portfolio-4.html">
						<img src="<?php echo base_url(); ?>assest_html/images/portfolio/8.jpg" alt="">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Media</small>
                          <i class="pe-7s-icon pe-7s-display2"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 8 -->

                    <!-- Portfolio Item 9 -->
                    <figure class="item" data-groups='["all","illustration"]'>
                      <a href="images/portfolio/full/9.jpg" class="lightbox" title="Mauris Neque Dolor">
						<img src="<?php echo base_url(); ?>assest_html/images/portfolio/9.jpg" alt="">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Illustration</small>
                          <i class="pe-7s-icon pe-7s-photo"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 9 -->

                    <!-- Portfolio Item 10 -->
                    <figure class="item" data-groups='["all", "video"]'>
                      <a href="https://player.vimeo.com/video/97102654?autoplay=1" title="Donec Lectus Arcu" class="lightbox mfp-iframe">
						<img src="<?php echo base_url(); ?>assest_html/images/portfolio/10.jpg" alt="">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Video</small>
                          <i class="pe-7s-icon pe-7s-video"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 10 -->

                    <!-- Portfolio Item 11 -->
                    <figure class="item" data-groups='["all","illustration"]'>
                      <a href="images/portfolio/full/11.jpg" class="lightbox" title="Duis Eu Eros Viverra">
						<img src="<?php echo base_url(); ?>assest_html/images/portfolio/11.jpg" alt="">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Illustration</small>
                          <i class="pe-7s-icon pe-7s-photo"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 11 -->

                    <!-- Portfolio Item 12 -->
                    <figure class="item" data-groups='["all","media"]'>
                      <a class="ajax-page-load" href="portfolio-5.html">
						<img src="<?php echo base_url(); ?>assest_html/images/portfolio/12.jpg" alt="">
                        <div>
                          <h5 class="name">Project Name</h5>
                          <small>Media</small>
                          <i class="pe-7s-icon pe-7s-display2"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 12 -->
                  </div>
                  <!-- /Portfolio Grid -->

                </div>
                <!-- /Portfolio Content -->
              </div>
            </section>
            <!-- /Portfolio Subpage -->

            <!-- 6 Subpage -->
            <section class="pt-page pt-page-5" data-id="contact">
              <div class="border-block-top-110"></div>
              <div class="section-inner">
                <div class="section-title-block">
                  <div class="section-title-wrapper">
                    <h2 class="section-title">Contact</h2>
                    <h5 class="section-description">Get in Touch</h5>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6 col-md-6 subpage-block">
                    <div class="block-title">
                      <h3>Get in Touch</h3>
                    </div>
                    <p>I'm always open to exciting collaborations and new opportunities. Whether you have a question, a project idea, or just want to say hello — feel free to reach out. Let's create something amazing together!</p>
                    <div class="contact-info-block">
                      <div class="ci-icon">
                        <i class="pe-7s-icon pe-7s-map-marker"></i>
                      </div>
                      <div class="ci-text">
                        <h5><?php echo $about_me->residence . ' ' . $about_me->Address; ?></h5>
                      </div>
                    </div>
                    <div class="contact-info-block">
                      <div class="ci-icon">
                        <i class="pe-7s-icon pe-7s-mail"></i>
                      </div>
                      <div class="ci-text">
                        <h5><a href="https://lmpixels.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1879747d606b75716c70587d60797568747d367b7775">[email&#160;protected]</a></h5>
                      </div>
                    </div>
                    <div class="contact-info-block">
                      <div class="ci-icon">
                        <i class="pe-7s-icon pe-7s-call"></i>
                      </div>
                      <div class="ci-text">
                        <h5><?php echo $about_me->phone; ?></h5>
                      </div>
                    </div>
                    <div class="contact-info-block">
                      <div class="ci-icon">
                        <i class="pe-7s-icon pe-7s-check"></i>
                      </div>
                      <div class="ci-text">
                        <h5>Freelance Available</h5>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-6 subpage-block">
                    <div class="block-title">
                      <h3>Contact Form</h3>
                    </div>
                    <form id="contact-form" method="post" action="https://lmpixels.com/demo/unique/unique-vcard/contact_form/contact_form.php">

                      <div class="messages"></div>

                      <div class="controls">
                        <div class="form-group">
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                            <div class="form-control-border"></div>
                            <i class="form-control-icon pe-7s-user"></i>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                            <div class="form-control-border"></div>
                            <i class="form-control-icon pe-7s-mail"></i>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <textarea id="form_message" name="message" class="form-control" placeholder="Message for Me" rows="4" required="required" data-error="Please, leave me a message."></textarea>
                            <div class="form-control-border"></div>
                            <i class="form-control-icon pe-7s-comment"></i>
                            <div class="help-block with-errors"></div>
                        </div>

                        <input type="submit" class="button btn-send" value="Send message">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </section>
            <!-- End Contact Subpage -->
			
			<!-- 7 Edit Profile Subpage -->
            <section class="pt-page pt-page-6" data-id="edit-profile">
              <div class="border-block-top-110"></div>
              <div class="section-inner">
                <div class="section-title-block">
                  <div class="section-title-wrapper">
                    <h2 class="section-title">Edit Profile</h2>
                    <h5 class="section-description">Update Your Information</h5>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6 col-md-6 subpage-block">
                    <div class="block-title">
                      <h3>Update Your Profile</h3>
                    </div>
                    <form id="edit-profile-form" method="post" action="update_profile.php">
                      <div class="messages"></div>

                      <div class="controls">
                        <div class="form-group">
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" value="<?php echo $about_me->name; ?>" required="required" data-error="Name is required.">
                            <div class="form-control-border"></div>
                            <i class="form-control-icon pe-7s-user"></i>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" value="<?php echo $about_me->email; ?>" required="required" data-error="Valid email is required.">
                            <div class="form-control-border"></div>
                            <i class="form-control-icon pe-7s-mail"></i>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <input id="form_phone" type="text" name="phone" class="form-control" placeholder="Phone Number" value="<?php echo $about_me->phone; ?>" required="required" data-error="Phone number is required.">
                            <div class="form-control-border"></div>
                            <i class="form-control-icon pe-7s-call"></i>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <textarea id="form_bio" name="bio" class="form-control" placeholder="Short Bio" rows="4" required="required" data-error="Please, write a short bio."><?php echo $about_me->bio; ?></textarea>
                            <div class="form-control-border"></div>
                            <i class="form-control-icon pe-7s-comment"></i>
                            <div class="help-block with-errors"></div>
                        </div>

                        <input type="submit" class="button btn-send" value="Update Profile">
                      </div>
                    </form>
                  </div>
                </div>
			
              </div>
            </section>
            <!-- End Edit Profile Subpage -->
			
			
			<!-- E-Invoice Subpage -->
<section class="pt-page pt-page-7" data-id="e-invoice">
  <div class="border-block-top-110"></div>
  <div class="section-inner">
    <div class="section-title-block">
      <div class="section-title-wrapper">
        <h2 class="section-title">E-Invoice Generator</h2>
        <h5 class="section-description">Fill in the details to generate an e-Invoice</h5>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6 col-md-8 subpage-block">
        <div class="block-title">
          <h3>Invoice Information</h3>
        </div>
        <form id="e-invoice-form" method="post" action="<?php echo base_url('invoice/generate'); ?>">
          <div class="messages"></div>

          <div class="controls">
            <div class="form-group">
              <input type="text" name="invoice_no" class="form-control" placeholder="Invoice Number" required>
              <div class="form-control-border"></div>
            </div>

            <div class="form-group">
              <input type="text" name="client_name" class="form-control" placeholder="Client Name" required>
              <div class="form-control-border"></div>
            </div>

            <div class="form-group">
              <input type="text" name="client_email" class="form-control" placeholder="Client Email" required>
              <div class="form-control-border"></div>
            </div>

            <div class="form-group">
              <input type="text" name="service_desc" class="form-control" placeholder="Service Description" required>
              <div class="form-control-border"></div>
            </div>

            <div class="form-group">
              <input type="number" step="0.01" name="amount" class="form-control" placeholder="Amount (RM)" required>
              <div class="form-control-border"></div>
            </div>

            <input type="submit" class="button btn-send" value="Generate PDF Invoice">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- End E-Invoice Subpage -->

            <!-- 8 Logout Subpage -->
            <section class="pt-page pt-page-8" data-id="logout">
              <div class="border-block-top-110"></div>
              <div class="section-inner">
                <div class="section-title-block">
                  <div class="section-title-wrapper">
                    <h2 class="section-title">Logout</h2>
                    <h5 class="section-description">You Are About to Log Out</h5>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6 col-md-6 subpage-block">
                    <div class="block-title">
                      <h3>Are You Sure You Want to Log Out?</h3>
                    </div>
                    <p>If you are sure about logging out, please click the button below. You will be redirected to the login page.</p>
                    <div class="logout-buttons">
                      <a href=../logout.php>
                        <button class="button btn-logout">Logout</button>
                      </a>
                      <a href="home.php">
                        <button class="button btn-cancel">Cancel</button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- End Logout Subpage -->
		

          </div>
        </div>
        <!-- /Page changer wrapper -->
      </div>
      <!-- /Main Content -->
    </div>
