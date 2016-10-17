<?php $services = array(
	array(
		icon => 'icon-circle-compass',
		title => 'Academic writing',
		text => 'We offer wide choice of subjects and paper types. We can produce anything from a simple essay to dissertation. No matter how complicated your assignment is or what topic you have to write on - quality guaranteed.',
		img => '1.svg'
	),
	array(
		icon => 'icon-tools',
		title => 'Formatting &amp; Editing',
		text => 'Editing and formatting are essential part of the writing process. Therefore our experts proofread your paper and format it according to the required style guide. You always get your task honed to perfection!',
		img => '2.svg'
	),
	array(
		icon => 'icon-lightbulb',
		title => 'Plagiarism check',
		text => 'Unique content is a priority for us. We write all papers from scratch and additionally do deep plagiarism check with special software. Such procedure ensures content uniqueness. Our clients get only 100% original paper.',
		img => '3.svg'
	),
); ?>

<!--SERVICES-INFO-->
<section class="services-info">
	<div class="container">
		<div class="row">
			<?php foreach ($services as $k => $item): ?>
				<div class="col-md-4">
					<div class="services-info__item">
						<div class="services-info__icon"><i class="<?php echo $item[icon]; ?>"></i></div>
						<?php if (0) : // hidden text ?>
							<div class="services-info__title"><?php echo $item[title]; ?></div>
							<div class="services-info__text"><?php echo $item[text]; ?></div>
						<?php endif; // END hidden text ?>
						<div class="services-info__img">
							<img src="<?php bloginfo('template_url'); ?>/img/services/<?php echo $item[img]; ?>" alt="<?php echo $item[title]; ?>" />
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
