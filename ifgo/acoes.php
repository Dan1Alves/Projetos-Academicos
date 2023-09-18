<?php
//Inclusão do arq. que contém a classe médicos
include_once 'aluno.php';

$op = $_GET['op']; //Recebe o parâmetro de qual
//operação deve ser executada

if ($op == "inserir"){
    //echo "Método de Inserir";
    $nome = $_POST['nome'];
    $tel = $_POST['tel'];
    $curs = $_POST['curs'];
    $aluno = new Alunos($nome,$tel,$curs);
    $r = $aluno->inserir_dados();
    if($r){ //Se $r é true | inserção deu certo
        ?>
        <script>
            alert("Inserção Realizada com sucesso");
            window.location ="index2.php";
        </script>
    <?php     
    }//Fecha com o IF
    }
    
    if($op == "remover"){
        $mat = $_POST['mat'];//Campo do form.
        $obj = new Alunos(NULL, NULL, NULL);
        $obj->mat = $mat; //Atribuição Man.
        $r = $obj->remover_dados();//Ret. V ou F
        //echo "CRM: ".$crm." r: ".$r;
        if($r){

            ?><script>
             window.alert("Remoção realizada!");
             window.location="index2.php";
            </script> <?php
        }
        }

        
if ($op == "atualizar"){
    //echo "Método de Atualizar";
    $mat = $_POST['mat'];
    $nome = $_POST['nome'];
    $tel = $_POST['tel'];
    $curs = $_POST['curs'];
    $aluno = new Alunos($nome,$tel,$esp); //Atribui o nome, telefone e especialidade (Construtor)
    $aluno->mat = $mat; //Atribui o CRM
    $r = $aluno->atualizar_dados();
    if($r){ //Se $r é true | inserção deu certo
        ?>
        <script>
            alert("Atualização Realizada com sucesso");
            window.location ="index2.php";
        </script>
    <?php     
    }//Fecha com o IF
    }


?>