<?php
error_reporting(1);
?>
<div class='breadcrumb'>
	<div style='float:left;'>
		<?php echo $messageedit->getUser(); ?> - <strong> <?php echo $messageedit->getTicket()->getTitre() ?></strong>
	</div>
	<div style='float:right;'>
		<?php echo $messageedit->getDate() ?>
	</div>
	<form method='post' action='Messages/update'>
		<input class='form-control' type="hidden" name="id" value="<?php echo $messageedit->getId()?>">
		<input class='form-control' type="hidden" name="date" value="<?php echo $messageedit->getDate()?>">
		<textarea class='form-control' name='contenu'><?php echo $messageedit->getContenu() ?></textarea><br/>
		<input class='btn btn-primary' type='submit' value='Modifier' style='width:150px;'/><br/>
	</form>
		
</div>