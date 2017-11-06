<?php

class Home extends Controller {

    public function index($name = '') {		
        $user = $this->model('User');
		
		$message =' Welcome'.$SESSION['name'].'<br>'.'the date is '.date("Y/m/d");

        $this->view('home/index', ['message' => $message]);
    }

    public function login($name = '') {
        $this->view('home/login');
    }

}
