<?php require_once('lib/lib.php'); ?>

<!DOCTYPE HTML>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link rel="icon" type="image/png" href="/assets/fav-iconne.png">

	<title><?= get_title(get_page($_GET['get'])); ?></title>
	<!-- LIB -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<!-- BOOTSRAP -->
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
	<!-- CUSTOM -->
	<link rel="stylesheet" href="/assets/style.css?v=<?= date('Ymdhis'); ?>">
	<link rel="stylesheet" href="/assets/mob.css?v=<?= date('Ymdhis'); ?>">
</head>
<body id="body-page-<?= get_page($_GET['get']); ?>">
	
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-2 visible-md-block visible-lg-block">
				<a href="/"><img src="/assets/logo.svg" id="logo"></a>				
			</div>
			<div class="col-md-10 col-xs-12">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<div class="visible-xs-block col-xs-4">
							<a href="/"><img src="/assets/logo.svg"></a>				
						</div>							
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" style="border-radius:0">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					
					<div class="collapse navbar-collapse" id="main_nav">
						<ul class="nav navbar-nav navbar-right">
							<li <?php if(get_page($_GET['get'])=='presentation'){ echo 'class="active"'; } ?>>
								<a href="/presentation">PRÉSENTATION</a>
							</li>
							<li <?php if(get_page($_GET['get'])=='realisations'){ echo 'class="active"'; } ?>>
								<a href="/realisations">RÉALISATIONS</a>
							</li>
							<li <?php if(get_page($_GET['get'])=='contact'){ echo 'class="active"'; } ?>>
								<a href="/contact">CONTACT</a>
							</li>
							<li <?php if(get_page($_GET['get'])=='projet'){ echo 'class="active"'; } ?>>
								<a href="/projet"><span id="btn_projet"><span>VOTRE PROJET<br>SUR-MESURE</span></span></a>
							</li>
							<li id="rs">
								<?php if(cockpit('regions:region_field', 'Réseaux sociaux', 'fb', 'value')): ?>
								<a href="<?= cockpit('regions:region_field', 'Réseaux sociaux', 'fb', 'value'); ?>" target="_blank">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
								<?php endif; ?>

								<?php if(cockpit('regions:region_field', 'Réseaux sociaux', 'ig', 'value')): ?>
								<a href="<?= cockpit('regions:region_field', 'Réseaux sociaux', 'ig', 'value'); ?>" target="_blank">
									<i class="fa fa-instagram" aria-hidden="true"></i>
								</a>
								<?php endif; ?>
								
								<?php if(cockpit('regions:region_field', 'Réseaux sociaux', 'pt', 'value')): ?>
								<a href="<?= cockpit('regions:region_field', 'Réseaux sociaux', 'pt', 'value'); ?>" target="_blank">
									<i class="fa fa-pinterest-p" aria-hidden="true"></i>
								</a>
								<?php endif; ?>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>
	
<main>	
	<?= get_view(get_page($_GET['get'])); ?>
</main>

<?php if(get_page($_GET['get'])!='home'): ?>
<footer class="visible-md-block visible-lg-block">
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<a href="#partenaires_marques" id="partenaires_marques">PARTENAIRES <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
			</div>
			<div class="col-md-8 text-center">
				<div class="row">
					<?php foreach(collection("Marques")->find()->limit(4)->sort(['custom-order'=>1]) as $marques): 
						
						if($marques['pdf']){
							$lien = str_replace('site:', '/', $marques['pdf']);
						} else{
							$lien = $marques['url'];
						} ?>
						<a href="<?= $lien; ?>" class="col-md-3 text-center" target="_blank"><?= thumbnail($marques["img"]);?></a>					
					<?php endforeach;?>
					<div id="collapseMarques">
					<?php foreach(collection("Marques")->find()->limit(99)->skip(4)->sort(['custom-order'=>1]) as $marques):
						if($marques['pdf']){
							$lien = str_replace('site:', '/', $marques['pdf']);
						} else{
							$lien = $marques['url'];
						} ?>
						<a href="<?= $lien; ?>" class="col-md-3 text-center" target="_blank"><?= thumbnail($marques["img"]);?></a>					
					<?php endforeach;?>
					</div>
				</div>
			</div>
			<div class="col-md-2 text-right">
				<a href="/mentions-legales">Mentions légales</a>
			</div>
		</div>
	</div>
</footer>	





<!-- footer responsive -->

<footer class="visible-xs-block visible-sm-block" style="position:relative; background:rgba( 0, 60, 65, 0.9)">
	<div class="container">
		<div class="row" style="display:flex; justify-content:space-around; align-items:center;">
				<a href="/partenaires" id="partenaires_marques" style="font-size:2vh; font-weight:400; line-height:1; padding:8px; border:1px solid #73aeb7">Partenaires</a>
				<a href="/mentions-legales" style="font-size:2vh">Mentions légales</a>
				</div>
	
</footer>


<?php endif; ?>

<script type="text/javascript" src="/assets/script.js"></script>

</body>
</html>