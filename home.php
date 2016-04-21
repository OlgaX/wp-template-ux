<?php get_header(); ?>

<div class="site_tpl-blog">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<?php get_template_part('loop'); ?>
				<div class="site_blog-pagination">
					<?php
						the_posts_pagination(array(
							'show_all' => true,
							'end_size' => 2,
							'mid_size' => 2,
							'prev_next' => true,
							'prev_text' => __('Prev'),
							'next_text' => __('Next')
						));
					?>
				</div>
			</div>
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
