<?php get_header();?>
<section class="content" id="content">
	<div class="row">
		<div class="col-md-12">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>    
			<h1><?php the_title();?></h1>
			<?php the_content();?>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
</section>
<?php get_footer();?>