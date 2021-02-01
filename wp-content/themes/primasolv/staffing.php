<?php
/*
template Name: Staffing
*/
 get_header(); ?>

<style>
.wide-tb-100  
  {
    padding-top: 0px;
    padding-bottom: 30px;
  }
  
  .services p {
    font-size: 14px;
    margin-bottom: 0;
   color: #18202E;
  }
  
  .icon-box-4{
    text-align: center;
    box-shadow: 0px 0px 57px 0px rgba(0, 0, 0, 0.05);
    padding: 2rem 1.25rem;
    position: relative;
    cursor: pointer;
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
                    
                <div class="col-md-8 wow fadeInLeft services" data-wow-duration="0" data-wow-delay="0s">            
                        <h4 class="mb-3">Staffing </span></h4>
      
                       <?php echo get_field('staffing_content'); ?>
                  
                </div>
      
      
                <div class="col-md-4 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">            
                  <img src="<?php echo get_field('staffing__image'); ?>" alt="">
                </div>
      
              </div>
              
            </div>
          </section>
          <!-- What Makes Us Special End -->

        </div>

</main>
<!-- Main Content - end -->

<?php get_footer(); ?>