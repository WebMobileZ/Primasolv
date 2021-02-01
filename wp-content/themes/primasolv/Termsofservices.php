<?php
/*
template Name: Terms of Services
*/
 get_header(); ?>



<!-- Our Team -->
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
     
<div class="ap-main_sec bg-white">
    <div class="container">
        <div class="row align-items-center">
            
             <div class="col-md-12 col-xs-12">
                            <div class="item clearfix">
                                <div class="sec-title ourteam">
                                    <h4 class="main_head"><strong>Terms of Service</strong></h4>
                                </div>
                                <div class="content-box team-main-text Privacy">
                                    
             <?php echo get_field('terms_of_service_content'); ?>
                
                                    
                                    
                                    
                                </div>
                            </div>
                
            </div>
            
            
        </div>
    </div>
</div>



</main>
<!-- Main Content - end -->

<?php get_footer(); ?>