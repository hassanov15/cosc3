<?php

class User {

    public $email;
    public $user;
    public $password;
    public $auth = false;

    public function __construct() {
        
    }

    public function authenticate() {
        /*
         * if username and password good then
         * $this->auth = true;
         */
		 
		$db = db_connect();
        $query= "SELECT * FROM users WHERE username=:username AND password=:password";
        $statement=$db->prepare($query);
        $statement->execute(array(
            'username' => $_POST['username'],'password' => $_POST['password']
        ));
        $count=$statement->rowCount();
        if($count>0){
            $_SESSION['username']=$_POST['username'];
            $_SESSION['is authenticated']= true;
		}
    }
	
	public function register ($username, $password,$email) {
		$db = db_connect();

        $insert=$conn->prepare("INSERT INTO users(username, password) 
            values(:username,:password)");
   $insert->bindParam('username',$user);
   $insert->bindParam('email',$email);
   $insert->bindParam('password',$password);
   $insert->execute();

	}

}
