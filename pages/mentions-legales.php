<?php $title = 'Mentions légales // Moova Pro'; ?>

<div class="visible-xs-block visible-sm-block visible-md-block visible-lg-block" style="padding-top: 20vh"></div>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="well text-justify">
				<?= cockpit('regions:region_field', 'Mentions légales', 'text', 'value'); ?>
			</div>
		</div>
	</div>
</div>

<style>body{ background-image: url('<?= thumbnail_url(cockpit('regions:region_field', 'Mentions légales', 'img', 'value'), 1560, 948); ?>'); }</style>