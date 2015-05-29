<?php
class Messages extends \_DefaultController {
	public function Messages(){
		$this->title="Messages";
		$this->model="Message";
	}


	public function frm($params=NULL){
		$userActuel=Auth::getUser();
		$id=$params[0];
		if ($id) {
			$ticket=DAO::getOne("Ticket",$id);
		}
		else {
			$ticket=null;
		}
		$this->loadView("message/vSelectTicket",array("ticket"=>$ticket));
		if ($id) {
			$messages=DAO::getAll("Message","idTicket=".$ticket->getId()." order by date asc");
			$nbmessages=count($messages);
			$this->loadView("message/vMessages",array("ticket"=>$ticket,"userActuel"=>$userActuel,"messages"=>$messages,"nbmessages"=>$nbmessages));
			if (isset($params[1])) {
				$idedit=$params[1];
				$messageedit=$this->getInstance($idedit);
				$this->loadView("message/vEdition",array("ticket"=>$ticket,"messageedit"=>$messageedit));
			}
			else {
				$this->loadView("message/vAdd",array("ticket"=>$ticket));
			}
		}
	}
	protected function setValuesToObject(&$object) {
		parent::setValuesToObject($object);
		$object->setContenu($_POST["contenu"]);
		$object->setUser(Auth::getUser());
		$object->setTicket(DAO::getOne("Ticket",$_POST["idTicket"]));
		
		
//		if(isset($_POST["idCategorie"])){
//			$cat=DAO::getOne("Categorie", $_POST["idCategorie"]);
//			$object->setCategorie($cat);
//		}
//		$object->setUser(Auth::getUser());
//		$statut=DAO::getOne("Statut",1);
//		$object->setStatut($statut);
	}
}	
?>