<!--PARTNERS-->
<section class="site_partners">
	<div class="container">
		<div class="items-wrap">
			<div class="row">
				<div id="partners_slider">
					<?php for ($i = 1; $i <= 12; $i++): ?>
						<div class="col-md-2 col-sm-3 col-xs-4 col col-<?php echo $i; ?>">
							<div class="item">
								<img src="<?php bloginfo('template_url'); ?>/img/partners/<?php echo $i; ?>.png" alt="" />
							</div>
						</div>
					<?php endfor; ?>
				</div>
			</div>
		</div>
	</div>
</section>
