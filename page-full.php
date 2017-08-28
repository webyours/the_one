<?php /* Template Name: Full */ get_header();?>
<section class="content mycontent" id="content">
	<div class="row">
		<div class="col-md-12">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>    
			<?php the_content();?>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
</section>
<?php get_footer();?>