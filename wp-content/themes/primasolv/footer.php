<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage PrimaSolv
 * @since 1.0.0
 */

?>

<!-- Footer - start -->
<footer class="footer">
  <div class="container footer-top">
        <div class="row">
            <div class="footer-menu col-md-4 col-sm-12 col-12">
               <p>Company</p>
                <?php
            $defaults = array(
                'theme_location'  => 'footer',
                'menu'            => '',
                'container'       => false,
                'container_class' => '',
                'container_id'    => '', 
               'items_wrap'      => '<ul>%3$s</ul>',
                'depth'           => 1,
                'walker'          => ''
                );
            wp_nav_menu( $defaults );
            ?>
            </div>
            <div class="footer-menu col-md-4 col-sm-8 col-12">
                <p>Services</p>
                 <?php
            $defaults = array(
                'theme_location'  => 'services',
                'menu'            => '',
                'container'       => false,
                'container_class' => '',
                'container_id'    => '', 
               'items_wrap'      => '<ul>%3$s</ul>',
                'depth'           => 1,
                'walker'          => ''
                );
            wp_nav_menu( $defaults );
            ?>
            </div>
            <div class="footer-menu col-md-4 col-sm-4 col-12">
               <p>Product</p>
                <?php
            $defaults = array(
                'theme_location'  => 'products',
                'menu'            => '',
                'container'       => false,
                'container_class' => '',
                'container_id'    => '', 
               'items_wrap'      => '<ul>%3$s</ul>',
                'depth'           => 1,
                'walker'          => ''
                );
            wp_nav_menu( $defaults );
            ?>
            </div>
           
        </div>
    
    
    

    

  </div>
  <div class="copyright">
    <p class="text-light">PrimaSolv All Right Reserved.</p>
  </div>
</footer>
<!-- Footer - end -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.12.3.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/bootstrap.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.accordion.js"></script>
<script>      
if ($(window).width() > 768) {
  $("#accordion").awsAccordion({
      type: "horizontal",
      cssAttrsHor:{
          ulWidth:"responsive",
          liHeight:380,
          liWidth:100,
          responsiveMedia : false
      },
      
      startSlide:3,
      openCloseHelper:{
          openIcon:"plus",
          closeIcon:"minus"
      },
      openOnebyOne:true,
      classTab:"small",
      slideOn:"click",
      autoPlay:false,
      autoPlaySpeed:2000
    })
}else{
  $("#accordion").awsAccordion({
      type: "vertical",
      cssAttrsVer:{
          ulWidth:"responsive",
          liHeight:50,
          liWidth:100
      },
      
      startSlide:3,
      openCloseHelper:{
          openIcon:"plus",
          closeIcon:"minus"
      },
      openOnebyOne:true,
      classTab:"small",
      slideOn:"click",
      autoPlay:false,
      autoPlaySpeed:2000
    })
}

    </script>



<?php wp_footer(); ?>

</body>
</html>
