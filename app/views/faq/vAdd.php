<form method='post' action='Faqs/update'>
	<input class='form-control' type="hidden" name="id" value="">
	<div class='breadcrumb'><br/>
		<select class='form-control' name='idCategorie' size='1'>
			 <?php echo Gui::select($categories,$article->getCategorie(),"Sélectionner une catégorie parente...");?>
		</select>
	</div>
	<div class='breadcrumb'>
		Titre :<br/>
		<input class='form-control' type='text' size=50 name='titre' value="<?php echo $article->getTitre()?>" placeholder='Veuillez entrer un titre'/><br/>
		Contenu :<br/>
		<div class='container'>
		</div>
			<textarea id='editor' name='contenu'>Entrez votre article</textarea>
				<?php echo JsUtils::execute("CKEDITOR.replace('editor');");?>
	</div>
	<div class='breadcrumb'>
		Utilisateur :<br/>
		<input class='form-control' type='text' value='<?php echo $userActuel;?>' style='margin:5px;' size=99 readonly/><br/>
		Date :<br/>
		<input class='form-control' type='text' value='<?php echo date('Y-m-d');?>' style='margin:5px;' readonly/><br/>
		Version :<br/>
		<input class='form-control' type='text' value='1.0' style='margin:5px;' readonly/><br/>
		<input class='btn btn-primary' type='submit' value='Envoyer' style='width:150px;'/><br/>
		<input class='form-control' type="hidden" name="popularity" value="0">
		<a class='btn btn-primary' href="<?php echo $config["siteUrl"]?>faqs" style='width:150px;margin-top:25px;'>
			Annuler
		</a><br/>
	</div>
</form>