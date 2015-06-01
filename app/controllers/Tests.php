<?php
class Tests extends \BaseController {
	
	public function index() {
		$this->loadView("main/vHeader",array("infoUser"=>Auth::getInfoUser()));
		$this->loadView("test/vTests");
		$this->loadView("main/vFooter");
	}
}
?>