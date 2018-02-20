<?php if(!get_param($_GET['get'], 2)): ?>

<?php $title = 'Nos réalisations // Moova Pro'; ?>

<div style="padding-top: 35vh"></div>

<section id="cta" class="cta">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-xs-6 text-center col-md-offset-4">
				<a href="/<?= get_param($_GET['get'], 1); ?>/restauration"><i class="fa fa-coffee" aria-hidden="true"></i><span style="font-size:16px">Restauration</span></a>
			</div>
			<div class="col-md-2 col-xs-6 text-center">
				<a href="/<?= get_param($_GET['get'], 1); ?>/hotellerie"><i class="fa fa-bed" aria-hidden="true"></i><span style="font-size:16px">Hôtellerie</span></a>
			</div>
<!--
			<div class="col-md-2 col-xs-4 text-center">
				<a href="/<?= get_param($_GET['get'], 1); ?>/autres"><i class="fa fa-desktop" aria-hidden="true"></i><span>Autres</span></a>
			</div>
-->
		</div>
	</div>
</section>

<style>body{ background-image: url('<?= thumbnail_url(cockpit('regions:region_field', 'Réalisations', 'img', 'value'), 1560, 948); ?>'); }</style>

<?php endif; ?>

<?php if(get_param($_GET['get'], 2) && !get_param($_GET['get'], 3)): ?>

<?php $title = ucfirst(get_param($_GET['get'], 2)).' // Moova Pro'; ?>

<section id="cta_listing" class="cta">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-center col-md-offset-3">
				<a href="/<?= get_param($_GET['get'], 1); ?>/restauration"><i class="fa fa-coffee" aria-hidden="true"></i></a>
				<a href="/<?= get_param($_GET['get'], 1); ?>/hotellerie"><i class="fa fa-bed" aria-hidden="true"></i></a>
<!-- 				<a href="/<?= get_param($_GET['get'], 1); ?>/autres"><i class="fa fa-desktop" aria-hidden="true"></i></a> -->
			</div>
		</div>
	</div>
</section>

<section id="listing">
	<div class="row">
		
		<?php foreach(collection("Réalisations")->find(['secteur'=>get_param($_GET['get'], 2)]) as $realisation): ?>
		
		<div class="col-md-6 text-center" style="background-image: url('<?= thumbnail_url($realisation['img'], 800, 400); ?>')">
			<a href="/<?= get_param($_GET['get'], 1); ?>/<?= $realisation['secteur']; ?>/<?= $realisation['titre_slug']; ?>">
				<div style="padding-top: 15vh"></div>
				<h2><?= $realisation['titre']; ?></h2>
				<small><?= $realisation['lieux']; ?></small>
				<div style="padding-top: 15vh"></div>
			</a>
		</div>

		<?php endforeach; ?>
				
	</div>
</section>

<style>footer{ position: relative; background: rgba(0, 90, 99, 0.9) !important; } main{ background-image: url('/assets/motifs.svg'); }</style>

<?php endif; ?>

<?php if(get_param($_GET['get'], 3)): ?>

<?php $realisation = collection("Réalisations")->findOne(['titre_slug'=>get_param($_GET['get'], 3)]); ?>

<?php $title = $realisation['titre'].' // Moova Pro'; ?>

<section id="cta_listing" class="cta">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<a href="/<?= get_param($_GET['get'], 1); ?>/restauration"><i class="fa fa-coffee" aria-hidden="true"></i></a>
				<a href="/<?= get_param($_GET['get'], 1); ?>/hotellerie"><i class="fa fa-bed" aria-hidden="true"></i></a>
<!-- 				<a href="/<?= get_param($_GET['get'], 1); ?>/autres"><i class="fa fa-desktop" aria-hidden="true"></i></a> -->
			</div>
		</div>
	</div>
</section>

<section id="premier_plan">
	<div class="container">
		<div style="padding-top: 32vh" class="visible-xs-block"></div>
		<div style="padding-top: 20vh" class="visible-md-block visible-lg-block"></div> <!-- id="cale_rwd" -->
		<div class="row">
			<div class="col-md-4">
				<div class="well">
					<h1><?= $realisation['titre']; ?></h1>
					<p style="font-weight:400;"><i class="fa fa-map-marker" aria-hidden="true"></i> <?= $realisation['lieux']; ?></p>
					<?= $realisation['text']; ?>
				</div>
				<a class="left carousel-control" href="#slide" role="button" data-slide="prev"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>							<a class="right carousel-control" href="#slide" role="button" data-slide="next"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</section>

<div id="slide" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner" role="listbox">
		
		<?php $i = 1; foreach($realisation['gallery'] as $gallery): ?>
		<div class="item <?php if($i++==1){ echo 'active'; } ?>">
			<div class="row">
				<div class="row">
					<div class="col-md-9 col-md-offset-3">
						<img src="<?= thumbnail_url($gallery['path'], 1500, 750); ?>" class="col-md-12">
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>

<style>footer{ background: rgba(0, 90, 99, 1) !important; } main{ background-image: url('/assets/motifs.svg'); }</style>

<?php endif; ?>