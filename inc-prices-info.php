<?php $prices = array(
	array(
		icon => 'icon-puzzle',
		title => 'Type of work',
		text => 'Editing & proofreading services cost less than writing a paper from scratch',
	),
	array(
		icon => ' icon-documents',
		title => 'Number of pages',
		text => 'The longer deadline you set, the less you\'ll have to pay',
	),
	array(
		icon => 'icon-speedometer',
		title => 'Urgency',
		text => 'The price for high school level is less than for Ph.D',
	),
	array(
		icon => 'icon-genius',
		title => 'Academic level',
		text => 'The price for high school level is less than for Ph.D',
	),
); ?>

<!--PRICES-INFO-->
<section class="site_prices-info">
	<div class="container">
		<div class="site_section-title">Prices info</div>
		<div class="items-wrap">
			<div class="row">
				<?php foreach ($prices as $k => $item): ?>
					<div class="col-md-3 col-sm-6 col col-<?php echo ++$k; ?>">
						<div class="item">
							<div class="icon"><i class="<?php echo $item[icon]; ?>"></i></div>
							<div class="title"><?php echo $item[title]; ?></div>
							<div class="text"><?php echo $item[text]; ?></div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
