<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="profile" href="https://gmpg.org/xfn/11" /> 

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,300italic,300&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap/bootstrap.css">
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles29.css"> -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/primasolv-styles.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive28.css">

  <?php wp_head(); ?>
  <style>
	.header .navbar-nav .nav-link {
    padding: 6px 40px 7px 40px;
    cursor: pointer !important;
}
	</style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php 
global $post;
$post_slug = $post->post_name;

   $custom_logo_id = get_theme_mod( 'custom_logo' );
   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 
?>


<div class="header">
    <nav class="navbar navbar-expand-lg navbar-dark p-0 align-items-stretch">
        <a class="navbar-brand p-0 mr-5" href="<?php echo site_url(''); ?>"><img src="<?php echo $image[0]; ?>" alt="primasolv Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto align-items-center">
            <li class="nav-item <?php if(is_front_page()) echo 'active'; ?>">
               <a class="nav-link" href="<?php echo site_url(''); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
        
             <li class="nav-item dropdown <?php if(($post_slug=='about')||($post_slug=='vision-mission')||($post_slug=='our-team')||($post_slug=='our-approach')||($post_slug=='privacy-policies')||($post_slug=='terms-of-use')||($post_slug=='terms-of-service')||($post_slug=='refund-policy')) echo 'active'; ?>">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item1" href="<?php echo site_url('about'); ?>">About Us</a>
                <a class="dropdown-item1" href="<?php echo site_url('vision-mission'); ?>">Vision & Mission</a>
                <a class="dropdown-item1"href="<?php echo site_url('our-team'); ?>">Our Team</a>
                <a class="dropdown-item1" href="<?php echo site_url('our-approach'); ?>">Our Approach</a>
                <!-- <a class="dropdown-item1" href="Privacy.html">Privacy policy</a>
                <a class="dropdown-item1" href="Terms.html">Terms of use</a>
                <a class="dropdown-item1" href="Terms of Service.html">Terms of Service</a>
                <a class="dropdown-item1" href="Refund.html">Refund Policy</a> -->
              </div>
             </li>
        
            <li class="nav-item dropdown <?php if(($post_slug=='aws-cloud-consulting')||($post_slug=='data-analytics')||($post_slug=='saas')||($post_slug=='cyber-security')||($post_slug=='application-development')||($post_slug=='staffing')) echo 'active'; ?>">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item1"  href="<?php echo site_url('aws-cloud-consulting'); ?>">AWS Cloud Consulting</a>              
                <a class="dropdown-item1" href="<?php echo site_url('application-development'); ?>">Application Development</a>
                  <a class="dropdown-item1" href="<?php echo site_url('cyber-security'); ?>">Cyber Security</a>
                <a class="dropdown-item1" href="<?php echo site_url('staffing'); ?>">Staffing</a>
              </div>
             </li>
          <li class="nav-item <?php if(($post_slug=='primagenx')) echo 'active'; ?>">
              <a  class="nav-link" href="<?php echo site_url('primagenx'); ?>">PrimaGenX</a>
            </li>
       


            <li class="nav-item <?php if(($post_slug=='contact')) echo 'active'; ?>">
              <a class="nav-link" href="<?php echo site_url('contact'); ?>">Contact</a>
            </li>
          </ul>
        </div>
        
      </nav>
</div>