<?php
/*
template Name: Vision & Mission
*/
 get_header(); ?>



<!-- Breadcrumbs -->
<div class="b-crumbs-wrap">
        <div class="container b-crumbs">
            <ul>
                <li>
                    <a href="<?php echo site_url(''); ?>">PrimaSolv</a>
                </li>
                <li>
                    <span><?php  the_title(); ?></span>
                </li>
            </ul>
        </div>
    </div>

<!-- Main Content - start -->
<main>

          <!-- Mission & Vision Start -->
 <section class="mv">
      <div class="container">
        <div class="row">
          
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="mv-post">
              <div class="mv-post-image">
                <div class="mv-overlay"></div>  
                <div class="mv-category"><a href="#">Our Vision</a></div> 
                <img src="<?php echo get_field('vision_image'); ?>" alt="Image" class="img-responsive">
              </div>
              <div class="mv-post-text" style="height: 200px;">
              
               <?php echo get_field('vision_content'); ?>
              </div>
              
            </div>
          </div>
          
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="mv-post">
              <div class="mv-post-image">
                <div class="mv-overlay"></div>  
                <div class="mv-category"><a href="#">Our Mission</a></div>  
                <img src="<?php echo get_field('mission_image'); ?>" alt="Image" class="img-responsive">
              </div>
              <div class="mv-post-text" style="height: 200px;">
             
                 <?php echo get_field('mission_content'); ?>
              </div>
              
            </div>
          </div>
        </div>  
      </div>  
    </section>
    
          <!-- Mission & Vision End -->
            
  <!-- Our Value Start -->
  
  <div class="ourvalues_sec bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-xs-12">
              <div class="item clearfix">
                
                <div class="content-box">
                  <div class="col-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">              
                        <div class="icon-box-3 mb-5 bg-sky-blue " >
                          <div class="media">
                              <div class="ourvalues media-body"><?php echo get_field('our_values'); ?>
                              </div>
                          </div>
                        </div>              
                      </div>
       
                            <div class="item">
                <figure class="image-box">
                  <img src="<?php echo get_field('our_values_image'); ?>" alt="" class="img-responsive">
                </figure>
              </div>
                  
                </div>
              </div>
        
            </div>
      
       <div class="col-md-6 col-xs-12">
              <div class="item clearfix">
                
              <div class="content-box">
                  <div class="col-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">              
                        <div class="icon-box-3  bg-sky-blue">
                          <div class="media">
                              <div class="ourvalues-icon mr-5">
                                  <img src="<?php echo get_field('our_values_content')['hardwork_image']; ?>"/>
                              </div>
                              <div class="service-inner-content media-body">
                                 <?php echo get_field('our_values_content')['Hard work']; ?>
                              </div>
                          </div>
                        </div>              
                      </div>
                  <div class="col-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">              
                        <div class="icon-box-3  bg-sky-blue">
                          <div class="media">
                              <div class="ourvalues-icon mr-5">
                                  <img src="<?php echo get_field('our_values_content')['teamwork_image']; ?>"/>
                              </div>
                              <div class="service-inner-content media-body">
                                  <?php echo get_field('our_values_content')['teamwork']; ?>
                              </div>
                          </div>
                        </div>              
                      </div>
                  <div class="col-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">              
                        <div class="icon-box-3  bg-sky-blue">
                          <div class="media">
                              <div class="ourvalues-icon mr-5">
                                  <img src="<?php echo get_field('our_values_content')['customer_focus_image']; ?>"/>
                              </div>
                              <div class="service-inner-content media-body">
                                  <?php echo get_field('our_values_content')['customer_focus']; ?>
                              </div>
                          </div>
                        </div>              
                      </div>
                      <div class="col-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">              
                      <div class="icon-box-3  bg-sky-blue">
                        <div class="media">
                            <div class="ourvalues-icon mr-5">
                                <img src="<?php echo get_field('our_values_content')['innovativeness_image']; ?>"/>
                            </div>
                            <div class="service-inner-content media-body">
                               <?php echo get_field('our_values_content')['innovativeness']; ?>
                            </div>
                        </div>
                      </div>              
                      </div>
                  <div class="col-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">              
                  <div class="icon-box-3  bg-sky-blue">
                    <div class="media">
                        <div class="ourvalues-icon mr-5">
                             <img src="<?php echo get_field('our_values_content')['quality_image']; ?>"/>
                        </div>
                        <div class="service-inner-content media-body">
                          <?php echo get_field('our_values_content')['quality']; ?>
                        </div>
                    </div>
                  </div>              
                  </div>
                  
                </div>
              </div>
        
            </div>
      
            
        </div>
    </div>
</div>
  
  <!--end of our value-->
            
        



</main>
<!-- Main Content - end -->

<?php get_footer(); ?>