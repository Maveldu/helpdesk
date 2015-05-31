<?php error_reporting(0);?>
<div class='container'>
	<a class='btn btn-primary' href="<?php echo $config["siteUrl"]."faqs/showOne/".$precedent->getId();?>" style='width:150px;margin-top:25px;'>
		<< Pr&eacute;cedent
	</a>
	<a class='btn btn-primary' href="<?php echo $config["siteUrl"]."faqs/showOne/".$suivant->getId();?>" style='width:150px;margin-top:25px;'>
		Suivant >>
	</a><br/>
	<div class='panel panel-primary' style='margin-top:20px;'>
		<div class='panel-heading'>
			<h2 class='panel-title' style='height:18px;'>
				<div>
					Base de connaissances - <?php echo $actuel->getId();?>
				</div>
			</h2>
		</div>
		<div class='panel-body'>
			<table class='table table-striped'>
				<tbody>
					<tr>
						<td>
							<div>Titre : <?php echo $actuel->getTitre();?></div>
						</td>
					</tr>
					<tr>
						<td>
							<div><?php echo $actuel->getContenu()?></div>
						</td>
					</tr>
					<tr>
						<td>
							<div>Auteur : <?php echo $actuel->getUser();?></div>
						</td>
					</tr>
					<tr>
						<td>
							<div>Date cr&eacute;ation : <?php echo $actuel->getDateCreation();?></div>
						</td>
					</tr>
					<tr>
						<td>
							<div>Version : <?php echo $actuel->getVersion();?></div>
						</td>
					</tr>
					<tr>
						<td>
							<div>Nombre de vues : <?php echo $actuel->getPopularity();?></div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>