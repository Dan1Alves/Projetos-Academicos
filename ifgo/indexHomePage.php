
<?php
#session_name('login');
session_start();


if(!isset($_SESSION['login'])){
    header('Location:index.html');
}

#o usuário vai para a variável $logado
$logado = $_SESSION['login'];
$senha = $_SESSION['senha'];

?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF GO</title>
    <link rel="stylesheet" href="styleHomePage.css">
</head>
<body>
 
<header> 

    <p id="phd"> I F G O</p>


</header>

<main class="main">
    <!--Formulário para envio!-->
<div class="line">
    <div class="newPost">
            <div class="infoUser">
                <div class="imgUser"></div>
             <a href="./IndexPerfilPage.html">  <strong>INFOBYTE</strong></a> 
            </div>
            <form action="" class="formPost">
                <textarea name="textarea" placeholder="Escreva sobre a experiência da turma"></textarea>

                <div class="iconsAndButton">
                    <div class="icons">
                        <button class="btnFileform "><img src="./images/imagem (1).png" alt="Adicionar imagem"></button>
                        <button class="btnFileform"><img src="./images/arquivos.png" alt="Adicionar gif"></button>
                        <button class="btnFileform"><img src="./images/video-chamada.png" alt="Adicionar video"></button>
                    </div>
                    <button type="submit" class="btnSubmitForm">Publicar</button>
                </div>
            </form>

        </div>  
        </div>
    
        <ul class="posts">
            <li class="post">
                 <div class="infoUserPost">
                    <div class="imgUserPost"></div>
                    <div class="nameAndHour">
                        <strong>AGRONIADOS</strong>
                        <p>19h</p>
                    </div>
                 </div>
            <img src="./images/agroniados.png" alt="foto dos agroniados">

            <div class="actionBtnPost">
                <button type="button" class="filesPost like"><img src="./images/heart.svg" alt="curtir">Curtir</button>
                <button type="button" class="filesPost comment"><img src="./images/comment.svg" alt="comentar">Comentar</button>
                <button type="button" class="filesPost share"><img src="./images/share.svg" alt="compartilhar">Compartilhar</button>
            </div>

                </li>

                <li class="post">
                    <div class="infoUserPost">
                       <div class="imgUserPost1"></div>
                       <div class="nameAndHour">
                           <strong>MAMB3M</strong>
                           <p>21h</p>
                       </div>
                    </div>
               <img src="./images/mam3mPost.png" alt="foto de MAMB3M">
   
               <div class="actionBtnPost">
                   <button type="button" class="filesPost like"><img src="./images/heart.svg" alt="curtir">Curtir</button>
                   <button type="button" class="filesPost comment"><img src="./images/comment.svg" alt="comentar">Comentar</button>
                   <button type="button" class="filesPost share"><img src="./images/share.svg" alt="compartilhar">Compartilhar</button>
               </div>
   
                   </li>

                   <li class="post">
                    <div class="infoUserPost">
                       <div class="imgUserPost2"></div>
                       <div class="nameAndHour">
                           <strong>INFORMATÁVEIS</strong>
                           <p>8h</p>
                       </div>
                    </div>
               <img src="./images/InformatáveisPost.jpg" alt="foto dos INFORMATÁVEIS">
   
               <div class="actionBtnPost">
                   <button type="button" class="filesPost like"><img src="./images/heart.svg" alt="curtir">Curtir</button>
                   <button type="button" class="filesPost comment"><img src="./images/comment.svg" alt="comentar">Comentar</button>
                   <button type="button" class="filesPost share"><img src="./images/share.svg" alt="compartilhar">Compartilhar</button>
               </div>
   
                   </li>
   

        </ul>

</main>
</body>
</html>
<?php
session_destroy();
?>