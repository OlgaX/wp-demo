<?php $top_block = array(
	array(
		title => "Best online essay writing helper</br> to make all the work for you",
		text => "
		<ul>
			<li>100% uniqueness</li>
			<li>Support 24/7</li>
			<li>Delivery on times</li>
		</ul>"
	),
	array(
		title => "A Reliable online guide for</br> academic paper writing",
		text => "Offer you a range of support to help you think through</br> and write an creative paper work"
	),
	array(
		title => "Help to resist procrastination</br> when you have an essay deadline",
		text => "Order any type of a university paper by just one click"
	),
);?>

<!--TOP-BLOCK-->
<section class="top-block">
		<ul id="top_block_slider" class="top-block__slider">
			<?php foreach ($top_block as $k => $item) : ?>
				<li class="top-block__slide top-block__slide-<?php echo ++$k; ?>">
						<div class="container">
							<div class="top-block__content">
								<div class="top-block__title"><?php echo $item[title]; ?></div>
								<div class="top-block__text"><?php echo $item[text]; ?></div>
							</div>
							<div class="site_btn-wrap">
								<a href="/order" class="btn btn-default site_big-btn">Order Your Paper Now</a>
							</div>
						</div>
				</li>
			<?php endforeach; ?>
		</ul>
</section>
