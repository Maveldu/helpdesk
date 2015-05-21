<?php 
if ($_SESSION["user"]==''){
	echo "<div class='alert alert-danger'>Vous devez &ecirc;tre connect&eacute;s pour poster un ticket</div>";
}
?>
<form method='post' action='Tickets/update'>
	<input type="hidden" name="id" value="<?php echo $ticket->getId()?>">
	<input type="hidden" name="idStatut" value="1">
	<input type="hidden" name="idUser" value="<?php Auth::getUser();?>">
	<div class='breadcrumb'><br/>
		<select name='type'>
			<?php echo Gui::select(array("Demande","Incident"),$ticket->getType(),"S&eacute;lectionnez un type...")?>
		</select>
	</div>
	<div class='breadcrumb'><br/>
		<select name='idCategorie' size='1'>
			 <?php echo Gui::select(DAO::getAll("Categorie"),$ticket->getCategorie(),"Sélectionner une catégorie parente...");?>
		</select>
	</div>
	<div class='breadcrumb'>
		Titre :<br/>
		<input type='text' size=50 name='titre' value="<?php echo $ticket->getTitre()?>" placeholder='Veuillez entrer un titre'/><br/>
		Description :<br/>
		<textarea name='description' cols=100 rows=15 placeholder='Veuillez donner une description'></textarea><br/>
	</div>
	<div class='breadcrumb'>
		Utilisateur :<br/>
		<input type='text' value='<?php echo Auth::getUser();?>' style='margin:5px;' size=99 readonly/><br/>
		Date :<br/>
		<input type='text' value='<?php $ticket->setDateCreation("date('d-m-Y')"); echo date('d-m-Y');?>' style='margin:5px;' readonly/><input class='btn btn-primary' type='submit' value='Envoyer' style='width:150px;margin-left:320px;'/><br/>
		Statut :<br/>
		<input type='text' value='Nouveau' style='margin:5px;' readonly/>
		<a class='btn btn-primary' href="<?php echo $config["siteUrl"]?>tickets" style='width:150px;margin-left:320px;'>
			Annuler
		</a><br/>
	</div>
</form>