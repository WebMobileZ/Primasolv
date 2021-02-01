<?php
/*
template Name: Aws
*/
 get_header(); ?>



<!-- Breadcrumbs -->
<div class="b-crumbs-wrap">
        <div class="container b-crumbs">
            <ul>
                <li>
                    <a href="<?php echo site_url(''); ?> ">PrimaSolv</a>
                </li>
                <li>
                    <span>AWS Cloud Consulting</span>
                </li>
            </ul>
        </div>
    </div>
<!-- Main Content - start -->
<main>

      
        <div class="container maincont">

               

            <!-- What Makes Us Special Start -->
    <section class="wide-tb-80 pagecont p-5">
            <div class="container pos-rel">
              <div class="row align-items-center ">
                    
                <div class="col-md-8 wow fadeInLeft services" data-wow-duration="0" data-wow-delay="0s">            
                        <h4 class="mb-3">AWS Cloud Consulting</span></h4>
      
                  <?php echo get_field('aws_cloud_consulting_content'); ?>
                  
                </div>
      
      
                <div class="col-md-4 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">            
                  <img src="<?php echo get_field('aws_cloud_consulting_image'); ?>" alt="">
                </div>
      
              </div>
              
            </div>
          </section>
          <!-- What Makes Us Special End -->

        </div>

          <!-- What Makes Us Special Start -->
    <div class="ap-main_sec bg-white">
    <div class="container">
        <div class="row align-items-center">
            
      <div class="col-md-6 col-xs-12">
              <div class="item clearfix">
                <div class="content-box web-mobi1">
                  <p>
                    <div class="sec-title web-mobi1"><br>
                      <h4 class="main_head">OUR SERVICES LIST IS HUGE. TO NAME FEW…</h4><br>
                    </div>


                    <?php echo get_field('list_of_consulting'); ?>
                  
                </div>
              </div>
        
            </div>
      <div class="col-md-6 col-xs-12">
              <div class="item">
                <figure class="image-box">
                  <img src=" <?php echo get_field('list_of_consulting_image'); ?>" alt="" class="img-responsive">
                </figure>
              </div>
            </div>
      
        

    
      

        </div>
    </div>
</div>
          <!-- What Makes Us Special End -->

            
            
</main>
<!-- Main Content - end -->

<?php get_footer(); ?>