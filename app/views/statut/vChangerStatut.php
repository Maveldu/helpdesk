<?php
error_reporting(1);
?>
<div class='breadcrumb'>
	<div style='float:left;'>
		<?php echo $ticket->getUser(); ?> - <strong> <?php echo $ticket->getTitre() ?></strong> - <?php echo $ticket->getStatut() ?>
	</div>
	<div style='float:right;'>
		<?php echo $ticket->getDateCreation() ?>
	</div>
	<form method='post' action='Tickets/update'>
		<input class='form-control' type="hidden" name="id" value="<?php echo $ticket->getId()?>">
			<select class='form-control' name='Statut'>
				<?php echo Gui::select(DAO::getAll("Statut"),$ticket->getStatut()->getId(),"Choisir un statut...");?>
			</select><br/>
		<input class='btn btn-primary' type='submit' value='Modifier' style='width:150px;'/><br/>
	</form>
		
</div>