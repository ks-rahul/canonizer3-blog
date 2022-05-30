<?php

if ( ! defined('ABSPATH')) exit;  // if direct access

	?>

	
<!--== Custom Footer ==-->
<footer>
	 <div class="container">
	 	 <div class="row">
	 	 	<div class="col-lg-3 col-md-3 col-sm-12">
	 	 		 <div class="footer_logo">
	 	 		 	<img src="<?php echo get_template_directory_uri();?>/assets/images/footer-logo.svg">
	 	 		 	 <p>Pattent: US 8,160,970 B2</p>
	 	 		 </div>
	 	 		
	 	 		 <div class="footer_menu">
	 	 		 <div class="footer_menus_main">
						<?php if (has_nav_menu('privacy-menu')) : ?>
							<nav aria-label="<?php esc_attr_e('Footer sub menu', 'twentytwentyone'); ?>" class="footer-navigation">
								<?php
								wp_nav_menu(
									array(
										'theme_location'  => 'privacy-menu',
										'menu_class'      => 'footer-menu-wrapper',
										'container_class' => 'footer-menu-container',
										'items_wrap'      => '<ul id="footer-menu-list" class="%2$s">%3$s</ul>',
										'fallback_cb'     => false,
									)
								);
								?>
							</nav><!-- .footer-navigation -->
						<?php endif; ?>
					</div>
	 	 		 <!-- <ul>
	 	 		 		 <li><a href="https://canonizer3.canonizer.com/privacy-policy">
	 	 		 		 	 Privacy Policy
	 	 		 		 </a></li>
	 	 		 		 <li><a href="https://canonizer3.canonizer.com/terms-and-services">
	 	 		 		 	Terms & Services
	 	 		 		 </a></li>
	 	 		 	</ul>  -->
	 	 		 </div>
	 	 	</div>
	 	 	<div class="col-lg-6 col-md-6 col-sm-12">
	 	 		<div class="footer_page_menu">
	 	 			 <?php /*wp_nav_menu(array('
                              theme_location' => 'primary-menu', 'menu_class' => 'navbar-nav ml-auto'));*/
                            ?>

                            <div class="footer_menus_main">
						<?php if (has_nav_menu('footer-menu')) : ?>
							<nav aria-label="<?php esc_attr_e('Footer menu', 'twentytwentyone'); ?>" class="footer-navigation">
								<?php
								wp_nav_menu(
									array(
										'theme_location'  => 'footer-menu',
										'menu_class'      => 'footer-menu-wrapper',
										'container_class' => 'footer-menu-container',
										'items_wrap'      => '<ul id="footer-menu-list" class="%2$s">%3$s</ul>',
										'fallback_cb'     => false,
									)
								);
								?>
							</nav><!-- .footer-navigation -->
						<?php endif; ?>
					</div>
	 	 			<!-- <ul>
	 	 				 <li><a href="#">Browse</a></li>
	 	 				 <li><a href="#">Help</a></li>
	 	 				 <li><a href="#">White Paper</a></li>
	 	 				 <li><a href="#">Jobs</a></li>
	 	 			
	 	 				 <li><a href="#">Create New Topic</a></li>
	 	 				 <li><a href="#">Upload Files</a></li>
	 	 				 <li><a href="#">Blog</a></li>
	 	 				 
	 	 			</ul> -->
	 	 		</div>
	 	 	</div>
	 	 	<div class="col-lg-3 col-md-3 col-sm-12">
	 	 		<div class="footer_social_list">
	 	 			<p>Follow Us</p>
	 	 			 <ul>
	 	 			 	 <li><a href="#"><img src="https://canonizer3.canonizer.com/_next/image?url=https%3A%2F%2Fapi3.canonizer.com%2Fimages%2Fsocial-media%2Ffacebook.svg&w=32&q=75"></a></li>
	 	 			 	 <li>
	 	 			 	 	<a href="https://www.facebook.com/pages/Canonizercom/103927141540408" target="_blank">
	 	 			 	 		<img src="https://canonizer3.canonizer.com/_next/image?url=https%3A%2F%2Fapi3.canonizer.com%2Fimages%2Fsocial-media%2Finstagram.svg&w=32&q=75">
	 	 			 	 	</a>
	 	 			 	 </li>
	 	 			 	 <li>
	 	 			 	 	<a href="https://twitter.com/" target="_blank">
	 	 			 	 		<img src="https://canonizer3.canonizer.com/_next/image?url=https%3A%2F%2Fapi3.canonizer.com%2Fimages%2Fsocial-media%2Ftwitter.svg&w=32&q=75">
	 	 			 	 	</a>
	 	 			 	 </li>
	 	 			 	 <li>
	 	 			 	 	<a href="https://www.youtube.com/" target="_blank"><img src="https://canonizer3.canonizer.com/_next/image?url=https%3A%2F%2Fapi3.canonizer.com%2Fimages%2Fsocial-media%2Fyoutube.svg&w=32&q=75"></a>
	 	 			 	 </li>
	 	 			 	 <li>
	 	 			 	 	<a href="https://www.linkedin.com/" target="_blank">
	 	 			 	 		<img src="https://canonizer3.canonizer.com/_next/image?url=https%3A%2F%2Fapi3.canonizer.com%2Fimages%2Fsocial-media%2FlinkedIn.svg&w=32&q=75">
	 	 			 	 	</a>
	 	 			 	 </li>
	 	 			 </ul>
	 	 			 <div class="comment_box">
	 	 			 	<p>Comments and Questions:</p>
	 	 			 	<a href="mailto:support@canonizer.com"><i class="fa fa-envelope"></i> support@canonizer.com</a>
	 	 			 </div>
	 	 		</div>
	 	 	</div>
	 	 	<div class="col-md-12 copyright_text">
                <p>Copyright owned by the volunteers contributing to the system and its contents (2006 - 2022)</p>
             </div>
	 	 </div>
	 </div>
</footer>
<!--== End  Custom Footer ==-->
<div class="row">
    <div class="container">

        <div class="col-md-12">
            <div class="footer-widget">
				<?php dynamic_sidebar('footer-widget'); ?>
            </div>

        </div>

    </div>
</div>

<div class="footer-bottom" style="display: none;">
    <div class="row">
        <div class="container">

			<?php
			$bug_blog_poweredby = get_theme_mod('bug_blog_poweredby');
			$bug_blog_dev_by = get_theme_mod('bug_blog_dev_by');

			$bug_blog_copyright_text = preg_replace('/[\-].*[\)]/U' , "-".date('Y').")", get_theme_mod('bug_blog_copyright_text'));

			?>

            <div class="col-md-12">
				<?php if(empty($bug_blog_poweredby)):?>
                   <!-- <span class="poweredby"><?php echo __('Proudly powered by WordPress','bug-blog'); ?></span> |-->
					<?php
				endif;
				?>

				<?php if(empty($bug_blog_dev_by)):?>
                   <!-- <span class="dev-credit"><?php echo sprintf(__('Theme by: Bug Blog by <a href="%s">%s</a>','bug-blog'),'https://dartthemes.com','https://dartthemes.com'); ?>  </span> | -->
					<?php
				endif;
				?>


				<?php if(empty($bug_blog_copyright_text)):?>
                    <span class="footer-copyright">Copyright 2018 Canonizer.2.0<?php //echo sprintf(__('Copyright %s %s','bug-blog'), date('Y'), esc_url( home_url() )); ?></span>
					<?php
				else:
					?>
                    <span class="footer-copyright"><?php echo ($bug_blog_copyright_text); ?></span>
					<?php

				endif;
				?>





            </div>
		<div class="row">

			<div class="col-md-12">
			<span class="footer-copyright" style="margin-left:-110px;">
				<a style="color:#FFF;" href="https://canonizer.com/privacypolicy">Privacy Policy</a> | <a style="color:#FFF;" href="https://canonizer.com/termservice">Terms & Services</a>
			</span>
 			</div>
		</div>

        </div>



    </div>
</div>
