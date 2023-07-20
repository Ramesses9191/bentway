<?php
/**	---------------------------------------------------------------------- **
*	=Services list
** ---------------------------------------------------------------------- */

function bentway_services($services) {
	$url = get_template_directory_uri();

	$service = new WP_Query('post_type=service&order=DESC&posts_per_page='.$services);
	if( $service->have_posts() ) :
?>
	<div class="serv_list">
	<?php	
		while( $service->have_posts() ) :
	        $service->the_post();
	?>
	<div class="serv__item">
		<a href="<?php echo get_permalink(); ?>" class="serv_img">
			<img src="<?php the_field('service_desc_img'); ?>" alt="" />
			<div class="serv_img_hover">
				<div class="serv_circle">
					<img src="<?= $url; ?>/assets/img/icons/plus.svg" alt="" />
				</div>
			</div>
		</a>
		<h4><?php the_title(); ?></h4>
		<?php 
			$service_desc = cut_text(get_field('service_text'));
		?>
		<p><?php echo  $service_desc; ?></p>
	</div>
<?php        
		endwhile;
	?>
	</div>
	<?php	
	endif;
	wp_reset_query(); // Restore global post data stomped by the_post().

}
?>

<?php 
	add_action( 'services_area', 'bentway_services', 10, 1 );
?>