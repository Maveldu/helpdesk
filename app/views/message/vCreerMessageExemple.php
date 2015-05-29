<?php
error_reporting(0);
if ($_SESSION["user"]==''){
	echo "<div class='alert alert-danger'>Vous devez &ecirc;tre connect&eacute;s pour poster un message</div>";
}
if ($ticket==0){
	if (isset($_POST['idTicket'])) {
		$ticketselection=$_POST['idTicket'];
		header('Location: '.$ticketselection);
	}
	echo "
		<div class='breadcrumb'>	
			<form method='post' action='Messages/frm/'>
			<select class='form-control' name='idTicket'>
				".Gui::select(DAO::getAll("Ticket"),$ticket,"S&eacute;lectionnez un ticket...")."
			</select>
			<input class='btn btn-primary' type='submit' value='Selectionner le ticket' style='width:150px;margin-top:25px;'/>
			</form>
		</div>
	";
}					
else {
	if (isset($_POST['idTicket'])) {
		$ticketselection=$_POST['idTicket'];
		header('Location: '.$ticketselection);
	}
	error_reporting(1);
	echo "
		<div class='breadcrumb'>
			<form method='post' action='Messages/frm/'>
			<select class='form-control' name='idTicket'>
				".Gui::select(DAO::getAll("Ticket"),$ticket->getId(),"S&eacute;lectionnez un ticket...")."
			</select>
			<input class='btn btn-primary' type='submit' value='Selectionner le ticket' style='width:150px;margin-top:25px;'/>
			</form>
		</div>
	";
	$ticket=DAO::getOne("Ticket",$ticket->getId());
	echo "
		<div class='panel panel-primary'>
			<div class='panel-heading'>
				<h2 class='panel-title' style='height:18px;'>
					<span style='float:left;'>
						Nom du ticket : ".$ticket->getTitre()."
					</span>
					<span style='float:right;'>
						Statut du ticket : ".$ticket->getStatut()."
					</span>
				</h2>
			</div>
			<div class='panel-body'>
				<div class='form-control'>".$ticket->getDescription()."</div><br/>
				<span class='form-control' style='width:49%;float:left;'>".$ticket->getUser()."</span>
				<span class='form-control' style='width:49%;float:right;'>".$ticket->getDateCreation()."</span>
			</div>
		</div>
		<div class='panel panel-info'>
			<div class='panel-heading'>
				<h2 class='panel-title' style='height:18px;'>
					X message(s)	
				</h2>
			</div>
			<div class='panel-body'>
				Message(s) :
			</div>
	";
	$messages=DAO::getAll("Message","idTicket=".$ticket->getId()." order by date asc");
	echo "<table class='table table-striped'>";
	echo "<tbody>";
	foreach ($messages as $message)	{		
		echo"
			<tr>
				<td>
					<div style='float:left;'>
						".$message->getUser()." - <strong>".$message->getTicket()->getTitre()."</strong>
					</div>
					<div style='float:right;'>
						".$message->getDate()."
					</div>
				</td>
			</tr>
			<tr>
				<td>
					".$message->getContenu();
		$userActuel=Auth::getUser();
		if ($userActuel==$message->getUser()) {
			echo "<a class='btn btn-primary' href='".$config["siteUrl"]."LIEN SUIVANT' style='width:150px;margin-top:25px;float:right;'>
				&eacute;diter
			</a>";
			
		}
		echo "
				</td>
			</tr>
			
		";
		
	}	
	echo "</tbody>";
	echo "</table>";
	echo "</div>";
}



?>