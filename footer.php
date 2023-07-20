<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bentway
 */

?>
<?php 
	$url = get_template_directory_uri();
?>

</main>
	<footer>
		<div class="center">
			<div class="footer_row">
				<div class="f_logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="f_logo_btn">
						<img src="<?php the_field('footer_logo_icon', 'option'); ?>" alt="" />
						<span><?php the_field('footer_logo_text', 'option'); ?></span>
					</a>
					<?php the_field('footer_desc', 'option'); ?>
				</div>
				<div class="f_menu">
					<h4><?php the_field('footer_ttl_1', 'option'); ?></h4>
					<div class="footer_menu_row">
						<div class="f_menu_l">
							<?php wp_nav_menu( array( 'theme_location' => 'footer_menu_l') ); ?>
						</div>
						<div class="f_menu_r"><?php wp_nav_menu( array( 'theme_location' => 'footer_menu_r') ); ?>
						</div>
					</div>
				</div>
				<div class="f_contacts">
					<h4><?php the_field('footer_ttl_2', 'option'); ?></h4>
					<a href="tel:<?php the_field('company_phone', 'option'); ?>"><?php the_field('company_phone_text', 'option'); ?> <?php the_field('company_phone', 'option'); ?></a>
					<a href="fax:<?php the_field('company_fax', 'option'); ?>"><?php the_field('company_fax_text', 'option'); ?> <?php the_field('company_fax', 'option'); ?></a>
					<div class="f_socials">
						<a href="<?php the_field('fb_link', 'option'); ?>" target="_blank">
							<img src="<?= $url; ?>/assets/img/icons/socials_icons/fb_icon.svg" alt="" />
						</a>
						<a href="<?php the_field('tw_link', 'option'); ?>" target="_blank">
							<img src="<?= $url; ?>/assets/img/icons/socials_icons/tw_icon.svg" alt="" />
						</a>
						<a href="<?php the_field('google_link', 'option'); ?>" target="_blank">
							<img src="<?= $url; ?>/assets/img/icons/socials_icons/google_icon.svg" alt="" />
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
