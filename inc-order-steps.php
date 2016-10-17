<?php $steps = array(
	array(
		icon => 'icon-clipboard',
		text => 'Leave us your order request',
	),
	array(
		icon => 'icon-chat',
		text => 'We will reach out to you to verify the details',
	),
	array(
		icon => 'icon-edit',
		text => 'Once the order is approved it gets into our system and we assign a writer who will finish your paper on time',
	),
	array(
		icon => 'icon-download',
		text => 'You get a completed project hassle free',
	),
); ?>

<!--ORDER-STEPS-->
<section id="order_steps" class="order-steps">
	<?php if (!is_page_template('page-how-to-order.php')) : ?>
		<div class="section-title">
			<div class="container">Four simple steps to complete an order</div>
		</div>
	<?php endif; ?>
	<div class="container">
		<div class="row">
			<?php foreach ($steps as $k => $item): ?>
				<div class="col-sm-3 order-steps__col-<?php echo ++$k; ?>">
					<div class="order-steps__item">
						<div class="order-steps__icon"><i class="<?php echo $item[icon]; ?>"></i></div>
						<div class="order-steps__text"><?php echo $item[text]; ?></div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
