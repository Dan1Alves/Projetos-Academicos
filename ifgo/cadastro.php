<?php

$telefone = $_POST['telefone'];
$matricula = $_POST['matricula'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senha2 = $_POST['senha2'];


//Confirmar senha
if($senha == $senha2){
    #Estabelece a conexão BD
    $conexao = new PDO("mysql:dbname=ifgo;localhost","root","");


 //Verificar se já existe um login associado
    
    #Cria a consulta SQL
    $sql = "select * from usuario where matricula = '$matricula'";

#Executa a consulta SQL
    $comando = $conexao->prepare($sql);
    $comando->execute();

  #Os dados retornados ficam armazenados em resultado
    $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

   #Caso tenha algum valor em resultado, então encontrou a combinação do login e senha
   $achou = count($resultado);
   if ($achou == 0){
  
    #Cria a consulta SQL
  $sql = "insert into usuario values ('$matricula','$telefone','$email' ,md5('$senha'))";

  #Executa a consulta SQL
  $comando = $conexao->prepare($sql);
  $resultado = $comando->execute();

  //Se retornar true então deu certo
  if ($resultado){
    #fecha o código PHP, abre um código JS e redireciona para a página de login
    ?>
    <script>
        //Faz aparecer a caixa de diálogo na tela
        alert('Sucesso! Usuário cadastrado!');
        //Redireciona para o arquivo de login (index.html)
        window.location="./index.html";
    </script>

<?php
        #abre o código PHP para continuar a implementação
    }
    else {
        #fecha o código PHP, abre um código JS e redireciona para a página do sistema
        ?>
        <script>
            //Faz aparecer a caixa de diálogo na tela
            alert('Erro! Contate o ADM');
            //Redireciona para o arquivo de login (index.html)
            window.location="./index.html";   
        </script>
  <?php
        }
    }
    else {
        ?>
        <script>
            alert('Login já existente!');
            window.location="CreateanAccount.html";
        </script>
    <?php
    }
    }
    else {
        ?>
        <script>
            //Faz aparecer a caixa de diálogo na tela
            alert('Senhas não conferem');
            //Redireciona para o arquivo de login (index.html)
            window.location="./CreateanAccount.html";
        </script>
        <?php
    }
    
?>
}

?>