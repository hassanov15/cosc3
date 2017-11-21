<?php require_once '../app/views/templates/header.php' ?>
</br></br>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Hey, <?=$_SESSION['name']?></h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p></p>
        </div>
    </div>
	<?php 
	
	require_once '../app/controllers/reports.php';
	$_index = new Reports();
	$result = $_index -> getReminders();
	echo "<h3>The User ".$result." has the highest reminders.</h3>";
	
	$result = $_index->getTotalLogins();
	echo "<table class='table'>";
    echo "<thead>";
      echo "<tr>";
        echo "<th>UserName</th>";
        echo "<th>Total Logins </th>";
      echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    
	foreach($result as $row)
	{
		if($row['state'] == "LoggdIn")
		{
		echo "<tr>";
		echo "<td> {$row['username']} </td>";
		echo "<td> {$row['totallogins']} </td>";
		echo "</tr>";
		}
	}

    <?php require_once '../app/views/templates/footer.php' ?>
