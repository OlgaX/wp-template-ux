<?php get_header(); ?>

<?php get_template_part('inc', 'prices-info'); ?>

<!--TMP CONTENT (don`t forget remove me!)-->
<div class="container">
	<div class="tmp-placeholder">Price table (loop)</div>
</div>
<!--END TMP CONTENT-->

<?php get_template_part('loop'); ?>
<?php get_template_part('inc', 'calculator'); ?>

<?php get_footer(); ?>
