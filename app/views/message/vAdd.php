<?php
$ticket=DAO::getOne("Ticket",$ticket->getId());
error_reporting(1);
?>
<div class='breadcrumb'>
	<div style='float:left;'>
		<?php echo Auth::getUser(); ?> - <strong> <?php echo $ticket->getTitre() ?></strong>
	</div>
	<div style='float:right;'>
		<?php echo date('Y-m-d H:i:s'); ?>
	</div>
	<form method='post' action='Messages/update'>
		<input class='form-control' type="hidden" name="id" value="<?php echo $idmessage?>">
		<input class='form-control' type="hidden" name="date" value="<?php echo date('Y-m-d H:i:s');?>">
		<input class='form-control' type="hidden" name="idUser" value="<?php echo Auth::getUser();?>">
		<input class='form-control' type="hidden" name="idTicket" value="<?php echo $ticket->getId();?>">
		<textarea class='form-control' name='contenu'></textarea><br/>
		<input class='btn btn-primary' type='submit' value='Envoyer' style='width:150px;'/><br/>
	</form>
		
</div>