<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage PrimaSolv
 * @since 1.0.0
 */

get_header();
?>

	<!-- Breadcrumbs -->
<div class="b-crumbs-wrap">
        <div class="container b-crumbs">
            <ul>
                <li>
                    <a href="index.html">PrimaSolv</a>
                </li>
                <li>
                    <span><?php the_title(); ?></span>
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
                    <div class="col-md-12 wow fadeInLeft web-mobi1" data-wow-duration="0" data-wow-delay="0s"> <?php the_content(); ?>        
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<!-- Main Content - end -->
<?php
get_footer();
