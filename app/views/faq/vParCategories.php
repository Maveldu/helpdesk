<div class='panel panel-primary'>
	<div class='panel-heading'>
		<h2 class='panel-title' style='height:18px;'>
			Sujets class&eacute;s par cat&eacute;gorie
		</h2>
	</div>
	<div class='panel-body'>
		<?php
		error_reporting(0);
		foreach ($categories as $c){
			echo "
				<div class='panel panel-info'>
					<div class='panel-heading'>
						<h2 class='panel-title' style='height:18px;'>
							".$c."
						</h2>
					</div>
			";
			foreach ($articles as $a) {
				if ($a->getCategorie()==$c) {
					echo "
						<div class='panel-body'>
							<table class='table table-striped'>
								<tr>
									<td>
										<a href='faqs/showOne/".$a->getId()."' style='float:left;'>
											".$a->getTitre()."
										</a>
										<div style='float:right;'>
											".$a->getDateCreation()."
										</div>
									</td>
								</tr>
							</table>
						</div>
					";
				}
			}								
			echo "														
				</div>
			"
			;
		}
		error_reporting(1);
		?>
	</div>
</div>