<?php $services = array(
	array(
		icon => 'icon-documents',
		title => 'Custom writing',
		text => 'Term paper or essay, thesis or report – we take care of any kind of writing and make it highly customized. Order academic content and get it perfectly done.',
	),
	array(
		icon => 'icon-bargraph',
		title => 'In-depth topic/problem investigation',
		text => 'We apply effective research methods to dig out topic-relevant and credible information. We explore the topic deeply to come up with useful data for the future paper.',
	),
	array(
		icon => 'icon-genius',
		title => 'PowerPoint presentations & data analysis projects',
		text => 'Our experts have advanced computer skills. We create compelling visuals and accurate statistics projects. Get unique solutions for your presentation.',
	),
	array(
		icon => 'icon-search',
		title => 'Proofreading & editing',
		text => 'We provide accurate editing of your manuscript. No error or typo can escape our sharp editor\'s eye. We also do plagiarism scanning so that you can be sure your paper is 100% original.',
	),
	array(
		icon => 'icon-alarmclock',
		title => 'Timely task completion & delivery',
		text => 'No delays! This is one of our priorities. We work fast and follow the deadline you set. The paper is delivered at an agreed time or even earlier.',
	),
	array(
		icon => 'icon-chat',
		title => 'Free choice of the writer',
		text => 'Choose an expert who matches your needs. Our panel of writers is huge. Look through their portfolios and select specialist to work on your task. Or let us do it for you.',
	),
); ?>

<!--SERVICES-INFO-->
<section class="site_services-info">
	<div class="container">
		<div class="site_section-title">Services info</div>
		<div class="items-wrap">
			<div class="row">
				<?php foreach ($services as $k => $item): ?>
					<div class="col-md-4 col-sm-6 col col-<?php echo ++$k; ?>">
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
