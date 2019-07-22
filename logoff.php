<?php 

	session_start();

	// echo "<pre>";
	// print_r($_SESSION);
	// echo "</pre>";


	//eliminar índice específico
	//unset()

	// unset($_SESSION['x']);

	// echo "<pre>";
	// print_r($_SESSION);
	// echo "</pre>";

	//Apagar a Super Global $_SESSION


	session_destroy();
	header('location: index.php');


 ?>