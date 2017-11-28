<?php

class Reminders {
    
    public $id;
    public $subject;
    public $description;
    public $createdDate;
    public $username;
    
    public function __construct() {
        
    }
	
	public function get_reminders () {
		$db = db_connect();
        $statement = $db->prepare("SELECT * FROM note
                                WHERE username = :username AND deleted = 0;");
        $statement->bindValue(':username', $_SESSION['username']);
		
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $rows;
	}
	
	public function get_reminder ($id) {
		$db = db_connect();
        $statement = $db->prepare("SELECT * FROM note WHERE
                                id = :id;");
        $statement->bindValue(':id', $id);
		
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $rows;
	}
	
	public function removeItem($id) {
		$db = db_connect();

        $statement = $db->prepare("DELETE FROM note WHERE id = :id");
        $statement->bindValue(':id', $id);
        $statement->execute();

	}
    public function update($id,$subject,$description){
        $db = db_connect();
        $sql = "UPDATE note set subject=:subject,description = :description WHERE id =:id";
        $db->execute();
        $statement = $db->prepare("INSERT INTO note (subject,description) VALUES (:subject,:description");
        $statement->bindValue(':subject', $subject);       
        $statement->bindValue(':description', $description);
        $statement->execute();  
    }

    public function authenticate() {
        /*
         * if username and password good then
         * $this->auth = true;
         */
		$db = db_connect();
        $statement = $db->prepare("SELECT username, password_hash FROM users
                                WHERE username=:username;");
        $statement->bindValue(':username', $this->username);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

		if ($rows) {
            if (password_verify($this->password, $rows[0]['password_hash'])){
                $this->auth = true;
            }
			
			$_SESSION['username'] = $rows[0]['username'];
		}
		
		$this->auth = true;
    }
	
	public function register ($username, $password) {
		$db = db_connect();
        $statement = $db->prepare("SELECT * FROM users WHERE username=:username;");
        $statement->bindValue(':username', $username);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

        if ($rows) {
            $_SESSION['register_complete'] = false;
        }
        else {
            $statement = $db->prepare("INSERT INTO users (username, password_hash)"
                    . " VALUES (:username, :password_hash); ");

            $statement->bindValue(':username', $username);
            $statement->bindValue(':password_hash', $password);
            $statement->execute();
            $_SESSION['register_complete'] = true;
            $_SESSION['username'] = $username;
        }
	}
	
	public function get_amount () {
		$db = db_connect();
        $statement = $db->prepare("SELECT amount FROM tuition WHERE username=:username;");
        $statement->bindValue(':username', $_SESSION['username']);
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC);
		
		return $rows;
	}
}
