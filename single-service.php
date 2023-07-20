<?php 
$url = get_template_directory_uri();
?>

<?php get_header(); ?>

<section class="serv_desc_top">
	<div class="center">
		<div class="process_row">
			<div class="proc_l">
				<h5 class="ttl"><?php the_field('service_ttl'); ?></h5>
				<h4 class="ttl"><?php the_field('service_subttl'); ?></h4>
				<?php the_field('service_text'); ?>
				<?php if(get_field('service_btn_text')){?>
					<a href="<?php the_field('service_btn_url'); ?>" class="btn_light"><?php the_field('service_btn_text'); ?></a>
				<?php } ?>
			</div>
			<div class="proc_r">
				<img src="<?php the_field('service_desc_img'); ?>" alt="" />
			</div>
		</div>
	</div>
</section>
<section class="serv_det_privil">
	<div class="center">
		<?php 
			if( have_rows('service_pro_list') ) : ?>
				<div class="serv_det_privil_list">
					<?php while ( have_rows('service_pro_list') ) : the_row(); ?>
						<div class="serv_det_list__item">
							<div class="serv_det_head">
								<div class="serv_det_i">
									<img src="<?php the_sub_field('serv_icon'); ?>" alt="" />
								</div>
								<div class="serv_det_ttl"><?php the_sub_field('serv_ttl'); ?></div>
							</div>
							<p><?php the_sub_field('serv_desc'); ?></p>
						</div>
					<?php endwhile; ?>
				</div>
		<?php endif; ?>
	</div>
</section>
<section class="adv_slider">
	<?php 
		if( have_rows('service_slider_list') ) : ?>
			<div class="adv_slider_wrap">
				<?php while ( have_rows('service_slider_list') ) : the_row(); ?>
					<div class="adv_slider__item">
						<img src="<?php the_sub_field('service_gallery_img'); ?>" alt="" />
						<div class="serv_img_hover">
							<div class="serv_circle">
								<img src="<?= $url; ?>/assets/img/icons/plus.svg" alt="" />
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
	<?php endif; ?>
</section>
<!-- more_services_block clss-->
<section class="contact_us more_services_block">
	<div class="contact_us_home_hero" style="background-image: url(<?php the_field('more_services_img'); ?>);">
		<div class="contact_us_content">
			<h4><?php the_field('more_services_ttl'); ?></h4>
			<?php the_field('more_services_desc'); ?>
			<div class="btn_wrap">
				<?php if(get_field('service_btn_text')){?>
					<a href="<?php the_field('more_services_btn_link'); ?>" class="btn_light_white"><?php the_field('more_services_btn_text'); ?></a>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="contact_form_home_wrap">
		<div class="contact_form_container">
			<div class="serv_det_other_serv_list">
				<?php
				global $post;
				$post_id = $post->ID;
				$service_number = 1;
				$services_params = array(
					'post_type' => 'service',
					'order' => 'DESC',
					'posts_per_page' => '6',
					'post__not_in' => array($post_id)
				);
				$services = new WP_Query($services_params);
					if( $services->have_posts() ) :
						while( $services->have_posts() ) :
					        $services->the_post();
				?>

					<div class="serv_det_other__item">
						<div class="serv_det_num">0<?= $service_number; ?></div>
						<div class="serv_det_content">
							<h4><?php the_title(); ?></h4>
							<?php 
								$service_desc = cut_text(get_field('service_text'));
							?>
							<p><?php echo  $service_desc; ?></p>
							<a href="<?php echo get_permalink(); ?>" class="link"><span>More info</span> <img src="<?= $url; ?>/assets/img/icons/arrow_right_icon.svg" alt="" /></a>
						</div>
					</div>
				<?php      
						$service_number++;  
						endwhile;
					endif;
					wp_reset_query();	 // Restore global post data stomped by the_post().
				?>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>