<?php

session_start();

$login = $_POST['matricula'];
$senha = $_POST['senha'];
#Estabelece a conexão com o Banco de Dados
$conexao = new PDO("mysql:dbname=ifgo;localhost","root","");

#Cria a consulta SQL
$sql = "select * from usuario where matricula = '$login' and senha = m qd5('$senha');";

#Executa a consulta SQL
$comando = $conexao->prepare($sql);
$comando->execute();

#Os dados retornados ficam armazenados em resultado
$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

#Caso tenha algum valor em resultado, então encontrou a combinação do login e senha
$achou = count($resultado);
if ($achou == 0){
    #$_SESSION['login'] = $login;
 #   $_SESSION['logado'] = $login;
  #  session_write_close();
    #fecha o código PHP, abre um código JS e redireciona para a página de login
    ?>

<script>
        //Faz aparecer a caixa de diálogo na tela
        alert('Login e/ou senha inválidos!');
        //Redireciona para o arquivo de login (index.html)
        window.location="./index.html";
    </script>
     <?php
    #abre o código PHP para continuar
}
else {
   #fecha o código PHP, abre um código JS e redireciona para a página de login
   $_SESSION['login'] = $login;
   $_SESSION['senha'] = $senha;
   session_write_close();
    ?>

<script>
        //Faz aparecer a caixa de diálogo na tela
        alert('Sucesso!');
        //Redireciona para o arquivo de login (index.html)
        window.location="./indexHomePage.php";
    </script>
  <?php
}
session_destroy();

?>

