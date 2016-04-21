<?php
$slider = !is_page('samples') ? 'id="samples_slider"' : false;

//12 items
$samples = array(
	array(
		writer_avatar => '1.jpg',
		writer_name => 'Jason Miller',
		writer_level => 'MA, first-class writer',
		work_topic => 'Is it humanly to use animals for scientific research?',
		work_doctype => 'Essay',
		work_level => 'Collage',
		work_urgency => '3 hours',
		work_price => '$52.03',
		work_check_resource => 'Copyscape'
	),
	array(
		writer_avatar => '2.jpg',
		writer_name => 'Hilary Levy',
		writer_level => 'Ph.D., first-class writer',
		work_topic => 'How has the music industry been affected by the internet and digital downloading?',
		work_doctype => 'Term paper',
		work_level => 'Ph.D',
		work_urgency => '3 days',
		work_price => '$49.89',
		work_check_resource => 'Grammarly'
	),
	array(
		writer_avatar => '4.jpg',
		writer_name => 'Carol Schwimmer',
		writer_level => 'MBA, premium writer',
		work_topic => 'Microfinance in the UK banking industry',
		work_doctype => 'Dissertation',
		work_level => 'Master’s',
		work_urgency => '2 months',
		work_price => '$601.99',
		work_check_resource => 'Plagium'
	),
	array(
		writer_avatar => '3.jpg',
		writer_name => 'Richard Caver',
		writer_level => 'D.Sc., top writer.',
		work_topic => 'Volcano eruptions: causes and effects',
		work_doctype => 'Research paper',
		work_level => 'MHigh school',
		work_urgency => '48 hours',
		work_price => '$33.83',
		work_check_resource => 'Copyscape'
	),
	array(
		writer_avatar => '10.jpg',
		writer_name => 'Petra Hamilton',
		writer_level => 'D.Sc., premium writer',
		work_topic => 'Fiscal policy and its impact on economic crisis',
		work_doctype => 'Coursework',
		work_level => 'Master’s',
		work_urgency => '5 days',
		work_price => '$129.57',
		work_check_resource => 'Grammarly'
	),
	array(
		writer_avatar => '5.jpg',
		writer_name => 'Matthew Katz',
		writer_level => 'MEng, premium writer',
		work_topic => 'Obstacles in construction of high-speed rail',
		work_doctype => 'Research paper',
		work_level => 'Undergraduate',
		work_urgency => '7 days',
		work_price => '$83.79',
		work_check_resource => 'Copyscape'
	),
	array(
		writer_avatar => '11.jpg',
		writer_name => 'Melissa L. Martinez',
		writer_level => 'M.Sc., advanced writer',
		work_topic => 'Risk modelling and analysis',
		work_doctype => 'Statistics project',
		work_level => 'Undergraduate',
		work_urgency => '7 days',
		work_price => '$79.26',
		work_check_resource => 'Copyscape'
	),
	array(
		writer_avatar => '12.jpg',
		writer_name => 'Natalie Friedman',
		writer_level => 'M.D., first-class writer',
		work_topic => 'Barriers in adopting information technology in USA healthcare',
		work_doctype => 'Assignment',
		work_level => 'Master’s',
		work_urgency => '10 days',
		work_price => '$72.84',
		work_check_resource => 'Copyscape'
	),
	array(
		writer_avatar => '6.jpg',
		writer_name => 'Lee Stone',
		writer_level => 'Ph.D., premium writer',
		work_topic => 'Strategic management in HR',
		work_doctype => 'Thesis proposal',
		work_level => 'Ph.D.',
		work_urgency => '10 days',
		work_price => '$118.74',
		work_check_resource => 'Plagium'
	),
	array(
		writer_avatar => '3.jpg',
		writer_name => 'Richard Caver',
		writer_level => 'D.Sc., top writer.',
		work_topic => 'Volcano eruptions: causes and effects',
		work_doctype => 'Research paper',
		work_level => 'MHigh school',
		work_urgency => '48 hours',
		work_price => '$33.83',
		work_check_resource => 'Copyscape'
	),
	array(
		writer_avatar => '10.jpg',
		writer_name => 'Petra Hamilton',
		writer_level => 'D.Sc., premium writer',
		work_topic => 'Fiscal policy and its impact on economic crisis',
		work_doctype => 'Coursework',
		work_level => 'Master’s',
		work_urgency => '5 days',
		work_price => '$129.57',
		work_check_resource => 'Grammarly'
	),
	array(
		writer_avatar => '5.jpg',
		writer_name => 'Matthew Katz',
		writer_level => 'MEng, premium writer',
		work_topic => 'Obstacles in construction of high-speed rail',
		work_doctype => 'Research paper',
		work_level => 'Undergraduate',
		work_urgency => '7 days',
		work_price => '$83.79',
		work_check_resource => 'Copyscape'
	),
); ?>

<!--SAMPLES-->
<section class="site_samples">
	<div class="container">
		<div class="site_section-title">Samples</div>
		<div class="items-wrap">
			<div class="row">
				<div <?php echo $slider; ?>>
					<?php foreach ($samples as $k => $item): ?>
						<div class="col-md-4 col-sm-6 col col-<?php echo ++$k; ?>">
							<div class="item">
								<div class="img-wrap"><img class="writer-avatar" src="<?php bloginfo('template_url'); ?>/img/avatars/<?php echo $item[writer_avatar]; ?>"/></div>
								<div class="writer-name"><?php echo $item[writer_name]; ?></div>
								<div class="writer-level"><?php echo $item[writer_level]; ?></div>
								<div class="work-topic"><span><?php echo $item[work_topic]; ?></span></div>
								<div class="text-wrap">
									<span class="work-type"><?php echo $item[work_doctype]; ?>,</span>
									<span class="work-level"><?php echo $item[work_level]; ?></span>
								</div>
								<div class="text-wrap">
									<span class="work-urgency"><?php echo $item[work_urgency]; ?></span>
									<span class="work-price"><?php echo $item[work_price]; ?></span>
								</div>
								<div class="text-wrap">
									<span class="work-uniqueness">100% Uniqueness</span>
									<span class="work-check-resource"><?php echo $item[work_check_resource]; ?></span>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>
