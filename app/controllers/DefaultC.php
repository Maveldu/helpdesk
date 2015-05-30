<?php
class DefaultC extends \BaseController {

	public function index() {
		$this->loadView("main/vHeader",array("infoUser"=>Auth::getInfoUser()));
		if (isset($_SESSION["user"])) {
			$articles=DAO::getAll("faq","id!=0 order by dateCreation desc");
			$idUser=Auth::getUser()->getId();
			$conditionNouveau="idStatut=1 and idUser=".$idUser;
			$conditionAttribue="idStatut=2 and idUser=".$idUser;
			$conditionResolu="idStatut=4 and idUser=".$idUser;
			$nouveau=count(DAO::getAll("Ticket", $conditionNouveau));
			$attribue=count(DAO::getAll("Ticket", $conditionAttribue));
			$resolu=count(DAO::getAll("Ticket", $conditionResolu));
			$this->loadView("main/vDefault",array("nouveau"=>$nouveau,"attribue"=>$attribue,"resolu"=>$resolu,"articles"=>$articles));
		}
		else {
			$this->loadView("main/vDeco");
		}
		$this->loadView("main/vFooter");
	}

	public function asAdmin(){
		$_SESSION["user"]=DAO::getOne("User", "admin=1");
		$_SESSION['KCFINDER'] = array(
				'disabled' => false
		);
		$this->index();
	}

	public function asUser(){
		$_SESSION["user"]=DAO::getOne("User", "admin=0");
		$_SESSION['KCFINDER'] = array(
				'disabled' => true
		);
		$this->index();
	}

	public function disconnect(){
		$_SESSION = array();
		$_SESSION['KCFINDER'] = array(
				'disabled' => true
		);
		$this->index();
	}

	public function ckEditorSample(){
		$this->loadView("main/vHeader",array("infoUser"=>Auth::getInfoUser()));
		echo "<div class='container'>";
		echo "<h1>Exemple ckEditor</h1>";
		echo "<textarea id='editor1'>Exemple de <strong>contenu</strong></textarea>";
		echo JsUtils::execute("CKEDITOR.replace( 'editor1');");
		echo "</div>";
		$this->loadView("main/vFooter");
	}
}