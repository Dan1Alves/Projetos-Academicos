<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Accordion - Default functionality</title>
  <link rel="stylesheet" href="estilo.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );



  </script>
</head>
<body>
 <div id="h1p">

  <H1 >PAINEL DE ADMINISTRAÇÃO</H1>


 </div>
<div id="accordion">
  <h3>Inserir Aluno</h3>
  <div>
   <form method="post" action="acoes.php?op=inserir">
   <table width="900">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Curso</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type="text" name="nome"></td>
            <td><input type="text" name="tel"></td>
            <td><input type="text" name="curs"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Cadastrar"></td>
            <td></td>
            <td><input type="reset" value="Limpar Dados"></td>
        </tr>
    </tbody> 
   </table>
   </form>
  </div>
  <h3>Remover Aluno</h3>
  <div id="mat1">
    <form method="post" action="acoes.php?op=remover">
   MATRICULA: <input type="text" name="mat">
    <input type="submit" value="Remover">
    </form>
  </div>
  <h3>Atualizar Aluno</h3>
  <div>
    <form method="post" action="acoes.php?op=atualizar">
    <table width="900">
     <thead>
         <tr>
         <th>Nome</th>
             <th>Telefone</th>
             <th>Curso</th>
             <th>Matricula</th>
         </tr>
     </thead>
     <tbody>
         <tr>
            <td><input type="text" name="mat"></td>
             <td><input type="text" name="nome"></td>
             <td><input type="text" name="tel"></td>
             <td><input type="text" name="curs"></td>
         </tr>
         <tr>
             <td><input type="submit" value="Atualizar"></td>
             <td></td>
             <td><input type="reset" value="Limpar Dados"></td>
            <td></td>
         </tr>
     </tbody> 
    </table>
    </form>
   </div>
   <h3>Visualizar Aluno</h3>
  <div>
  <table width="900">
     <thead>
         <tr>
             
             <th>Nome</th>
             <th>Telefone</th>
             <th>Curso</th>
             <th>Matricula</th>
         </tr>
     </thead>
     <tbody>
        <?php
        include_once 'aluno.php';
        $aluno = new Alunos(NULL,NULL,NULL);
        $aluno->visualizar_dados();
        ?>
     </tbody>
     </table>
  </div>
</div>
<div id="h1p">

<H1 >IFGO</H1>


</div>
 
</body>
</html>