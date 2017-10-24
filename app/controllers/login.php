<?php

class Login extends Controller {
    public function index() {
        $user = $this->model('User');

        if (isset($_POST['username']) && isset($_POST['password'])) {

        if ($_POST['username'] == $username && $_POST['password'] == 
        	$password){
        	
        }
    }
    

        $user->authenticate();

        if ($user->auth == TRUE) {
            $_SESSION['auth'] = true;
        }
        
        header('Location: home.php');
    }
	
	public function register () {
		$user = $this->model('User');
		
		if(isset($_POST['save'])){
   $name=$_POST['username'];
   $email=$_POST['email'];
   $pass1=$_POST['password'];
   $hash=password_hash($pass1,PASSWORD_DEFAULT);
		}
		
		$this->view('home/register');
	}
}


