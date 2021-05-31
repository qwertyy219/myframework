<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {

	public function loginAction() {
		$this->view->render('Login Page');
	}

	public function registerAction(){
		$this->view->layout = 'custom';
		$this->view->render('Registration');
	}
}