<?php require_once '../app/views/templates/headerPublic.php' ?>
<html>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>You are not logged in! haha</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="/login/index" method="post">
			    <fieldset>
					<div class="form-group">
					  <html>
    <head>
        <title>Login Page</title>
    </head>
    
    <body>
        <!-- Output error message if any -->
        <?php echo $error; ?>
        
        <!-- form for login -->
       
            <label for="username">Username:</label><br/>
            <input type="text" name="username" id="username"><br/>
            <label for="password">Password:</label><br/>
            <input type="password" name="password" id="password"><br/>
            <input type="submit" name="login " value="Log In!">
			
		
        </form>
    </body>

			<input type= "submit" name="Sign-Up" value="Sign-Up">
			</form>
			<input type= "submit" name="attempts" value="attempts">

    </div>
</html>
    <?php require_once '../app/views/templates/footer.php' ?>
