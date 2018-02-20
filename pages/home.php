<?php $title = 'Moova Pro'; ?>

<div style="padding-top: 45vh"></div>

<div class="text-center" id="fadein">
	<img src="/assets/logo.svg">
	<div id="slogan">mobilier professionnel</div>
</div>

<style>
	#logo-home, header{ display: none; } 
	body{ background-image: url('<?= thumbnail_url(cockpit('regions:region_field', 'Home', 'img', 'value'), 1560, 948); ?>'); }
</style>

<script type="text/javascript">
	$("#fadein").fadeIn(2500);
  
	setTimeout(function () {
	   window.location.href = "/presentation";
	}, 3500);
</script>