<?php


echo <<<_END
<html> 
<LINK REL="Stylesheet" HREF="Login.css" TYPE="text/css">
	<head> <div id="CabeceraLogin"> LOGIN </div></head>
	<body>
		<form method = "post" action = "Confirm.php">	
			<div id = "CajaLogin">
				User:  
				<input type = "text" name = "name" />
				<br/> <br/>
				Password:  
				<input type = "text" name = "pass" />
				</br> <br/>
				<center><input type = "Submit" value = "Login" /></center>
			</div>
		</form>
	</body>
</html>
_END;

?>