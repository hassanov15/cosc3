<?php

class Home extends Controller {

    public function index($name = '') {		
        $user = $this->model('User');
		
		if (strtolower($_SESSION['name']) == 'mike') {
			$message = 'You are awesome';
		} else {
			$message = 'You suck';
		}
		if(strcmp($_SESSION['username'],"admin") == 0)
		{
		//header('Location:/reports');
        $this->view('reports/students',['message' => $message]);
		}
		else
		{
        $this->view('home/index', ['message' => $message]);
		}
    }
	


    public function login($name = '') {
        $this->view('home/login');
    }

}
