<?php $counters = array(
	array(
		icon => 'icon-profile-male',
		num => 90000,
		text => 'Customers who scored "A"',
	),
	array(
		icon => 'icon-beaker',
		num => 1250,
		text => 'Academic writers with Ph.D',
	),
	array(
		icon => 'icon-global',
		num => 1000,
		text => 'Colleges approved our papers',
	),
); ?>

<!--COUNTERS-->
<section class="site_counters">
	<div class="container">
		<div class="items-wrap">
			<div class="row">
				<?php foreach ($counters as $k => $item): ?>
					<div class="col-sm-4 col-<?php echo ++$k; ?>">
						<div class="item">
							<div class="icon"><i class="<?php echo $item[icon]; ?>"></i></div>
							<div class="counter"><?php echo $item[num]; ?></div>
							<div class="text"><?php echo $item[text]; ?></div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
