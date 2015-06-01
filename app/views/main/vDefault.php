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
</div>