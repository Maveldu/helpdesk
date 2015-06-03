<?php
class Tickets extends \_DefaultController {
	public function Tickets(){
		$this->title="Tickets";
		$this->model="Ticket";
	}

	public function messages($id){
		$ticket=DAO::getOne("Ticket", $id[0]);
		if($ticket!=NULL){
			echo "<h2>".$ticket."</h2>";
			$messages=DAO::getOneToMany($ticket, "messages");
			echo "<table class='table table-striped'>";
			echo "<thead><tr><th>Messages</th></tr></thead>";
			echo "<tbody>";
			foreach ($messages as $msg){
				echo "<tr>";
				echo "<td title='message' data-content='".htmlentities($msg->getContenu())."' data-container='body' data-toggle='popover' data-placement='bottom'>".$msg->toString()."</td>";
				echo "</tr>";
			}
			echo "</tbody>";
			echo "</table>";
			echo JsUtils::execute("$(function () {
					  $('[data-toggle=\"popover\"]').popover({'trigger':'hover','html':true})
				})");
		}
	}
	
	public function frm($id=null){
		if (isset($_SESSION["user"])){
			$userActuel=Auth::getUser();
			$categories=DAO::getAll("Categorie");
			$ticket=$this->getInstance($id);
			$this->loadView("ticket/vAdd",array("ticket"=>$ticket,"userActuel"=>$userActuel,"categories"=>$categories));
		}
		else {
			$this->loadView("ticket/vDeco");
		}
	}
	
	public function changerStatut($params=null){
		if (Auth::isAdmin()){
			$id=$params[0];
			if ($id) {
				$ticket=DAO::getOne("Ticket",$id);
			}
			else {
				$ticket=null;
			}
			$tickets=DAO::getAll("Ticket");
			$this->loadView("statut/vSelectTicket",array("ticket"=>$ticket,"idTicket"=>$id,"tickets"=>$tickets));
			if ($ticket) {
				$statuts=DAO::getAll("Statut");
				$this->loadView("statut/vChangerStatut",array("ticket"=>$ticket,"statuts"=>$statuts));
			}
		}
		else {
			$this->loadView("statut/vDeco");
		}
	}
	
	
	
	
	/* (non-PHPdoc)
	 * @see _DefaultController::setValuesToObject()
	 */
	
	
	protected function setValuesToObject(&$object) {
		parent::setValuesToObject($object);
		if(isset($_POST["idCategorie"])){
			$cat=DAO::getOne("Categorie", $_POST["idCategorie"]);
			$object->setCategorie($cat);
		}
		$object->setUser(Auth::getUser());
		$statut=DAO::getOne("Statut", $_POST["Statut"]);
		$object->setStatut($statut);
	}
}