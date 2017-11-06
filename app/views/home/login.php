<?php require_once '../app/views/templates/headerPublic.php' ?>
<html>

    <div class="row">
        <title>Login Page</title>
    </head>
    
    <body>
        <!-- Output error message if any -->
        <?php echo $error; ?>
        <from action ="login/index" method ="post">
        
        <!-- form for login -->
       
            <label for="username">Username:</label><br/>
            <input type="text" name="username" id="username"><br/>
            <label for="password">Password:</label><br/>
            <input type="password" name="password" id="password"><br/>
            <input type="submit" name="login " value="Log In!">
			<a href ="login/register"> new account</a>
		
        </form>
    </body>
            
        
			
			

</html>
    <?php require_once '../app/views/templates/footer.php' ?>
