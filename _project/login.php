<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title> Login </title>
		<link rel = "stylesheet" type = "text/css" href = "CSS/Login.css" />
		<style> 
			#container {
				width: 100vw;
				height: 100vh;
				background-image: url("/image/BKG1.png");
				background-repeat: no-repeat;
				background-attachment: scroll;
				display: flex;
				flex-direction: row;
				justify-content: center;
				align-items: center;
				margin: 0px auto
			}	
			#box{
				width: 320px;
				height: 190px;
				background: White;
				border-radius: 7px;
				box-sizing: border-box;
			}
		</style> 
	</head>
	<body>
		<div id="container">
			<div id="box">
				<br/>
				<form method="POST" action="ChekUser.php">
				<label>Usuário </label>
				<input type="text" name="user" class="centralizaCampos" style="width:280px;font-size: 18px; margin-bottom: 15px">
				<label>Senha </label>
				<input type="password" name="psw" class="centralizaCampos" style="width:280px;font-size: 18px">
					<div class="butonAlg">
							<button type="submit" style="margin-right: 20px">Entrar</button>
						<a href="Usuario.php">Cadastrar</a>
					</div>
			</div>
		</div>
	</body>

</html>