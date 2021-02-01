<?php
/*
template Name: Prima-Genx
*/
 get_header(); ?>
<style>
.wide-tb-100  
  {
    padding-top: 0px;
  }
  
  .web-mobi h4 {
    font-size: 14px;
    margin-bottom: 0;
    color: #000000;
  text-align: center;
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
                      <span><?php the_title(); ?> </span>
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
                    
                <div class="col-md-8 wow fadeInLeft web-mobi1" data-wow-duration="0" data-wow-delay="0s">            
                        <h4 class="mb-3">PrimaGenX</h4>
      
                  <?php echo get_field('primagenx_content'); ?>
      
                  
                </div>
      
      
                <div class="col-md-4 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">            
                  <img src="<?php echo get_field('primagenx_image'); ?>" alt="">
                </div>
      
              </div>
              
            </div>
          </section>
          <!-- What Makes Us Special End -->

        </div> 
<div class="ap-main_sec bg-white">
    <div class="container">
        <div class="row align-items-center">
              
      <div class="col-md-12 col-xs-12">
              <div class="item clearfix">
                <div class="sec-title web-mobi1"><br>
                  <h4 class="main_head">PrimaGenX Platform is one stop solution for all the below <br>mentioned segments.</h4>
                </div>
              </div>
        
            </div>
      <div class="col-md-6 col-xs-12">
              <div class="item clearfix">
                <div class="content-box web-mobi1"><br>
               <?php echo get_field('primagenx_platform_list'); ?><br>
               
                  
                </div>
              </div>
        <div class="sec-title web-mobi1"><br>
    <h4 class="main_head " style="color:red;">PrimaGenX Platform is integrated with two independently operated products </h4>
                </div>
          <div class="item clearfix">
                <div class="content-box web-mobi1"><br>
                  <p class="abtt_blue" style=" text-align:center;font-size:18px;">
      
• PrimaConnect+<br>
•   PrimaAnalytics+


                </p><br>
               
                  
                </div></div>
                
                
            </div>
      <div class="col-md-6 col-xs-12">
              <div class="item">
                <figure class="image-box">
                  <img src="<?php echo get_field('primagenx_platform_list_image'); ?>" alt="" class="img-responsive">
                </figure>
              </div>
            </div>
    </div>
</div>
          <!-- What Makes Us Special Start -->
    <section class="wide-tb-100 testimn_sec ">
            <div class="container pos-rel">
              <div class="row">

          <div class="container teamcount">
<div class="item clearfix">
                <div class="sec-title web-mobi1"><br>
                  <h4 class="main_head">Basically, PrimaGenX Platform comes with two Products</h4>
                </div>
              </div>
               <!-- What Makes Us Special Start -->
    <section class="bg-sky-blue pb-0 capabilities">
            
              <div class="row">
                <!-- Heading Main -->
                <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                  <h1 class="heading-main mt-4 mb-5">
                   
                  </h1>
                </div>
                <!-- Heading Main -->
      <div class="col-md-6 wow fadeInUp web-mobi text-center mb-1" data-wow-duration="0" data-wow-delay="0.6s">            
                                    <!-- Icon Box 2 -->
                                   
                                      <div class="web-box-4">
                                       <img src="<?php echo get_template_directory_uri(); ?>/images/products/p1.jpg"/>
                                        <h4 class="h4-md mb-3">PrimaConnect+</h4>
                                        
                                      </div> 
                                   
                                    <!-- Icon Box -->
                                  </div>

          <div class="col-md-6 wow fadeInUp web-mobi text-center mb-1" data-wow-duration="0" data-wow-delay="0.1s">            
                  <!-- Icon Box 2 -->
                  
                    <div class="web-box-4">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/team/network.png"/>
                      <h4 class="h4-md mb-3">PrimaAnalytics+</h4>
                      
                    </div> 
                  
                  <!-- Icon Box -->
                </div>

                    <div class="clearfix"></div>
      
              </div>
              
          </section>
        </div>
              </div>
              
            </div>
          </section>
  <div class="ap-main_sec bg-white">
    <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 col-xs-12">
            <div class="item">
              <figure class="image-box">
                <img src="<?php echo get_field('primaconnect_image'); ?>" alt="" class="img-responsive">
              </figure>
            </div>
          </div>  

      <div class="col-md-6 col-xs-12">
              <div class="item clearfix">
                  <div class="sec-title web-mobi1">
                      <h4 class="main_head">PrimaConnect+</h4>
                    </div>
                <div class="content-box web-mobi1  mt-4">
                 <?php echo get_field('primaconnect_content'); ?>
                  
                </div>
              </div>
        
            </div>
      
        </div>
    </div>
</div>
          <!-- What Makes Us Special End -->
<div class="ap-main_sec bg-white">
    <div class="container">
        <div class="row align-items-center">
              
      <div class="col-md-12 col-xs-12">
              <div class="item clearfix">
                <div class="sec-title web-mobi1"><br>
                  <h4 class="main_head">PrimaAnalytics+</h4>
                </div>
              </div>
        
            </div>
      <div class="col-md-6 col-xs-12">
              <div class="item clearfix">
                <div class="content-box web-mobi1">
                 <?php echo get_field('primaanalytics_content'); ?><br>
               
                  
                </div>
              </div>
        
            </div>
      <div class="col-md-6 col-xs-12">
              <div class="item">
                <figure class="image-box">
                  <img src="<?php echo get_field('primaanalytics_image'); ?>" alt="" class="img-responsive">
                </figure>
              </div>
            </div>
        </div>
    </div>
</div>





            
            


</main>
<!-- Main Content - end -->

<?php get_footer(); ?>