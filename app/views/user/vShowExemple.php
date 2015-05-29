<h1><?php echo $title?></h1>
<div class='panel panel-default'>
	<strong>
	<?php echo $utilisateur->getLogin()?>
	</strong><br>
	<?php echo $utilisateur->getMail()?>
	<fieldset>
		<legend>Tickets</legend>
		<ul>
		<?php 
		foreach ($tickets as $ticket){
			echo "<li>".$ticket."</li>";
		}
		?>
		</ul>
	</fieldset>
</div>