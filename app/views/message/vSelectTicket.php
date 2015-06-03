<?php
error_reporting(0);
if (isset($_POST['idTicket'])) {
	$ticketselection=$_POST['idTicket'];
	header('Location: '.$ticketselection);
}
error_reporting(1);
?>
<div class='breadcrumb'>	
	<form method='post' action='Messages/frm/'>
		<select class='form-control' name='idTicket'>
			<?php
				echo Gui::select($tickets,$idTicket,"S&eacute;lectionnez un ticket...");
			?>
		</select>
		<input class='btn btn-primary' type='submit' value='Selectionner le ticket' style='width:150px;margin-top:25px;'/>
	</form>
</div>
