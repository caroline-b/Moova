<?php $title = 'Votre projet // Moova Pro'; ?>

<div class="visible-md-block visible-lg-block" style="padding-top: 10vh"></div>
<div class="visible-xs-block" style="padding-top: 10vh"></div>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="well">
				<?= cockpit('regions:region_field', 'Projet', 'text', 'value'); ?>				
				<div class="row">
					<?php form('Projet'); ?>
						<div class="col-md-6">
							<div class="form-group">
							  <div class="col-md-12">                     
								  <input name="form[nom_prenom]" type="text" placeholder="Nom et Prénom" class="form-control input-md">
							  </div>
							</div>
							<div class="form-group">
							  <div class="col-md-12">                     
								  <input name="form[email]" type="text" placeholder="E-mail" class="form-control input-md" required="true">    
							  </div>
							</div>

							<div class="form-group">
							  <div class="col-md-12">                     
								  <input name="form[secteur]" type="text" placeholder="Secteur d'activité" class="form-control input-md">    
							  </div>
							</div>
							<div class="form-group">
							  <div class="col-md-12">                     
							    <textarea class="form-control" name="form[description_societe]" placeholder="Description de la société"></textarea>
							  </div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							  <div class="col-md-12">                     
								  <input name="form[telephone]" type="text" placeholder="Tél." class="form-control input-md" required="true">    
							  </div>
							</div>
							<div class="form-group">
							  <div class="col-md-12">                     
								  <input name="form[societe]" type="text" placeholder="Nom de la société" class="form-control input-md">    
							  </div>
							</div>
							<div class="form-group">
							  <div class="col-md-4">                     
								  <input name="form[budget]" type="text" placeholder="Budget" class="form-control input-md">
							  </div>
							  <div class="col-md-8">                     
								  <input name="form[date]" type="text" placeholder="Date réalisation" class="form-control input-md">    
							  </div>
							</div>
							<div class="form-group">
							  <div class="col-md-12">                     
								  <textarea class="form-control" name="form[description_projet]" placeholder="Description de votre projet"></textarea>
							  </div>
							</div>
						</div>
						<div class="col-md-12 text-center">
							<input type="submit" class="btn btn-custom" value="Envoyer">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="visible-xs-block" style="padding-top: 10vh"></div>

<style>body{ background-image: url('<?= thumbnail_url(cockpit('regions:region_field', 'Projet', 'img', 'value'), 1560, 948); ?>'); }</style>