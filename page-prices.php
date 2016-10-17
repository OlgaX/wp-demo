<?php get_header(); ?>

<!--TOP-BLOCK-->
<section class="top-block">
	<div class="container">
		<div class="top-block__title">What influences the order price?</div>
	</div>
</section>

<?php get_template_part('inc', 'prices-info'); ?>

<!--PRICES-->
<section class="prices">
	<div class="section-title">
		<div class="container">Our prices</div>
	</div>
	<div class="container">
		<div data-crm-widget="prices"></div>
	</div>
</section>

<?php get_template_part('inc', 'service-desc'); ?>
<?php get_template_part('inc', 'order-steps'); ?>
<?php get_template_part('inc', 'discount'); ?>

<?php get_footer(); ?>
