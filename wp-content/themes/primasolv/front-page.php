<?php get_header(); ?>

<main>
<?php
          $loop = new WP_Query( array(
              'post_type' => 'sliders',
              'posts_per_page' => -1
            )
          );
          ?>
<!-- Frontpage Slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php $i=0; while ( $loop->have_posts() ) : $loop->the_post(); ?>
 <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0) echo 'active'; ?>"></li>

<?php $i++; endwhile; wp_reset_query(); ?>     
    </ol>
    <div class="carousel-inner">
      <?php $i=0; while ( $loop->have_posts() ) : $loop->the_post(); ?>

  <div class="carousel-item <?php if($i==0) echo 'active'; ?>">
        <img class="d-block w-100" src="<?php echo get_field('slider_image'); ?>" alt="First slide">
      </div>
<?php $i++; endwhile; wp_reset_query(); ?>  
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<div class="clearfix"></div>
	
  <div id="accordion">
      <ul>
      <li>
      <h1><?php echo get_field("section_1_title"); ?></h1>      
          <div class="panel-body"> 
            <section class=" align-items-center d-flex align-items-center">
              
            <section class="d-flex align-items-center">
                <img src="<?php echo get_field('section_1_image'); ?>" class="d-inline" alt="">
                <section>
                <h4> <?php echo get_field("section_1_title"); ?></h4>
              <?php echo get_field("section_1_content"); ?>
           
              </section>
            </section>  
          </section>  
          </div>
      </li>
      <li>
         <h1><?php echo get_field("section_2_title"); ?></h1>      
          <div class="panel-body"> 
            <section class=" align-items-center d-flex align-items-center">
              
            <section class="d-flex align-items-center">
                <img src="<?php echo get_field('section_2_image'); ?>" class="d-inline" alt="">
                <section>
                <h4> <?php echo get_field("section_2_title"); ?></h4>
              <?php echo get_field("section_2_content"); ?>
           
              </section>
            </section>  
          </section>  
          </div>
          </li>
      <li>
       <h1><?php echo get_field("section_3_title"); ?></h1>      
          <div class="panel-body"> 
            <section class=" align-items-center d-flex align-items-center">
              
            <section class="d-flex align-items-center">
                <img src="<?php echo get_field('section_3_image'); ?>" class="d-inline" alt="">
                <section>
                <h4> <?php echo get_field("section_3_title"); ?></h4>
              <?php echo get_field("section_3_content"); ?>
              
              </section>
            </section>  
          </section>  
          </div>
      </li>
      <li>
      <h1><?php echo get_field("section_4_title"); ?></h1>      
          <div class="panel-body"> 
            <section class=" align-items-center d-flex align-items-center">
              
            <section class="d-flex align-items-center">
                <img src="<?php echo get_field('section_4_image'); ?>" class="d-inline" alt="">
                <section>
                <h4> <?php echo get_field("section_4_title"); ?></h4>
              <?php echo get_field("section_4_content"); ?>
            
              </section>
            </section>  
          </section>  
          </div>
      </li>
      </ul>
      </div> 

	
      <div class="clearfix"></div>


        <div class="container main_sec">
      <div class="row">
        <div class="col-md-12">
          <h3 class="mb-3 mt-3 head_secondary text-center mb-5"><span>PrimaSolv</span> Delivery Process</h3>
        <ul class="delivery-process_list">
          <li>Infrastructure Provisioning</li>
          <li>Configuration Management</li>
          <li>Continuous Integration</li>
          <li>Deployment Orchestration</li>
          <li>Monitor & Alert</li>
        </ul>
      </div>
      </div>
    </div>  
<div class="main_sec bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-xs-12">
              <div class="item">
                <figure class="image-box">
                  <img src="<?php echo get_field("about_primasolv_image"); ?>" alt="" class="img-responsive">
                </figure>
              </div>
            </div>
      
       <div class="col-md-6 col-xs-12">
              <div class="item clearfix">
                <div class="sec-title">
                  <h2 class="main_head"> <span>About PrimaSolv</span></h2>
                </div>
                <div class="content-box"><?php echo get_field("about_primasolv__content"); ?>                
                </div>
              </div>
        </div>
      
            
        </div>
    </div>
</div>




  
<?php
          $loop = new WP_Query( array(
              'post_type' => 'testmonials',
              'posts_per_page' => -1
            )
          );
          ?>



<!-- Testimonial Slider -->
<!--
<div class="container main_sec">
  <div class="row justify-content-center pb-5">
  <div class="col-md-8">
      <h3 class="mb-3 mt-3 main_head text-center">Testimonials</h3>
    <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <?php $i=0; while ( $loop->have_posts() ) : $loop->the_post(); ?>

                 <div class="carousel-item <?php if($i==0) echo 'active'; ?>">
                    <div class="tsm_user text-center">
                      <div class="tsm_user_img mr-auto">
                        <img src="<?php echo get_field('client_image'); ?>" alt="">
                      </div>
                      <p><strong> <?php  the_title(); ?></strong></p>
                    </div>
                   <div class="text-center"><?php  the_content(); ?></div>
                </div>

        <?php $i++; endwhile; wp_reset_query(); ?>   
      </div>
      <a class="carousel-control-prev" href="#testimonial_slider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#testimonial_slider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
</div> -->
<!-- end test -->
<?php
          $loop = new WP_Query( array(
              'post_type' => 'clients',
              'posts_per_page' => -1
            )
          );
          ?>
<div class="main_sec bg-white container-fluid">
    <div class="row align-items-center">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <h3 class="mb-3 mt-3 main_head pl-5">PrimaSolv <span>Clients</span></h3>
            
        </div>
       <div class="col-md-9 col-xs-12">
            <!-- Top content -->
            <div id="clients-slider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                   <?php $i=0; while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <li data-target="#clients-slider" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0) echo 'active'; ?>"></li>
<?php $i++; endwhile; wp_reset_query(); ?> 
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                      <div class="row">
                          <?php $i=0; while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center"><img src="<?php echo get_field('client_logo'); ?>" alt=""></div>
                     <?php $i++; endwhile; wp_reset_query(); ?> 
                    </div>
                  </div>
                  <div class="carousel-item">
                        <div class="row">
                          <?php $i=0; while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center"><img src="<?php echo get_field('client_logo'); ?>" alt=""></div>
                     <?php $i++; endwhile; wp_reset_query(); ?> 
                      </div>
                    </div>
                </div>
               
                <a class="carousel-control-prev" href="#clients-slider" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#clients-slider" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
    </div>
</div>

</main>
<!-- Main Content - end -->
<?php get_footer(); ?>