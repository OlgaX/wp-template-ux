<?php get_header(); ?>

<div class="site_tpl-blog-post">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<?php get_template_part('loop'); ?>
			</div>
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
