<?php

class Login extends Controller {
    public function index() {
        $user = $this->model('User');

        if (isset($_POST['username']) && isset($_POST['password'])) {

        if ($_POST['username'] == $user && $_POST['password'] == 
        	$password){
        	
        }
    }
    

        $user->authenticate();

        if ($user->auth == TRUE) {
            $_SESSION['auth'] = true;
        }
        
        header('Location: /home');
    }
	
	public function register () {
		$user = $this->model('User');
		$this->view('home/register');
		if(isset($_POST['reg'])){
   $username=$_POST['username'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $hash=password_hash($password,PASSWORD_DEFAULT);
   $user-> register($name,$hash);

		}
		
	}
}


