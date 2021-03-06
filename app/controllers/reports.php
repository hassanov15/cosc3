<?php

class Reports extends Controller {
    public function students() {
		 $this->view('reports/students');    
    }
    public function getReminders(){
    	$db = db_connect();
        $statement = $db->prepare("SELECT users.*, count( notes.username ) 
		FROM notes LEFT JOIN users ON users.name=notes.username
		GROUP BY notes.username");
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
		if ($rows) 
		{
			return $rows[1]['username'];
		}
	}
public function getTotalLogins()
	{
		$db = db_connect();
        $statement = $db->prepare("SELECT username, state,COUNT(*) as totallogins FROM logs GROUP BY username,state;");
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
		if ($rows) 
		{
			return $rows;
		}	
	}
	
	public function notes()
	{
		$this->view('reports/searchnotes');
	}
	public function getCertainNotes($from,$to)
	{
	
	
		$db = db_connect();
        $statement = $db->prepare($query="SELECT * from notes where createdDate between '".$_POST["from"]."' and '".$_POST["to"]."'");
 // $statement = $db->prepare($query="SELECT * from notes");
              
	   $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
		if ($rows) 
		{
			return $rows;
		}
	}
}