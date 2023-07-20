<?php
/*

Template name: Services page

*/

get_header(); ?>

<?php 
	$url = get_template_directory_uri();
?>

<!-- all_services clss-->
<section class="services all_services">
	<div class="center">
		<h5 class="ttl"><?php the_field('services_ttl'); ?></h5>
		<h4 class="ttl"><?php the_field('services_subttl'); ?></h4>
		<?php do_action( 'services_area', 8 ); ?>
	</div>
</section>
<section class="advanced_dent">
	<div class="center">
		<div class="adv_row">
			<div class="adv_text"><?php the_field('offer_text'); ?></div>
			<a href="<?php the_field('offer_btn_link'); ?>" class="btn_get_appointment"><?php the_field('offer_btn_text'); ?></a>
		</div>
	</div>
</section>
<section class="doctors">
	<div class="center">
		<h5 class="ttl"><?php the_field('doctors_ttl'); ?></h5>
		<h4 class="ttl"><?php the_field('doctors_subttl'); ?></h4>
		<div class="serv_list doctors_list">
			<div class="serv__item">
				<a href="#" class="serv_img">
					<img src="<?= $url; ?>/assets/img/doctors/1.jpg" alt="" />
					<div class="serv_img_hover">
						<div class="serv_circle">
							<img src="<?= $url; ?>/assets/img/icons/plus.svg" alt="" />
						</div>
					</div>
				</a>
				<h4>Dr. Danielle Bechtelar</h4>
				<div class="doctor_position">Dental Surgery</div>
				<div class="doctor_line"></div>
				<p>Works with us 10 years</p>
			</div>
			<div class="serv__item">
				<a href="#" class="serv_img">
					<img src="<?= $url; ?>/assets/img/doctors/1.jpg" alt="" />
					<div class="serv_img_hover">
						<div class="serv_circle">
							<img src="<?= $url; ?>/assets/img/icons/plus.svg" alt="" />
						</div>
					</div>
				</a>
				<h4>Dr. Allen Aksamit</h4>
				<div class="doctor_position">Oral Surgery</div>
				<div class="doctor_line"></div>
				<p>Works with us 17 years</p>
			</div>
			<div class="serv__item">
				<a href="#" class="serv_img">
					<img src="<?= $url; ?>/assets/img/doctors/1.jpg" alt="" />
					<div class="serv_img_hover">
						<div class="serv_circle">
							<img src="<?= $url; ?>/assets/img/icons/plus.svg" alt="" />
						</div>
					</div>
				</a>
				<h4>Dr. Andrea Adams</h4>
				<div class="doctor_position">Pediatric Dentist</div>
				<div class="doctor_line"></div>
				<p>Works with us 4 years</p>
			</div>
			<div class="serv__item">
				<a href="#" class="serv_img">
					<img src="<?= $url; ?>/assets/img/doctors/1.jpg" alt="" />
					<div class="serv_img_hover">
						<div class="serv_circle">
							<img src="<?= $url; ?>/assets/img/icons/plus.svg" alt="" />
						</div>
					</div>
				</a>
				<h4>Dr. Danny Reed</h4>
				<div class="doctor_position">Hygienists</div>
				<div class="doctor_line"></div>
				<p>Works with us 5 years</p>
			</div>
		</div>
		<div class="btn_wrap">
			<a href="<?php the_field('doctors_btn_link'); ?>" class="btn"><?php the_field('doctors_btn_text'); ?></a>
		</div>
	</div>
</section>
<section class="quote">
	<div class="about_row">
		<div class="about_l about_img about_block" style="background-image: url(<?php the_field('quote_img'); ?>);"></div>
		<div class="about_r about_block">
			<div class="about_r_content">
				<img class="quote_sign" src="<?= $url; ?>/assets/img/icons/quote-right.svg" alt="" />
				<?php the_field('quote_text'); ?>
				<div class="quote_author">
					<?php the_field('quote_author'); ?>
				</div>
				<div class="author_status"><?php the_field('quote_status'); ?></div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>