<?php $title = 'Contact // Moova Pro'; ?>

<div class="visible-md-block visible-lg-block" style="padding-top: 20vh" id="calle_desktop"></div>
<div class="visible-xs-block" style="padding-top: 20vh"></div>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-8">
			<div class="well text-justify">
				<?= cockpit('regions:region_field', 'Contact', 'text', 'value'); ?>
			</div>
		</div>
	</div>
</div>

<style>body{ background-image: url('<?= thumbnail_url(cockpit('regions:region_field', 'Contact', 'img', 'value'), 1560, 948); ?>'); }</style>

<script type="text/javascript">
	$( "#calle_desktop" ).animate({
		paddingTop : '25vh'
	}, 700, function(){});	
</script>