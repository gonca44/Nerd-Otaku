<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Css/Cadastro.css">

        <script type="text/javascript">

      //Troca de imagem ao passar o mouse na área de navegação de acordo com o tema

      function img()
      {
        img=document.getElementById("logopeq");
        img.src="Imagens/Index/Logo.png";
        img.style.width="80px";
      }
      function imghq()
      {
        img=document.getElementById("logopeq");
        img.src="Imagens/Index/Avengersicon.png";
        img.style.width="52px";
        img.style.height="52px";
      }
      function imganime()
      {
        img=document.getElementById("logopeq");
        img.src="Imagens/Index/Narutoicon.png";
        img.style.width="52px";
        img.style.height="52px";
      }
      function imgmanga()
      {
        img=document.getElementById("logopeq");
        img.src="Imagens/Index/Oneicon.png";
        img.style.width="52px";
        img.style.height="52px";
      }
      function permanecer()
      {
        perm= document.getElementById("menu");
        perm.style.marginLeft="88px";
      }
      function permanecer2()
      {
        perm= document.getElementById("menu");
        perm.style.marginLeft="60px";
      }      

      function trocaimagemhq()
      {
        hq=document.getElementById("hq");
        hq.addEventListener("mouseover", imghq);
        hq.addEventListener("mouseover", permanecer);
        hq.addEventListener("mouseout", permanecer2);
        hq.addEventListener("mouseout", img);
      }
      function trocaimagemanime()
      {
        anime=document.getElementById("anime");
        anime.addEventListener("mouseover", imganime);
        anime.addEventListener("mouseover", permanecer);
        anime.addEventListener("mouseout", permanecer2);
        anime.addEventListener("mouseout", img);
      }
      function trocaimagemmanga()
      {
        manga=document.getElementById("manga");
        manga.addEventListener("mouseover", imgmanga);
        manga.addEventListener("mouseover", permanecer);
        manga.addEventListener("mouseout", permanecer2);
        manga.addEventListener("mouseout", img);
      }

      window.addEventListener("load", trocaimagemhq);
      window.addEventListener("load", trocaimagemmanga);
      window.addEventListener("load", trocaimagemanime);


    </script>


    <title>Cadastro | Nerd Otaku</title>

  </head>

  <body>


<div class="container-fluid">

<header>

  <!-- INICIO DA ÁREA DE NAVEGAÇÃO/MENU -->

    <nav class="navbar">
        
        

          <div id="arealogopeq" class="nav-header">
            
            <a class="nav-brand" href="#"><img id="logopeq" class="img-fluid" src="Imagens/Index/Logo.png"></a> 

          </div>

            <div id="menu">

                <ul class="nav">

                  <li><a class="nav-link" href="Index.php">LOGIN</a></li>
                  <li><a id="anime" class="nav-link" href="Noticiasanime.php">ANIMES</a></li>
                  <li><a id="manga" class="nav-link" href="Noticiasmanga.php">MANGÁS</a></li>
                  <li><a id="hq" class="nav-link" href="Noticias.php">HQS</a></li>
      

                </ul>
            
            </div>

            <div class="d-none d-sm-none d-md-block">

                  <a href="#"><img id="instagram" class="img-fluid" src="Imagens/Index/Instagram.png"></a>
                  <a href="#"><img id="gmail" class="img-fluid" src="Imagens/Index/Gmail.png"></a>
                  <a href="#"><img id="facebook" class="img-fluid" src="Imagens/Index/Facebook.png"></a>

            </div>

    </nav>

</header>

    <!-- FIM DO MENU -->

  
    <div id="cadastro">

      <div id="logocadastro">
          <div id="arealogopeq2">
        <img id="logopeq2" class="img-fluid" src="Imagens/Index/Logo.png">
          </div>
      </div>

      <form class="form-group">

        <input type="text" name="nome" class="form-control" placeholder="Nome do usuário"><br>
        <input type="email" name="email" class="form-control" placeholder="E-mail"><br>
        <input type="password" name="senha" class="form-control" placeholder="Senha"><br>
        <input type="number" name="idade" class="form-control" placeholder="Idade" min="8"><br>
        <select class="form-control">
          <option disabled selected>Sexo</option>
          <option>Feminino</option>
          <option>Masculino</option>
        </select><br>

        <input type="submit" value="Enviar" class="btn">

      </form>



      
    </div>

</div>    




<footer>

  <div id="rodape">

    <p>DEVELOPERS: A.KELVIN | BRUNO G. | DJALMA N. | HEBERT A. | VINICIUS G. | WILSON D.</p>
    
  </div>

</footer>


</div>

        

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

</html>