<?php
class Help extends Controller{

	public function __construct(){
		parent::__construct();
		//
	}

	public function index(){
		//assigning a value to the view using the inbuilt object variable: msg
		//$this->view->msg = 'This page doesnt exist 404';
		//$this->view->render('error/index');
		$this->view->render('help/index');
	}

	public function other($arg = false){
		//echo 'we are inside other<br>';
		//echo '>';
		require 'models/help_model.php';
		$model = new Help_model();
	}
}

?>