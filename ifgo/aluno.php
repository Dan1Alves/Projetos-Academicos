<?php
//Mapeia a tabela Medicos no Banco de Dados
class Alunos {
    //Criando os atributos da classe
    public $mat;
    public $nome;
    public $telefone;
    public $curso;
    //Método construtor serve para inicializar o obj.
    function __construct($n, $t, $c){
        $this->nome = $n;
        $this->telefone = $t;
        $this->curso= $c;
    }
    //Método para imprimir dados
    function imprimir_dados(){
        echo 'Nome: '.$this->nome.'<hr><br>';
        echo 'Telefone: '.$this->telefone.'<hr><br>';
        echo 'Curso: '.$this->curso.'<hr><br>';
    }

    function inserir_dados(){
        $conexao = new PDO("mysql:dbname=aula;localhost","root","");
        $comando = $conexao->prepare("insert into alunos (nome,telefone,curso) values ('$this->nome','$this->telefone','$this->curso');");
        return $comando->execute(); //Retorna true ou false
    }

    function remover_dados(){
        $conexao = new PDO("mysql:dbname=aula;localhost","root","");
        $comando = $conexao->prepare("delete from alunos where mat = '$this->mat';");
        return $comando->execute();
    }

    function atualizar_dados(){
        $conexao = new PDO("mysql:dbname=aula;localhost","root","");
        $comando = $conexao->prepare("update alunos set nome = '$this->nome' , telefone = '$this->telefone' , curso= '$this->curso' where mat = '$this->mat';");
        return $comando->execute();
    }

    function visualizar_dados(){
        $conexao = new PDO("mysql:dbname=aula;localhost","root",""); //Conexão com o BD
        $comando = $conexao->prepare("select * from alunos;"); //Comando SQL de seleção 
        $comando->execute();
        $matriz = $comando->fetchAll(PDO::FETCH_ASSOC);
        foreach($matriz as $linha){
            #echo "CRM: ".$linha["crm"]." Nome: ".$linha["nome"]."Telefone: ".$linha["telefone"]." Esp.: ".$linha["especialidade"]."<hr>";
            echo "<tr>";
            echo "<td>".$linha["nome"]."</td>";
            echo "<td>".$linha["telefone"]."</td>";
            echo "<td>".$linha["curso"]."</td>";
            echo "<td>".$linha["mat"]."</td>";
            echo "</tr>";    
        }
    }


}

?>