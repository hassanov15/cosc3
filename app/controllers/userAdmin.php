<?php
class userAdmin extends Controller 
{
    public function index() 
	{
        $notes = $this->model('reminders');
       return $notes->read();
     //   header('Location: /home');
    }

public function getlogs()
	{
		$logs = $this->model('reminders');
		return $logs->getlogs();
	}
	public function create() 
	{
		$notes = $this->model('reminders');
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
			$subject = $_POST['subject'];
			$description = $_POST['description'];
			$notes->create($subject, $description);
		}
		header('Location: /home');
	}
	public function update(){
		
		$notes = $this->model('reminders');
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
			$id = $_POST['id'];
			$subject = $_POST['subject'];
			$description = $_POST['description'];			
			$notes->update($id,$subject, $description);
		}
		header('Location: /home');
	}
	public function delete()
	{
		$notes = $this->model('reminders');
		$notes->remove($_GET['id']);
		header('Location: /home');
	}
	public function getLastLogin()
	{
		$logs = $this->model('LogINFO');
		return $logs->getLastLogin();
	}
	public function  getAttemptsToday()
	{
		$logs = $this->model('LogINFO');
		return $logs->getTotalLongAttemptsToday();
	}
}
