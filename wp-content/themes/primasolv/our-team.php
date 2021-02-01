<?php
/*
template Name: Team
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
                    <span>Our Team</span>
                </li>
            </ul>
        </div>
    </div>

<!-- Main Content - start -->
<main>

        

<div class="main_sec bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-xs-12">
              <div class="item">
                <figure class="image-box">
                  <img src="<?php echo get_field('our_team_top_image'); ?>" alt="" class="img-responsive">
                </figure>
              </div>
            </div>
      
       <div class="col-md-6 col-xs-12">
              <div class="item clearfix">
                <div class="sec-title ourteam">
                  <h4 class="main_head"><strong>Our Team</strong></h4>
                </div>
                <div class="content-box team-main-text">
                  <?php echo get_field('our_team_content'); ?>
               
                  
                </div>
              </div>
        
            </div>
      
            
        </div>
    </div>
</div>
</main>
<!-- Main Content - end -->


<?php get_footer(); ?>