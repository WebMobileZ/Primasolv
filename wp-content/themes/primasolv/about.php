<?php
/*
template Name: About
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
                    <span>About</span>
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
                        <h4 class="mb-3">Who We Are </h4>
        <?php echo get_field("about_primasolve"); ?>
            
        
                </div>
      
      
                <div class="col-md-4 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">            
                  <img src="<?php echo get_field('about_primasolv_image'); ?>" alt="">
                </div>
      
              </div>
              
            </div>
          </section>
          <!-- What Makes Us Special End -->

        </div>



     
            
            


</main>
<!-- Main Content - end -->

<?php get_footer(); ?>