<?php 
error_reporting(0);
?>
<form method='post' action='Tickets/update'>
	<input class='form-control' type="hidden" name="id" value="">
	<div class='breadcrumb'><br/>
		<select class='form-control' name='type'>
			<?php echo Gui::select(array("Demande","Incident"),$ticket->getType(),"S&eacute;lectionnez un type...")?>
		</select>
	</div>
	<div class='breadcrumb'><br/>
		<select class='form-control' name='idCategorie' size='1'>
			 <?php echo Gui::select(DAO::getAll("Categorie"),$ticket->getCategorie(),"Sélectionner une catégorie parente...");?>
		</select>
	</div>
	<div class='breadcrumb'>
		Titre :<br/>
		<input class='form-control' type='text' size=50 name='titre' value="<?php echo $ticket->getTitre()?>" placeholder='Veuillez entrer un titre'/><br/>
		Description :<br/>
		<textarea class='form-control' name='description' cols=100 rows=15 placeholder='Veuillez donner une description'></textarea><br/>
	</div>
	<div class='breadcrumb'>
		Utilisateur :<br/>
		<input class='form-control' type='text' value='<?php echo Auth::getUser();?>' style='margin:5px;' size=99 readonly/><br/>
		Date :<br/>
		<input class='form-control' type='text' value='<?php echo date('Y-m-d');?>' style='margin:5px;' readonly/><br/>
		Statut :<br/>
		<input class='form-control' type='text' value='Nouveau' style='margin:5px;' readonly/><br/>
		<input class='btn btn-primary' type='submit' value='Envoyer' style='width:150px;'/><br/>
		<input class='form-control' type="hidden" name="Statut" value="1">
		<a class='btn btn-primary' href="<?php echo $config["siteUrl"]?>tickets" style='width:150px;margin-top:25px;'>
			Annuler
		</a><br/>
	</div>
</form>