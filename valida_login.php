<?php 
	
	// session_start();
	// $_SESSION['x'] = 'Variável Super Global';

	// print_r($_SESSION);
	// echo $_SESSION['y'];


	session_start();




	$usuario_autenticado = false;
	$usuarioId = null;
	$usuario_perfil_id = null;
	$perfil = array(1=>'Administrativo', 2=>'Usuário');

$usuarios_app = array(
	array('id' => 1, 'email' => 'nerdotaku@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
	array('id' => 2, 'email' => 'otaku@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
	array('id' => 3, 'email' => 'otome@teste.com.br', 'senha' => '1234', 'perfil_id' => 3),
	
);


	echo "<pre>";
	print_r($usuarios_app);
	echo "</pre>";

	
	foreach ($usuarios_app as $user) { 
		// echo "Usuários App: ".$user['email']." / ".$user['senha'];
		// echo "<br>";
		// echo "Usuários do Form: ".$_POST['email']." / ".$_POST['senha'];
		// echo "<hr>";



		if($user['email'] == $_POST['email']  && $user['senha'] == $_POST['senha']){

			$usuario_autenticado = true;
			//print_r($user);
			$usuarioId = $user['id'];
			$usuario_perfil_id = $user['perfil_id'];

		}

	}


	if($usuario_autenticado){
		echo '***Usuário Autenticado***';
		//SUPER GLOBAL = TODOS OS ARQUIVOS TEM ACESSO
		$_SESSION['autenticado'] = 'SIM';
		
		$_SESSION['id'] = $usuarioId;

		$_SESSION['perfil_id'] = $usuario_perfil_id;
		
		header('location: home.php');

	}else{

		//SUPER GLOBAL = TODOS OS ARQUIVOS TEM ACESSO
		$_SESSION['autenticado'] = 'NAO';

		header('location: index.php?login=erro');
	}




	// echo "Validação Login";

	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";


	// echo "ARRAY DIRECIONADO <br>";
	// echo $_POST['email'];
	// echo "<br>";

	// echo $_POST['senha'];



 ?>