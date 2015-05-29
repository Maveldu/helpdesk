<?php
error_reporting(1);
?>

<div class='panel panel-primary'>
	<div class='panel-heading'>
		<h2 class='panel-title' style='height:18px;'>
			<span style='float:left;'>
				Nom du ticket : <?php echo $ticket->getTitre() ?>
			</span>
			<span style='float:right;'>
				Statut du ticket : <?php echo $ticket->getStatut() ?>
			</span>
		</h2>
	</div>
	<div class='panel-body'>
		<div class='form-control' style='height:auto;'><?php echo $ticket->getDescription()?></div><br/>
		<span class='form-control' style='width:49%;float:left;'><?php echo $ticket->getUser()?></span>
		<span class='form-control' style='width:49%;float:right;'><?php echo $ticket->getDateCreation()?></span>
	</div>
</div>
<div class='panel panel-info'>
	<div class='panel-heading'>
		<h2 class='panel-title' style='height:18px;'>
			<?php echo $nbmessages ?> message(s)
		</h2>
	</div>
	<div class='panel-body'>
		Message(s) :
	</div>
	<table class='table table-striped'>
		<tbody>
		<?php
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
						".$message->getContenu()
			;
			if ($userActuel==$message->getUser()) {
				echo "	
						<a class='btn btn-primary' href='".$config["siteUrl"]."Messages/delete/".$message->getId()."' style='width:150px;margin-top:25px;margin-left:10px;float:right;'>
							Supprimer
						</a>
						<a class='btn btn-primary' href='".$config["siteUrl"]."Messages/frm/".$ticket->getId()."/".$message->getId()."' style='width:150px;margin-top:25px;float:right;'>
							&Eacute;diter
						</a>
				";	
			}
			echo "
					</td>
				</tr>
			
			";

		}
?>
		</tbody>
	</table>
</div>
