<?php require_once '../app/views/templates/headerPublic.php' ?>
<html>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Please create an account</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="/login/register" method="post">
			    <fieldset>
					<div class="form-group">
					  

    <head>
        <title>Login Page</title>
    </head>
    
    <body>
        <!-- Output error message if any -->
        
        
        <!-- form for login -->
        <form>
           <label for="email">Email:</label><br/>
			<input type="text" name="email"><br/>
			 <label for="username">Username:</label><br/>
            <input type="text" name="username"><br/>
            <label for="password">Password:</label><br/>
            <input type="password" name="password"><br/>
            <input type="submit" name="save" >
		
        </form>
    </body>
</html>
    <?php require_once '../app/views/templates/footer.php' ?>
