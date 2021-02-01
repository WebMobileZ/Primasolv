<?php
/*
template Name: Application Development 
*/
 get_header(); ?>

<style>
.wide-tb-100  
  {
    padding-top: 0px;
    background-color: #F17022;
  }

.Web-box-4 {
    text-align: center;
  padding: 20px;
  }
  
  .ap-main_sec {
    padding-top: 20px;
    padding-bottom: 20px;
}
  

  
</style>

<!-- Breadcrumbs -->
<div class="b-crumbs-wrap">
        <div class="container b-crumbs">
            <ul>
                <li>
                    <a href="<?php echo site_url(''); ?> ">PrimaSolv</a>
                </li>
                <li>
                     <span><?php the_title(); ?></span>
                </li>
            </ul>
        </div>
    </div>
<!-- Main Content - start -->
<main>
       
<!-- applicatin-->
	    <div class="container maincont">

            <!-- What Makes Us Special Start -->
    <section class="wide-tb-80 pagecont p-5">
            <div class="container pos-rel">
              <div class="row align-items-center ">
                    
                <div class="col-md-8 wow fadeInLeft web-mobi1" data-wow-duration="0" data-wow-delay="0s">            
                        <h4 class="mb-3">Application Development</h4>
      
                 <?php echo get_field('application_development_content'); ?>
                  
                </div>
      
      
                <div class="col-md-4 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">            
                  <img src="<?php echo get_field('application_development_image'); ?>" alt="">
                </div>
      
              </div>
              
            </div>
          </section>
          <!-- What Makes Us Special End -->

        </div>

          <!-- What Makes Us Special Start -->
    
          <!-- What Makes Us Special End -->

  <div class="ap-main_sec bg-white">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="container">
          <div class="row align-items-center mt-5 mb-5 flex-xs-revse">

			 <div class="col-md-6 col-xs-12">
							<div class="item clearfix">
								<div class="sec-title web-mobi1">
									<h4 class="main_head">Agile Methodology</h4><br>
								</div>
								<div class="content-box web-mobi1">
									  <?php echo get_field('agile_methodology'); ?><br>
               
									
								</div>
							</div>
				
						</div>
			<div class="col-md-6 col-xs-12 ">
							<div class="item">
								<figure class="image-box">
									<img src="<?php echo get_field('agile_methodology_image'); ?>" alt="" class="img-responsive">
								</figure>
							</div>
            </div>
            
            </div>
          </div>

            <div class="container">
            <div class="row align-items-center">
            
			<div class="col-md-6 col-xs-12">
        <div class="item">
          <figure class="image-box">
            <img src="<?php echo get_field('onsiteoffshore_delivery_image'); ?>" alt="" class="img-responsive">
          </figure>
        </div>
      </div>
			<div class="col-md-6 col-xs-12">
							<div class="item clearfix">
								<div class="sec-title web-mobi1">
									<h4 class="main_head">Onsite/Offshore Delivery</h4><br>
								</div>
								<div class="content-box web-mobi1">
									 <?php echo get_field('onsiteoffshore_delivery_content'); ?> 
								</div>
							</div>
				
            </div>
            
          </div>
        </div>
			
    <!--        <div class="col-md-12 abtt_blue mt-5"> <?php echo get_field('bottom_content'); ?>
</div> -->
			<div class="container">
          <div class="row align-items-center mt-5 mb-5 flex-xs-revse">

			 <div class="col-md-6 col-xs-12">
							<div class="item clearfix">
								<div class="sec-title web-mobi1">
									
								</div>
								<div class="content-box web-mobi1">
									  <?php echo get_field('bottom_content'); ?><br>
               
									
								</div>
							</div>
				
						</div>
			<div class="col-md-6 col-xs-12 ">
							<div class="item">
								<figure class="image-box">
									<img src="<?php echo get_field('bottom_mage'); ?>" alt="" class="img-responsive">
								</figure>
							</div>
            </div>
            
            </div>
          </div>

	
			
		
        </div>
    </div>
</div>          
      <!-- end -->
</main>
<!-- Main Content - end -->



<?php get_footer(); ?>