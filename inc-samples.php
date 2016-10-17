<?php
$samples = array(
	array(
		title => 'Essay',
		text => 'Writing can be a mind-numbing task. For error-free essays, hire one of our experts.They will write a winning piece that meets all your demands.',
		file => 'essay.pdf',
		img => '1.svg'
	),
	array(
		title => 'Argumentative essay',
		text => 'If you require a compelling argumentative essay to match your writing demands, we can provide you with a perfect solution. Order now and get 100% plagiarism-free piece of writing.',
		file => 'argumentative_essay.pdf',
		img => '2.svg'
	),
	array(
		title => 'Research papers',
		text => 'You need to cover a lot of ground to write a good research paper. But it gets easier with our help! Just tell us your topic and download a custom-made research paper when it’s due.',
		file => 'research_papers.pdf',
		img => '3.svg'
	),
	array(
		title => 'Thesis papers',
		text => 'You can rely on us for amazing thesis papers. Our writers can handle a wide range of diverse topics. Just give us your task. We are available for help 24/7.',
		file => 'thesis_papers.pdf',
		img => '4.svg'
	),
	array(
		title => 'Dissertations',
		text => 'You need to put in a lot of months to write a decent dissertation. Our writers can do it in just a week. Choose yours among a wide range of topics and subjects. Success guaranteed!',
		file => 'disseratations.pdf',
		img => '5.svg'
	),
	array(
		title => 'Book reviews',
		text => 'For those who seek good book review authors, our company is the most comprehensive choice. Simply tell us a book title and set a deadline. The rest will be taken care of.',
		file => 'book_reviews.pdf',
		img => '6.svg'
	),
);
?>

<!--SAMPLES-->
<section class="samples">
	<div class="section-title">
		<div class="container">Works and samples</div>
	</div>
	<div class="container">
		<?php
			$count = count($samples);
			foreach ($samples as $k => $item):
			++$k;
			$new_row = ($k % 2 == 0) ? false : true; ?>

			<?php if ($new_row) : ?><div class="row"><?php endif; ?>

				<div class="col-md-6">
					<div class="samples__item">
						<div class="row">
							<div class="col-sm-4">
								<div class="samples__link">
									<a href="<?php bloginfo('template_url'); ?>/samples/<?php echo $item[file]; ?>" download="<?php echo $item[file]; ?>">
										<span class="samples__link-img"><img src="<?php bloginfo('template_url'); ?>/img/icon-sample.png" alt="<?php echo $item[title]; ?> sample" /></span>
										<span class="samples__link-text">Download</span>
									</a>
								</div>
							</div>
							<div class="col-sm-8">
								<div class="samples__desc">
									<?php if (0) : // hidden text ?>
										<div class="samples__title"><?php echo $item[title]; ?></div>
										<div class="samples__text"><?php echo $item[text]; ?></div>
									<?php endif; // END hidden text ?>
									<div class="samples__img">
										<img src="<?php bloginfo('template_url'); ?>/img/samples/<?php echo $item[img]; ?>" alt="<?php echo $item[title]; ?>" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			<?php if (!$new_row || $k === $count) : ?></div><?php endif; ?>

		<?php endforeach; ?>
	</div>
</section>
