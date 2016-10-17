<?php $counters = array(
	array(
		num => 928,
		text => 'British writers',
	),
	array(
		num => 12758,
		text => 'Customers',
	),
	array(
		num => 40506,
		text => 'Completed papers',
	),
	array(
		num => 86,
		text => 'Customer retention',
	),
); ?>

<!--COUNTERS-->
<section class="counters">
	<div class="container">
		<div class="row">
			<?php
				$count = count($counters);
				foreach ($counters as $k => $item) : ?>
				<div class="col-sm-6 col-md-3 counters__col counters__col-<?php echo ++$k; ?>">
					<div class="counters__item">
						<div class="counters__num"><span class="counter"><?php echo $item[num]; ?></span><?php if ($k === $count) echo "%"; ?></div>
						<div class="counters__text"><?php echo $item[text]; ?></div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
