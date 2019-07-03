<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Document</title>
</head>
<body>

  <!-- variaveis de conteudo - criado array com key e value -->
  <?php
  $cursos = [
    "Full Stack" => ["full.jpeg", "Curso de desenvolvimento web", 41.99, "full stack"],
    "Marketing Digital" => ["marketing.jpg", "Curso de desenvolvimento web", 51.99, "marketing"],
    "User Experience" => ["ux.png", "Curso de desenvolvimento web", 71.99, "ux"],
    "Mobile Android" => ["android.png", "Curso de desenvolvimento web", 0.99, "android"]
  ];

    $usuario = [
      "nome" => "Fulano",
      "email" =>  "fulano@gmail.com",
      "senha" => "1234",
      "nivel_acesso" => mt_rand(0,1)
    ];
   ?>

  <main>
    <!-- navBar -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <span>Cursos</span>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php if($usuario["nivel_acesso"] == 1) { ?>
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ações <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Adicionar Produto</a></li>
                  <li><a href="#">Editar Produto</a></li>
                </ul>
              </li>
            </ul>
        <?php } ?>

        <form action="" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Pesquisar...">
          </div>
          <button type ="submit" class="btn btn-default">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </form>
        <p class="navbar-text navbar-right">
          Logado como
          <strong>
            <a href="#" class="navbar-link"> <?php echo $usuario["nome"]; ?> </a>
          </strong>
        </p>

        </div>
      </div>
    </nav>
    <!-- produtos -->
    <div class="container">
      <div class="row">
      <!-- Cursos -->
      <?php foreach($cursos as $nome => $infos) { ?>
        <div class="col-xs-4 col-sm-6 col-md-6 col-lg-6">
          <div class="thumbnail">
            <img src="<?php echo 'assets/img/' . $infos[0]; ?>" alt="Full Stack">
            <div class="caption">
              
              <h3><?php echo $infos[1] ?></h3>
              <p><?php echo $infos[2] ?></p>
              <p><strong><?php echo $infos[3] ?></strong></p>
              <a href="#" class="btn btn-primary" role="button">Comprar</a>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
  </main>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
