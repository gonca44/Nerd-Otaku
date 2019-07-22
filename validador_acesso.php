<?php 
  
  session_start();
  echo $_SESSION['autenticado'];

  if( $_SESSION['autenticado']=='NAO' || !isset($_SESSION['autenticado']) ){
      header('location: index.php?login=erro2');
  }

 ?>

<!--  colocar a linha abaixo, nos demais arquivos e depois apagar-->
<?php  require_once("validador_acesso.php"); ?>