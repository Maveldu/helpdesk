<div class='panel panel-primary'>
	<div class='panel-heading'>
		<h2 class='panel-title' style='height:18px;'>
			Sujets les plus r&eacute;cents
		</h2>
	</div>
	<div class='panel-body'>
		<?php
		$i=0;
		while ($i <= 10){
			if (isset($articles[$i])){
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
			}
			$i+=1;
		}
		error_reporting(1);
		?>
	</div>
</div>