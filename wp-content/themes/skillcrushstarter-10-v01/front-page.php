<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */


get_header(); ?>

<section class="home-page">
<link href="https://fonts.googleapis.com/css?family=Arimo:400i|Open+Sans+Condensed:300|Playfair+Display" rel="stylesheet">
	<div class="main-content">
		<div class="content">
		
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<div class="social-btns">  
					<a href="https://linkedin.com/in/kvanier" class="soc-icon ln"></a>
					<a href="https://github.com/kvanier2822" class="soc-icon gh"></a>
					<a href="https://instagram.com/lordtrashmouth" class="soc-icon in"></a>
				</div>
				<a href="<?php echo site_url('/blog/'); ?>" class="btn">View My Blog</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
