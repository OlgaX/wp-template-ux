<?php //if ($post->post_content != '') : ?>
	<!--CONTENT-->
	<section class="site_content">
		<?php if (!is_home() && !is_single()) : ?>
			<div class="container">
		<?php endif; ?>

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('site_article'); ?>>

						<?php if(!is_singular()) : // for not singular pages ?>
							<h2 class="site_article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<div class="site_article-text">
								<?php the_excerpt(); ?>
							</div>

						<?php else : // for singular pages ?>

							<?php if (!is_page()) : // but not for page.php ?>
								<h1 class="site_article-title"><?php the_title(); ?></h1>
							<?php endif; ?>

							<div class="site_article-text">
								<?php the_content(); ?>
							</div>

						<?php endif; ?>
					</article>
				<?php endwhile; ?>
			<?php endif; ?>

		<?php if (!is_home() && !is_single()) : ?>
			</div>
		<?php endif; ?>
	</section>
<?php //endif; ?>
