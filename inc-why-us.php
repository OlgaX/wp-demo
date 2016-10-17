<?php
$guarantees = array(
	array(
		block_title => "While you are thinking your choice over, let CustomWritingOnline.co.uk give you reasons why we are your best option."
	),
	array(
		icon => 'icon-anchor',
		title => 'We have been in the niche for quite a long time',
		text => 'A newcomer or someone savvy? Experience makes a difference. Fortunately, CustomWritingOnline.co.uk has plenty of it. With more than seven years in the niche, we know what students need and how to fulfill their requests. People working with us are savvy writers who not only share their experience but also keep up with changes in education. This helps us understand our customers’ academic objectives and deliver the most suitable solution.'
	),
	array(
		icon => 'icon-trophy',
		title => 'We focus on quality',
		text => 'From the moment, we started our business and up till now our primary focus remains unchanged. It’s put on quality academic services. We ensure a top quality of your papers not only writing them from scratch but also through checking them up. We control everything from plagiarism to vocabulary enhancement and paper formatting. In the end, we deliver authentic content that complies with the strictest requirements.'
	),
	array(
		icon => 'icon-genius',
		title => 'We are fast and flexible',
		text => 'We understand that if you break deadline you will have more troubles than if you would submit a topic-irrelevant paper. That’s why we never procrastinate and complete your order on time. We take even urgent tasks with 5 hours given to cope with them. So if your deadline is looming, don’t waste your time, leave urgent paper to us.'
	),
	array(
		icon => 'icon-shield',
		title => 'We are caring and can listen',
		text => 'We listen to what our customers say and then deliver the result that makes them cry: “Yes, that’s exactly what I wanted to get!”Our writers follow all specifications given by the customer and make necessary changes. We reckon that at our company you will understand the meaning of the word “custom.” This means we write papers your way.'
	),
	array(
		icon => 'icon-layers',
		title => 'We have stable pricing',
		text => 'Few academic companies can boast of stable costs. CustomWritingOnline.co.uk is an exceptional service that keeps pricing affordable for students and doesn’t raise them. Added to reasonable costs, we have discounts and customer-oriented programs. So if you are looking for the best deal – CustomWritingOnline.co.uk is the right place.'
	),
);
?>

<!--WHY US-->
<section class="why-us">
	<div class="section-title">
		<div class="container">Why Choose Us for Academic Help?</div>
	</div>
	<div class="container">
		<div class="why-us__items-wrap">
			<?php
				$count = count($guarantees);
				foreach ($guarantees as $k => $item) :
				++$k;
				$new_row = ($k % 2 == 0) ? false : true; ?>

				<?php if ($new_row) : ?><div class="row"><?php endif;?>

					<?php if ($k === 1) : ?>
						<div class="col-sm-6">
							<div class="why-us__block-title"><?php echo $item[block_title]; ?></div>
						</div>
					<?php else : ?>

					<div class="col-sm-6">
						<div class="why-us__item">
							<div class="why-us__icon"><i class="<?php echo $item[icon]; ?>"></i></div>
							<div class="why-us__desc">
								<div class="why-us__title"><?php echo $item[title]; ?></div>
								<div class="why-us__text"><?php echo $item[text]; ?></div>
							</div>
						</div>
					</div>

				<?php endif; ?>

				<?php if (!$new_row || $k === $count) : ?></div><?php endif; ?>

			<?php endforeach; ?>
		</div>
	</div>
</section>
