<div class="container">
	<div class='panel panel-info'>
		<div class='panel-heading'>
			<h2 class='panel-title' style='height:18px;'>
				<span style='float:left;'>
					Mes tickets
				</span>
				<span style='float:right;'>
					Nombre
				</span>
			</h2>
		</div>
		<div class='panel-body'>
			<table class='table table-striped'>
				<tr>
					<td>
						<div style='float:left;'>
							Nouveau
						</div>
						<div style='float:right;'>
							<?php echo $nouveau;?>
						</div>
					</td>
				</tr>
			</table>
			<table class='table table-striped'>
				<tr>
					<td>
						<div style='float:left;'>
							Attribu&eacute;
						</div>
						<div style='float:right;'>
							<?php echo $attribue;?>
						</div>
					</td>
				</tr>
			</table>
			<table class='table table-striped'>
				<tr>
					<td>
						<div style='float:left;'>
							R&eacute;solu
						</div>
						<div style='float:right;'>
							<?php echo $resolu;?>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<a class="btn btn-default" style='margin-bottom:16px;' href="tickets/frm">Cr&eacute;er un ticket</a>
	<div class='panel panel-primary'>
		<div class='panel-heading'>
			<h2 class='panel-title' style='height:18px;'>
				Base de connaissances : sujets les plus r&eacute;cents
			</h2>
		</div>
		<div class='panel-body'>
			<?php
			error_reporting(0);
			$i=0;
			while ($i <= 10){
				echo "
					<table class='table table-striped'>
						<tr>
							<td>
								<a href='faqs/showOne/".$articles[$i]->getId()."' style='float:left;'>
									".$articles[$i]->getTitre()."
								</a>
								<div style='float:right;'>
									".$articles[$i]->getDateCreation()."
								</div>
							</td>
						</tr>
					</table>
				";
				$i+=1;
			}
			error_reporting(1);
			?>
		</div>
	</div>
</div>