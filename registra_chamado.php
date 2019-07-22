<?php 
	
	// echo "<pre>";
	session_start();
	print_r($_POST);
	// echo "</pre>";

	/*Abrir um arquivo
	Registrar as informações
	Fechar o arquivo
	Finalizar o chamado*/

	//1º Parâmetro = o arquivo que tem que ser aberto
	//2º Parâmetro = Que ação deve ser realizada nesse arquivo

	$arquivo = fopen('arquivo.txt', 'a+');

	//php.net = documentação do PHP
	//$_SESSION['id'].'#'

	$texto = $_SESSION['id'].'#'.$_POST['titulo'].'#'.$_POST['categoria'].'#'.$_POST['descricao'].PHP_EOL; //END OF LINE

	fwrite($arquivo, $texto); //a referência do arquivo em que se quer escrever e o texto que será escrito

	fclose($arquivo);

	header('location: abrir_chamado.php');

 ?>