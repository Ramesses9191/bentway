<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bentway
 */

?>
<?php 
	$url = get_template_directory_uri();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;500;600;700;800;900&family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="header_top">
			<div class="center">
				<div class="header_top_content">
					<div class="header_top_row">
						<div class="company_addr">
							<img class="company_addr_icon" src="<?= $url; ?>/assets/img/icons/addr_icon.svg" alt="" />
							<span class="company_addr_txt"><?php the_field('company_address', 'option'); ?></span>
						</div>
						<div class="company_contacts">
							<div class="comp_phone">
								<img class="comp_phone_icon" src="<?= $url; ?>/assets/img/icons/phone_icon.svg" alt="" />
								<a class="phone_number" href="tel:<?php the_field('company_phone', 'option'); ?>"><?php the_field('company_phone', 'option'); ?></a>
							</div>
							<div class="company_email">
								<img class="email_icon" src="<?= $url; ?>/assets/img/icons/email_icon.svg" alt="" />
								<a href="mailto:<?php the_field('company_email', 'option'); ?>" class="comp_email"><?php the_field('company_email', 'option'); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header_nav">
			<div class="center">
				<div class="header_nav_row">
					<div class="logo_block">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
							<img src="<?php the_field('company_logo', 'option'); ?>" alt="" />
						</a>
					</div>
					<div class="nav_block">
						<?php wp_nav_menu( array( 'theme_location' => 'header_menu') ); ?>
					</div>
					<div class="hamburger">
						<div id="nav-icon3">
						  <span></span>
						  <span></span>
						  <span></span>
						  <span></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php if(!is_front_page()):?>
			<?php if(is_singular("service")) {?>
				<div class="header_panel">
					<div class="center">
						<div class="panel_row">
							<div class="page_title"><?php the_title(); ?></div>
							<div class="page_breadcumbs">
								<div class="page_path">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> / 
									<a href="/services">Services </a> / 
								</div>
								<div class="page_active"><?php the_title(); ?></div>
							</div>
						</div>
					</div>
				</div>		
			<?php } else { ?>
				<div class="header_panel">
					<div class="center">
						<div class="panel_row">
							<div class="page_title"><?php the_title(); ?></div>
							<div class="page_breadcumbs">
								<div class="page_path"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> / </div>
								<div class="page_active"><?php the_title(); ?></div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>	
		<?php endif; ?>							
	</header>
	<main>