<?php $top_block = array(
	"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, autem.",
	"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, quas",
	"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, quidem?",
);?>

<!--TOP-BLOCK-->
<section class="site_top-block">
	<div class="container">
		<ul id="top_block">
			<?php foreach ($top_block as $item) : ?>
				<li><span class="site_top-block-content"><?php echo $item; ?></span></li>
			<?php endforeach; ?>
		</ul>
		<div class="site_btn-wrap">
			<a href="javascript:void(0);" onclick="document.location.href='/order'" class="btn btn-default site_big-btn">Order Your Paper Now</a>
		</div>
	</div>
</section>
