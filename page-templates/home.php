<?php
/*

Template name: Home page

*/

get_header(); ?>

<?php 
	$url = get_template_directory_uri();
?>

<section class="top_slider">
	<div class="top_slider_wrap">
		<?php 
			if( have_rows('top_slider_list') ) : ?>
				<?php while ( have_rows('top_slider_list') ) : the_row(); ?>
					<div class="top_slider__item" style="background-image: url(<?php the_sub_field('top_slider_img');?>);">
						<div class="center">
							<div class="top_slider__item_content">
								<h4><?php the_sub_field('top_slider_ttl');?></h4>
								<?php the_sub_field('top_slider_desc');?>
								<a href="<?php the_sub_field('top_slider_btn_link');?>" class="btn"><?php the_sub_field('top_slider_btn_link_text');?></a>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>
<section class="appoinmtment">
	<div class="center">
		<div class="app_row">
			<div class="get_app app__item">
				<h4><?php the_field('app_ttl_1'); ?></h4>
				<?php the_field('app_desc'); ?>
				<a href="<?php the_field('app_btn_link'); ?>" class="btn"><?php the_field('app_btn_text'); ?></a>
			</div>
			<div class="app_hours app__item">
				<h4><?php the_field('app_ttl_2'); ?></h4>
				<?php 
					if( have_rows('schedule') ) : ?>
						<div class="shedule">
							<?php while ( have_rows('schedule') ) : the_row(); ?>
								<div class="sched_row">
									<div class="sched_day"><?php the_sub_field('sch_day'); ?></div>
									<div class="sched_time"><?php the_sub_field('sch_hours'); ?></div>
								</div>
							<?php endwhile; ?>
						</div>
				<?php endif; ?>
			</div>
			<div class="emergency app__item">
				<h4><?php the_field('app_ttl_3'); ?></h4>
				<a href="tel:<?php the_field('company_phone', 'option'); ?>"><?php the_field('company_phone', 'option'); ?></a>
				<?php the_field('app_ttl_3_desc'); ?>
			</div>
		</div>
	</div>
</section>
<section class="services">
	<div class="center">
		<h5 class="ttl"><?php the_field('serv_ttl'); ?></h5>
		<h4 class="ttl"><?php the_field('serv_subttl'); ?></h4>
		<!-- Services list -->
		<?php do_action( 'services_area', 4 ); ?>
		<div class="btn_wrap">
			<a href="<?php the_field('serv_btn_link'); ?>" class="btn"><?php the_field('serv_btn_txt'); ?></a>
		</div>
	</div>
</section>
<section class="process">
	<div class="center">
		<div class="process_row">
			<div class="proc_l">
				<h5 class="ttl"><?php the_field('process_ttl'); ?></h5>
				<h4 class="ttl"><?php the_field('proces_subttl'); ?></h4>
				<?php the_field('process_desc'); ?>
				<?php 
					if( have_rows('process_steps') ) : ?>
						<?php $step = 1; ?>
						<div class="proc_steps">
							<?php while ( have_rows('process_steps') ) : the_row(); ?>
								<div class="proc_step__item">
									<div class="step_number">
										<?=  $step; ?>
									</div>
									<div class="step_content">
										<h5><?php the_sub_field('process_step_ttl'); ?></h5>
										<p><?php the_sub_field('process_step_desc'); ?></p>
									</div>
								</div>
								<?php $step++; ?>
							<?php endwhile; ?>
						</div>
				<?php endif; ?>
			</div>
			<div class="proc_r">
				<img src="<?php the_field('process_img'); ?>" alt="" />
			</div>
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
			<a href="<?php the_field('doctors_btn_link'); ?>" class="btn"><?php the_field('doctors_btn_txt'); ?></a>
		</div>
	</div>
</section>
<section class="why_choose">
	<div class="center">
		<h5 class="ttl"><?php the_field('choose_us_ttl'); ?></h5>
		<h4 class="ttl"><?php the_field('choose_us_subttl'); ?></h4>
		<?php 
			if( have_rows('choose_list') ) : ?>
				<div class="why_choose_grid">
					<?php while ( have_rows('choose_list') ) : the_row(); ?>
						<div class="why_choose__item">
							<div class="why_icon">
								<img src="<?php the_sub_field('choose_icon'); ?>" alt="" />
							</div>
							<div class="why_content">
								<h5><?php the_sub_field('choose_ttl'); ?></h5>
								<p><?php the_sub_field('choose_desc'); ?></p>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
		<?php endif; ?>
	</div>
</section>
<section class="about">
	<div class="about_row">
		<div class="about_l about_img about_block" style="background-image: url(<?php the_field('about_1_img'); ?>);"></div>
		<div class="about_r about_block">
			<div class="about_r_content">
				<h5 class="ttl"><?php the_field('about_1_ttl'); ?></h5>
				<h4 class="ttl"><?php the_field('about_1_subttl'); ?></h4>
				<?php the_field('about_1_desc'); ?>
				<a href="<?php the_field('about_1_btn_link'); ?>" class="btn_light"><?php the_field('about_1_btn_text'); ?></a>
			</div>
		</div>
	</div>
	<div class="about_row about_rev">
		<div class="about_l about_img about_block" style="background-image: url(<?php the_field('about_2_img'); ?>);"></div>
		<div class="about_r about_block">
			<div class="about_r_content">
				<h5 class="ttl"><?php the_field('about_2_ttl'); ?></h5>
				<h4 class="ttl"><?php the_field('about_2_subttl'); ?></h4>
				<?php the_field('about_2_desc'); ?>
				<a href="<?php the_field('about_2_btn_link'); ?>" class="btn_light"><?php the_field('about_2_btn_text'); ?></a>
			</div>
		</div>
	</div>
</section>
<section class="advanced_dent">
	<div class="center">
		<div class="adv_row">
			<div class="adv_text"><?php the_field('adv_text'); ?></div>
			<a href="<?php the_field('adv_btn_link'); ?>" class="btn_get_appointment"><?php the_field('adv_btn_txt'); ?></a>
		</div>
	</div>
</section>
<section class="adv_slider">
	<?php 
		if( have_rows('adv_list') ) : ?>
			<div class="adv_slider_wrap">
				<?php while ( have_rows('adv_list') ) : the_row(); ?>
					<div class="adv_slider__item">
						<img src="<?php the_sub_field('adv_img'); ?>" alt="" />
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
<section class="home_blog">
	<div class="center">
		<h5 class="ttl"><?php the_field('blog_ttl'); ?></h5>
		<h4 class="ttl"><?php the_field('blog_subttl'); ?></h4>
		<div class="blog_home_list">
			<div class="blog_home__item">
				<img src="<?= $url; ?>/assets/img/blog_home/1.jpg" alt="" />
				<div class="blog_home__item_text">
					<h5>Top 5 Foods That Can Whiten Your Teeth</h5>
					<div class="autors">
						<span class="post_date">13 March 2020 |  By</span>
						<span class="post_author">Bill Goods</span>
					</div>
					<p>Minim consequatur and magna inventore. Nequeporro in mollit. Quaerat tempora or aliquid irure or …</p>
					<a href="#" class="link"><span>Read More</span> <img src="<?= $url; ?>/assets/img/icons/arrow_right_icon.svg" alt="" /></a>
				</div>
			</div>
			<div class="blog_home__item">
				<img src="<?= $url; ?>/assets/img/blog_home/2.jpg" alt="" />
				<div class="blog_home__item_text">
					<h5>Surprising Foods that are Actually Good for Your ...</h5>
					<div class="autors">
						<span class="post_date">11 March 2020 |  By</span>
						<span class="post_author">German Troble</span>
					</div>
					<p>Fugit explicabo pariatur iste, and odit, quia. Magnam adipisci. Officia nesciunt, iure ut veniam, but sint.</p>
					<a href="#" class="link"><span>Read More</span> <img src="<?= $url; ?>/assets/img/icons/arrow_right_icon.svg" alt="" /></a>
				</div>
			</div>
			<div class="blog_home__item">
				<img src="<?= $url; ?>/assets/img/blog_home/1.jpg" alt="" />
				<div class="blog_home__item_text">
					<h5>Office in Our Clinic Discounts for a Full ...</h5>
					<div class="autors">
						<span class="post_date">10 March 2020 |  By</span>
						<span class="post_author">Angelina Bullik</span>
					</div>
					<p>Suscipit aspernatur nemo aute and veritatis yet mollit iste. Totam minima and laudantium, adipisicing.</p>
					<a href="#" class="link"><span>Read More</span> <img src="<?= $url; ?>/assets/img/icons/arrow_right_icon.svg" alt="" /></a>
				</div>
			</div>
		</div>
		<div class="btn_wrap">
			<a href="<?php the_field('blog_btn_link'); ?>" class="btn"><?php the_field('blog_btn_text'); ?></a>
		</div>
	</div>
</section>
<section class="contact_us">
	<div class="contact_us_home_hero" style="background-image: url(<?php the_field('contact_us__bg'); ?>);">
		<div class="contact_us_content">
			<h4><?php the_field('contact_us_ttl'); ?></h4>
			<?php the_field('contact_us_desc'); ?>
			<div class="btn_wrap">
				<a href="<?php the_field('contact_us_btn_link'); ?>" class="btn_light_white"><?php the_field('contact_us_btn_text'); ?></a>
			</div>
		</div>
	</div>
	<div class="contact_form_home_wrap">
		<div class="contact_form_container">
			<div class="contact_us_header">
				<img src="<?= $url; ?>/assets/img/icons/contact_us_form_icon.svg" alt="" />
				<h4><?php the_field('contact_us_form_ttl'); ?></h4>
				<?php echo do_shortcode('[contact-form-7 id="22" title="Contact form 1"]'); ?>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>