<?php $steps = array(
	array(
		icon => 'icon-clipboard',
		text => 'Fill out order form',
	),
	array(
		icon => 'icon-gears',
		text => 'Get writer assigned',
	),
	array(
		icon => 'icon-document',
		text => 'Download paper on time',
	),
);
$steps2 = array(
	array(
		icon => 'icon-phone',
		text => 'Toll free 1-888-964-8930',
	),
	array(
		icon => 'icon-clipboard',
		text => 'Give us order details',
	),
	array(
		icon => 'icon-document',
		text => 'Get paper on time',
	),
); ?>

<!--ORDER-STEPS-->
<section class="site_order-steps">
	<div class="container">
		<div class="site_section-title">Order your paper online</div>
		<div class="items-wrap">
			<div class="row">
				<?php foreach ($steps as $k => $item): ?>
					<div class="col-xs-4 col-<?php echo ++$k; ?>">
						<div class="item">
							<div class="icon"><i class="<?php echo $item[icon]; ?>"></i></div>
							<div class="text"><?php echo $item[text]; ?></div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="sep"><span>or</span></div>
			<div class="row">
				<?php foreach ($steps as $k => $item): ?>
					<div class="col-xs-4 col-<?php echo ++$k; ?>">
						<div class="item">
							<div class="icon"><i class="<?php echo $item[icon]; ?>"></i></div>
							<div class="text"><?php echo $item[text]; ?></div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
