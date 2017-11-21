<?php
public function getlogs()
	{
		$logs = $this->model('LoggedIn');
		return $logs->getlogs();
	}
	public function create() 
	{
		$notes = $this->model('notes');
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
			$subject = $_POST['subject'];
			$description = $_POST['description'];
			
			$notes->create($subject, $description);
		}
		header('Location: /home');
	}