<?php

class Login extends Controller {
    public function index() {
        $user = $this->model('User');
        if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == false) {
        if (isset($_POST['username']) && isset($_POST['password'])) {

        if ($_POST['username'] == $user && $_POST['password'] == 
        	$password){
        
        }
   
        	
        }
    }
    

        $user->authenticate();

        if ($user->auth == TRUE) {
            $_SESSION['auth'] = true;
        
         }
         $this->view('home/index');
    }
	
	public function register () {
		$user = $this->model('User');
		$this->view('home/register');
		if(isset($_POST['reg'])){
   $user=$_POST['username'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $hash=password_hash($password,PASSWORD_DEFAULT);
   $user-> register($user,$hash);

		}
		
	}
}


