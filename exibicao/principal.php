
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Projeto PHP fundamentos</title>
<style>
    a{
        color: white !important;
        font-family: serif;
        font-weight: bold;
        font-size: 1.5em !important;
    }
    .table{
        margin-top: 10%;
        text-align: center;
    }
</style>
        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

        <nav class="navbar navbar-light bg-dark">
  <a class="navbar-brand" href="#">Projeto PHP Fundamentos - Suelen </a>
</nav>
       </nav>
    </head>
    <body>
    <div class="container">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nome do Curso</th>
      <th scope="col">Carga Horária</th>
      <th scope="col">Versão da Ferramenta</th>
    
    </tr>
  </thead>
  <tbody>
      <?php foreach(cursos() as $curso):?>
        <?php 
          if(!$curso["status"]){
            continue;
          } ?>
    <tr>
      <th scope="row"><?= $curso["nome_curso"]?></th>
      <td><?= carga_horaria($curso["carga_horaria"])?></td>
      <td><?= $curso["versao_ferramenta"]?></td>
   
    </tr>
      <?php endforeach; ?>

  </tbody>
</table>


    </div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
