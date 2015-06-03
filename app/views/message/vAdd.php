<?php
error_reporting(1);
?>
<div class='breadcrumb'>
	<div style='float:left;'>
		<?php echo $userActuel; ?> - <strong> <?php echo $ticket->getTitre() ?></strong>
	</div>
	<div style='float:right;'>
		<?php echo date('Y-m-d H:i:s'); ?>
	</div>
	<form method='post' action='Messages/update'>
		<input class='form-control' type="hidden" name="id" value="">
		<input class='form-control' type="hidden" name="idUser" value="<?php echo $userActuel;?>">
		<input class='form-control' type="hidden" name="idTicket" value="<?php echo $ticket->getId();?>">
		<textarea class='form-control' name='contenu'></textarea><br/>
		<input class='btn btn-primary' type='submit' value='Envoyer' style='width:150px;'/><br/>
	</form>
		
</div>