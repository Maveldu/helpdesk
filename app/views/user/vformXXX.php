<form method="post" action="utilisateurs/update">

<input type="hidden" name="id" value="<?php echo $data->getId()?>">
<input type="text" value="<?php echo $data->getLogin()?>" name="login" placeholder="Login" class="form-controller"><br>
<input type="password" value="<?php echo $data->getPassword()?>" name="password" placeholder="Password" class="form-controller"><br>
<input type="submit" value="valider" class="btn btn-default"><br>
</form>