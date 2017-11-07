<?php require_once '../app/views/templates/headerPublic.php' ?>
<html>
        <title>Sign Up Page</title>
    
    
    <body>
         <form method="post" action="login/register">
       
           <label for="email">Email:</label><br/>
			<input type="text" name="email"><br/>
			 <label for="username">Username:</label><br/>
            <input type="text" name="username"><br/>
            <label for="password">Password:</label><br/>
            <input type="password" name="password"><br/>
            <input type="submit" name="reg" value="submit" >
		
        </form>
        
    </body>

    <?php require_once '../app/views/templates/footer.php' ?>
</html>