
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Css/Home.css">

    <script type="text/javascript">

      //Troca de imagem ao passar o mouse na área de navegação de acordo com o tema

      function img()
      {
        var img=document.getElementById("logopeq");
        img.src="Imagens/Index/Logo.png";
        img.style.width="80px";
      }
      function imglogout()
      {
        var img=document.getElementById("logopeq");
        img.src="Imagens/Index/Logouticon.png";
        img.style.width="52px";
        img.style.height="52px";
      }
      function imghq()
      {
        var img=document.getElementById("logopeq");
        img.src="Imagens/Index/Avengersicon.png";
        img.style.width="52px";
        img.style.height="52px";
      }
      function imganime()
      {
        var img=document.getElementById("logopeq");
        img.src="Imagens/Index/Narutoicon.png";
        img.style.width="52px";
        img.style.height="52px";
      }
      function imgmanga()
      {
        var img=document.getElementById("logopeq");
        img.src="Imagens/Index/Oneicon.png";
        img.style.width="52px";
        img.style.height="52px";
      }
      function permanecer()
      {
        var perm= document.getElementById("menu");
        perm.style.marginLeft="88px";
      }
      function permanecer2()
      {
        var perm= document.getElementById("menu");
        perm.style.marginLeft="60px";
      }
      function trocaimagemlogout()
      {
        var lg=document.getElementById("logout");
        lg.addEventListener("mouseover", imglogout);
        lg.addEventListener("mouseover", permanecer);
        lg.addEventListener("mouseout", permanecer2);
        lg.addEventListener("mouseout", img);
      }      
      function trocaimagemhq()
      {
        var hq=document.getElementById("hq");
        hq.addEventListener("mouseover", imghq);
        hq.addEventListener("mouseover", permanecer);
        hq.addEventListener("mouseout", permanecer2);
        hq.addEventListener("mouseout", img);
      }
      function trocaimagemanime()
      {
        var anime=document.getElementById("anime");
        anime.addEventListener("mouseover", imganime);
        anime.addEventListener("mouseover", permanecer);
        anime.addEventListener("mouseout", permanecer2);
        anime.addEventListener("mouseout", img);
      }
      function trocaimagemmanga()
      {
        var manga=document.getElementById("manga");
        manga.addEventListener("mouseover", imgmanga);
        manga.addEventListener("mouseover", permanecer);
        manga.addEventListener("mouseout", permanecer2);
        manga.addEventListener("mouseout", img);
      }

      window.addEventListener("load", trocaimagemhq);
      window.addEventListener("load", trocaimagemmanga);
      window.addEventListener("load", trocaimagemanime);
      window.addEventListener("load", trocaimagemlogout);



    </script>

    <title>Home | Nerd Otaku</title>

  </head>

  <body>


<div class="container-fluid">

  <div id="esconder" style="display: none;">
    <?php  require_once("validador_acesso.php"); ?>
  </div>

<header>

  <!-- INICIO DA ÁREA DE NAVEGAÇÃO/MENU -->

    <nav class="navbar">
        
        

          <div id="arealogopeq" class="nav-header">
            
            <a class="nav-brand" href="#"><img id="logopeq" class="img-fluid" src="Imagens/Index/Logo.png"></a> 

          </div>

            <div id="menu">

                <ul class="nav">

                  <li><a class="nav-link" href="#">HOME</a></li>
                  <li><a id="anime" class="nav-link" href="Noticiasanime.php">ANIMES</a></li>
                  <li><a id="manga" class="nav-link" href="Noticiasmanga.php">MANGÁS</a></li>
                  <li><a id="hq" class="nav-link" href="Noticias.php">HQS</a></li>
				          <li><a id="logout" class="nav-link" href="logoff.php"> SAIR </a></li>
      

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

   

  <!--INICIO PRIMEIRA PARTE DO CONTEÚDO -->

    <div id="logoprincipal">

      <img id="logo" class="img-fluid" src="Imagens/Index/Logo.png">
        <p>記載されているオタクのサイト</p>
        <!-- <button class="btn" id="login"><a href="Login.html">LOGIN</a></button><button class="btn" id="cadastro"><a href="Cadastro.html">CADASTRO</a></button> -->
      
    </div>

    <div id="conteudo">

     <div class="row"> 

      <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
        
     
		    <a href="thor.php">
        <img class="img-fluid" src="Imagens/Index/Thor.jpg" >
        </a>
		
        
        <h4>MELHORES HQS DO THOR</h4>

        <p>O Deus do Trovão da Marvel voltou a ficar em evidência depois de sua entrada no universo cinematográfico da Marvel. Apesar de ter alcançado a redenção em Thor: Ragnarok após seus dois primeiros filmes, considerados fracos, é possível que não conheça nenhuma história dele nos quadrinhos.</p>


      </div>

      <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
        
        <a href="homem_de_ferro.php">
        <img class="img-fluid" src="Imagens/Index/Hdeferro.jpg">
        </a>
        
        <h4>MELHORES HQS DO HOMEM DE FERRO</h4>
        <p>Mais famoso hoje nos cinemas do que nos quadrinhos, o Homem de Ferro, herói tecnológico da Marvel Comics levado às telas pelo Marvel Studios,  pode ser uma grande surpresa para aqueles que não o conhecem profundamente, quando se debruçam sobre as aventuras de papel de Tony Stark.</p>

      </div>

      <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
        
        <a href="homem_aranha.php">
        <img class="img-fluid" src="Imagens/Index/Haranha.jpg">
        </a>
        
        <h4>MELHORES HQS DO HOMEM ARANHA</h4>
        <p>Pelo montante absurdo de histórias excelentes que marcam toda a jornada do Homem-Aranha nos quadrinhos, tivemos o árduo trabalho de selecionar as 15 mais impactantes, as 15 histórias icônicas do herói que são adaptadas e readaptadas em tantas outras mídias.</p>

      </div>

      <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
        
        <a href="pantera_negra.php">
        <img class="img-fluid" src="Imagens/Index/Pantera.jpg">
        </a>  

        <h4>MELHORES HQS DO PANTERA NEGRA</h4>
        <p>O Pantera Negra é um dos heróis mais clássicos de todo o Universo Marvel e está prestes a ganhar seu próprio filme solo em fevereiro do ano que vem, após uma elogiadíssima estreia em Capitão América: Guerra Civil. Confira seus principais quadrinhos.</p>

      </div>

      </div>

   <!-- FIM DA PRIMEIRA PARTE DO CONTEÚDO -->   

   <!-- ------------------------------------------------ -->

   <!-- INICIO DA SEGUNDA PARTE DO CONTEÚDO -->

    </div>


 

    <div id="conteudo2">

      <div class="row">

           <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
        
        <img class="img-fluid" src="Imagens/Index/Guerrainfinita.jpg" >
        
        <h4>EM QUE HQ GUERRA INIFINITA SE INSPIROU</h4>
        <p>A premissa de Vingadores: Guerra Infinita foi amplamente baseada nos quadrinhos do Manopla do Infinito. Na história em quadrinho, Thanos quer impressionar a Morte destruindo metade de toda a vida no universo. Ele usa a Manopla do Infinito e estala os dedos, assim como no filme, e os Vingadores restantes têm que trabalhar juntos para derrotá-lo.</p>

      </div>

      <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
        
        <img class="img-fluid" src="Imagens/Index/Sasuke.png">
        
        <h4>REBOOT DE NARUTO FOI CANCELADO GRAÇAS AO ANIME DE BORUTO</h4>
        <p>Em uma entrevista para a revista japonesa Weekly Shonen Jump (via ComicBook.com), o autor Masashi Kishimoto e o ilustrador Mikio Ikemoto falaram sobre a série e como, na verdade, era para Naruto ter tido um reboot, não uma continuação.o reboot seria feita por um novo artista e não precisaria se prender ao que já tinha sido estabelecido anteriormente.</p>

      </div>

      <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
        
        <img class="img-fluid" src="Imagens/Index/Saekano.jpg">
        
        <h4>MELHORES ANIMES SHOUJO DA TEMPORADA</h4>
        <p>O anime Shoujo é direcionado para garotas adolescentes ou jovens mulheres e se foca em uma protagonista e suas peripécias românticas. Originalmente, eram artistas homens que se dedicavam a estas histórias, mas, a partir dos anos 60, as mulheres começaram a marcar seu lugar na indústria, falando em assuntos que consideravam seus.</p>

      </div>

      <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
        
        <img class="img-fluid" src="Imagens/Index/Goku.jpg">
        
        <h4>LISTA DE PERSONAGENS MAIS QUERIDOS DE DBZ</h4>
        <p>Todo dia é um bom dia para ser fã de Dragon Ball Z. Com o recente lançamento do longa O Renascimento de F e de Dragon Ball Super, a nova série da franquia, há coisas novas para os fãs da franquia amarem. Por isso, escolhemos os 13 melhores personagens de Dragon Ball Z. Claro que o anime é cheio de vilões e heróis icônicos, mas sempre tem os melhores.</p>

      </div>

  
</div>

<!-- FIM DA SEGUNDA PARTE DO CONTEÚDO -->

 <!-- INICIO DA TERCEIRA PARTE DO CONTEÚDO -->

    </div>

  

    <!-- FIM DA TERCEIRA PARTE DO CONTEÚDO -->

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