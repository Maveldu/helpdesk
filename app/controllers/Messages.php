<?php
class Messages extends \_DefaultController {
	public function Messages(){
		$this->title="Messages";
		$this->model="Message";
	}


	public function frm($params=NULL){
		if (isset($_SESSION["user"])){
			$userActuel=Auth::getUser();
			$id=$params[0];
			if ($id) {
				$ticket=DAO::getOne("Ticket",$id);
			}
			else {
				$ticket=null;
			}
			$this->loadView("message/vSelectTicket",array("ticket"=>$ticket,"idTicket"=>$id));
			if ($ticket) {
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
		else {
			$this->loadView("message/vDeco");
		}
	}
	protected function setValuesToObject(&$object) {
		error_reporting(0);
		parent::setValuesToObject($object);
		$object->setContenu($_POST["contenu"]);
		$object->setUser(Auth::getUser());
		$object->setTicket(DAO::getOne("Ticket",$_POST["idTicket"]));
		error_reporting(1);
	}
}	
?>