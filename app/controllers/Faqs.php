<?php
class Faqs extends \_DefaultController {
	public function Faqs(){
		$this->title="Foire aux questions";
		$this->model="Faq";
	}

	public function frm($id=null){
		if (Auth::isAdmin()){
			$article=$this->getInstance($id);
			$this->loadView("faq/vAdd",array("article"=>$article));
		}
		else {
			$this->loadView("faq/vDeco");
		}
	}
	
	public function showAll(){
		$categories=DAO::getAll("Categorie");
		$articles=DAO::getAll("Faq");
		$this->loadView("faq/vParCategories",array("categories"=>$categories,"articles"=>$articles));
		$articlesParDate=DAO::getAll("faq","id!=0 order by dateCreation desc");
		$this->loadView("faq/vLesPlusRecents",array("articles"=>$articlesParDate));
		$articlesParPop=DAO::getAll("faq","id!=0 order by popularity desc");
		$this->loadView("faq/vLesPlusPop",array("articles"=>$articlesParPop));
	}
	
	public function showOne($id=null){
		$article=$this->getInstance($id);
		$articles=DAO::getAll("faq");
		$nbrarticles=count($articles);
		if ($id==null){
			$article=$articles[0];
		}
		$id=$article->getId();
		$i=0;
		while ($id != $articles[$i]->getId()) {
			$i++;
		}
		$actuel=$articles[$i];
		if ($i==$nbrarticles-1){
			$precedent=$articles[$i-1];
			$suivant=$articles[0];
		}
		else {
			if ($i==0){
				$precedent=$articles[$nbrarticles-1];
				$suivant=$articles[$i+1];
			}
			else {
				$precedent=$articles[$i-1];
				$suivant=$articles[$i+1];
			}
		}
		$this->loadView("faq/vShowOne",array("actuel"=>$actuel,"precedent"=>$precedent,"suivant"=>$suivant));
		$popularity=$actuel->getPopularity();
		$actuel->setPopularity($popularity+1);
		DAO::update($actuel);
	}
	
	protected function setValuesToObject(&$object) {
		parent::setValuesToObject($object);
		if(isset($_POST["idCategorie"])){
			$cat=DAO::getOne("Categorie", $_POST["idCategorie"]);
			$object->setCategorie($cat);
		}
		$object->setUser(Auth::getUser());
		$popularity=$_POST["popularity"];
		$object->setPopularity($popularity);
	}

}