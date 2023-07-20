<?php
/*

Template name: About page

*/

get_header(); ?>

<?php 
	$url = get_template_directory_uri();
?>

<section class="welcome">
	<div class="center">
		<div class="process_row">
			<div class="proc_l">
				<h5 class="ttl">
					<?php the_field('welcome_ttl'); ?>
				</h5>
				<h4 class="ttl"><?php the_field('welcome_subttl'); ?></h4>
				<?php the_field('welcome_txt'); ?>
				<a href="<?php the_field('welcome_btn_link'); ?>" class="btn_light"><?php the_field('welcome_btn_text'); ?></a>
			</div>
			<div class="proc_r">
				<img src="<?php the_field('welcome_img'); ?>" alt="" />
			</div>
		</div>
	</div>
	<div class="why_stand">
		<div class="center">
			<?php 
			if( have_rows('pros_list') ) : ?>
				<div class="why_stand_row">
					<?php while ( have_rows('pros_list') ) : the_row(); ?>
						<div class="why_stand__item">
							<div class="why_stand_icon">
								<img src="<?php the_sub_field('pros_icon');?>" alt="" />
							</div>
							<div class="why_stand_content">
								<h5><?php the_sub_field('pros_title');?></h5>
								<p><?php the_sub_field('pros_text');?></p>
							</div>
						</div>
					<?php endwhile; ?>
				</div>	
		<?php endif; ?>
		</div>	
	</div>
</section>
<section class="services">
	<div class="center">
		<h5 class="ttl"><?php the_field('service_ttl'); ?></h5>
		<h4 class="ttl"><?php the_field('service_subttl'); ?></h4>
		<!-- Services list -->
		<?php do_action( 'services_area', 4 ); ?>
		<div class="btn_wrap">
			<a href="<?php the_field('service_btn_link'); ?>" class="btn"><?php the_field('service_btn_text'); ?></a>
		</div>
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
<section class="partners">
	<div class="center">
		<?php 
		$partners = get_field('partners_list');
		if( $partners ): ?>
			<div class="partners_row">
		        <?php foreach( $partners as $partner ): ?>
		        	<img src="<?= $partner; ?>" alt="" />
		        <?php endforeach; ?>
		    </div>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>