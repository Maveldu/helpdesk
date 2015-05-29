<?php
class Messages extends \_DefaultController {
	public function Messages(){
		$this->title="Messages";
		$this->model="Message";
	}


	public function frm($params=NULL){
		$id=$params[0];
		$idmessage=null;
		if ($id) {
			$ticket=$this->getInstance($id);
		}
		else {
			$ticket=0;
		}
		$this->loadView("message/vSelectTicket",array("ticket"=>$ticket));
		if ($id) {
			$this->loadView("message/vMessages",array("ticket"=>$ticket));
		}
		if (isset($params[1])) {
			$idedit=$params[1];
			$messageedit=$this->getInstance($idedit);
			$this->loadView("message/vEdition",array("ticket"=>$ticket,"messageedit"=>$messageedit));
		}
		else {
			$this->loadView("message/vAdd",array("ticket"=>$ticket,"idmessage"=>$idmessage));
		}
	
	
	}

}	
?>