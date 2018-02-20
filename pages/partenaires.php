<?php $title = 'Partenaires // Moova Pro'; ?>

<div style="padding-top: 5vh"></div>

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 text-center">
			<div class="well">
				<h1>Partenaires</h1>
				<?php foreach(collection("Marques")->find()->limit(99)->sort(['custom-order'=>1]) as $marques):
					if($marques['pdf']){
						$lien = str_replace('site:', '/', $marques['pdf']);
					} else{
						$lien = $marques['url'];
					} ?>
					<a href="<?= $lien; ?>" class="col-md-3 text-center" target="_blank">
						<?= thumbnail($marques["img"]);?>	
					</a>

				<?php endforeach;?>	
		</div>
	</div>
</div>

<style>
	.well h1 {
		border-bottom:1px solid #132b2d;
		padding-bottom:40px;
		margin:0;
	}
	main{
		background-image: url('/assets/motifs.svg'); 
		background-color: #132b2d;
	}
	.well img {
		margin:20px 0px 0px -12px;
		border-bottom:1px solid #132b2d;
		padding-bottom:20px;
	}

</style>