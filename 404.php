<?php get_header();?>
<section class="content mycontent" id="content">
	<div class="row">
		<div class="col-md-9">
			<h1>404: Deze pagina bestaat niet</h1>
			<?php the_content();?>
		</div>
		<div class="col-md-3">
			<?php dynamic_sidebar( 'Main Sidebar' ); ?>
		</div>
	</div>
</section>

<?php get_footer();?>