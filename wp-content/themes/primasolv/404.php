<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage PrimaSolv
 * @since 1.0.0
 */

get_header();
?>
<style>
.error-template {padding: 40px 15px;text-align: center;}
.error-actions {margin-top:15px;margin-bottom:15px;}
.error-actions .btn { margin-right:10px; }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                
<h2 class="main_head"> <span> Oops!</span></h2>
                <div class="error-details">
                    Sorry,  Requested page not found!
                </div>
                <div class="error-actions">
                    <a href="<?php echo site_url(''); ?>" class="btn btn-primary btn-lg"><i class="fa fa-home"></i>
                        Return Home </a>
                </div>
            </div>
        </div>
    </div>
</div>
	
<?php
get_footer();
