<!DOCTYPE html>

<html lang='es'>
<head>
    <meta charset="UTF-8" /> 
    <title>
        HOSPITAL LA CARLOTA
    </title>
    <link rel="stylesheet" type="text/css" href="estiloLogin.css" />
</head>
<body>

<div id="wrapper">

	<form name="login-form" class="login-form" action="MenuIndex.php" method="post">
	
		<div class="header">
                    <h5>BIENVENIDOS A SMA</h5>
		<h1>LOGIN</h1>
		<span>Favor de identificarse</span>
		</div>
                
		<div class="content">
                    
		<input name="username" type="text" class="input username" placeholder="username" />
		<div class="user-icon"></div>
		<input name="password" type="password" class="input password" placeholder="password" />
		<div class="pass-icon"></div>		
		</div>

		<div class="footer">
                    <img src="images/login.png"  style="width:70px;height:70px">
		<input type="submit" name="ingresar" value="Login" class="button" />
		
		</div>
	
	</form>

</div>
<div class="gradient"></div>


</body>
</html>
