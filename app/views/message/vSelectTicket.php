<?php
error_reporting(0);
if ($_SESSION["user"]==''){
	echo "<div class='alert alert-danger'>Vous devez &ecirc;tre connect&eacute;s pour poster un message</div>";
}
if (isset($_POST['idTicket'])) {
	$ticketselection=$_POST['idTicket'];
	header('Location: '.$ticketselection);
}
?>
<div class='breadcrumb'>	
	<form method='post' action='Messages/frm/'>
		<select class='form-control' name='idTicket'>
			<?php
				echo Gui::select(DAO::getAll("Ticket"),$ticket,"S&eacute;lectionnez un ticket...");
			?>
		</select>
		<input class='btn btn-primary' type='submit' value='Selectionner le ticket' style='width:150px;margin-top:25px;'/>
	</form>
</div>
