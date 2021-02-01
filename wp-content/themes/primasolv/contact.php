<?php
/*
template Name: Contact
*/
 get_header(); ?>



<style type="text/css">
	.map-responsive{
    overflow:hidden;
    padding-bottom:50%;
    position:relative;
    height:0;
}
.map-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
  .contacts-form form input[type=email] {
  border: 1px solid #e0e4f6;
    border-radius: 3px;
    background: #f4f5fb;
    font-size: 15px;
    color: #9fa4bb;
    transition: all 0.2s;
    display: block;
    width: 100%;
    height: 34px;
    padding: 0 15px 0 15px;
    margin: 0 0 26px;
}
 .contacts-form form input[type=tel] {
  border: 1px solid #e0e4f6;
    border-radius: 3px;
    background: #f4f5fb;
    font-size: 15px;
    color: #9fa4bb;
    transition: all 0.2s;
    display: block;
    width: 100%;
    height: 34px;
    padding: 0 15px 0 15px;
    margin: 0 0 26px;
}
.wpcf7-not-valid-tip{
  display: none !important;
}
input.wpcf7-form-control.wpcf7-text.wpcf7-validates-as-required.wpcf7-not-valid {
   
    border: 1px solid red !important;
}
	div.wpcf7-response-output{
		margin: -2em 0.5em 1em !important;
	}
</style>
<!-- Breadcrumbs -->
<div class="b-crumbs-wrap">
        <div class="container b-crumbs">
            <ul>
                <li>
                    <a href="<?php echo site_url(''); ?>">PrimaSolv</a>
                </li>
                <li>
                    <span>Contact</span>
                </li>
            </ul>
        </div>
    </div>

<!-- Main Content - start -->
<main>

        <div class="container maincont">
            
                <!-- Contacts - start -->
                <div class="pagecont contacts">
                    <ul class="contacts-col1">
                        <li>
                            <p><b>Information</b></p>
                         <?php echo get_field('contact_information'); ?>
                        </li>
                        <li>
                            <p><b>Address</b></p>
                          <?php echo get_field('address'); ?>
                        </li>
                        <li>
                            <p><b>Email</b></p>
                            <p><a href="mailto:<?php echo get_field('email'); ?>">  <?php echo get_field('email'); ?></a></p>
                        </li>
                    </ul>
                    <ul class="contacts-col2">
                        <li>
                            <p><b>Phone</b></p>
                            <p><?php echo get_field('phone'); ?></p>
                        </li>
                        <li>
                            <p><b>Business Hours</b></p>
                          <?php echo get_field('business_hours'); ?>
                        </li>
                    </ul>
<!--                     <div class="contacts-form">
                        <h3>Send us a message</h3>
                       <?php // echo do_shortcode('[contact-form-7 id="133" title="Contact form 1"]'); ?>
                    </div> -->
                </div>
                <!-- Contacts - end -->
            
            </div>
      
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2941.613291645755!2d-83.51862138524972!3d42.49977327917779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824a8cf4bcfcbd1%3A0xad9c11e07d29e11a!2s28345%20Beck%20Rd%20%23306%2C%20Wixom%2C%20MI%2048393%2C%20USA!5e0!3m2!1sen!2sin!4v1574706298019!5m2!1sen!2sin"  width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

</main>
<!-- Main Content - end -->
 

<?php get_footer(); ?>