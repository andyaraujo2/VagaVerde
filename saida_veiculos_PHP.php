<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Saída Veículos</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Temas CSS -->
    <link href="css/vagaverde.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">

    <!-- Fontes customizadas -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">


</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Vaga Verde</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll" data-toggle="modal" data-target="#myModal"><a>Voltar</a>
                    </li>
              </ul>
          </div><!-- collapse navbar-collapse -->

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>



    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
          <nav class="navbar navbar-fixed-bottom">
            <div class="row">
              <div class="col-lg-8 col-lg-offset-0 text-center"><!--coluna principal-->

              <div class="row"><!--começo formulario-->
               <div class="col-xs-9">


               </div><!--fim coluna 9-->
                <?php

      require_once 'Conexao.php';
      require_once 'CRUDAluno.php';
      require_once 'menu.php';

      $codigo = $_GET['cod'];
      $crud = new CRUDAluno(Conexao::getInstance());
      $aluno = $crud->selecionarCriterio($codigo);

      foreach ($aluno as $dado) {

    ?>

      <div class="content_titulo">CADASTRO DE ALUNOS - ALTERAÇÃO</div>

      <div class="content">

        <form action="processaAlteracao.php" method="POST">

          <input type="hidden" name="txt_codigo" value="<?php echo $dado->COD_ALUNO; ?>">

          <label>NOME: </label>
          <input type="text" name="txt_nome" value="<?php echo $dado->NOME; ?>">

          <br>
          <br>

          <label>SOBRENOME: </label>
          <input type="text" name="txt_sobrenome" value="<?php echo $dado->SOBRENOME; ?>">

          <br>
          <br>

          <label>IDADE: </label>
          <input type="text" name="txt_idade" value="<?php echo $dado->IDADE; ?>">

          <br>
          <br>

          <label>E-MAIL: </label>
          <input type="text" name="txt_email" value="<?php echo $dado->EMAIL; ?>">

          <br>
          <br>

          <label>TELEFONE: </label>
          <input type="text" name="txt_telefone" value="<?php echo $dado->NOME; ?>">

          <br>
          <br>

          <input type="submit" value="ALTERAR">

        </form>

        <?php } ?>

      </div>

               </div> <!--fim formulario-->
               

              </div><!--fim coluna principal-->
            </div><!--Fim row principal-->
          </nav>
        </div><!--fim container-->
    </header>



    
    <!--Rodapé-->
    <footer class="text-center">
      <nav class="navbar navbar-cor navbar-fixed-bottom">
        <div class="footer-below">
          <div class="container">
              
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Vaga Verde 2017
                    </div>
                </div>

          </div>          
        </div>
      </nav>
    </footer> <!-- Fim Rodapé -->
     

<!-- modal botoes -->

<!-- modal1 -->
    <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Cadastro de funcionário</h4>
            </div>

    <div class="modal-body"><!-- os codigos dos formularios são depois do modal-body-->

    <section id="cadastro">
        <div class="modal-dialog modal-md">
          <div class="row">

            <div class="col-xs-9">
              <div class="form-group">
                  <form role="form" action="javascript:;" method="post" id="login-form" autocomplete="on">
                  <h5>Nome completo</h5>
                   <div class="form-group">
                        <label for="nome" class="sr-only">Nome completo</label>
                        <input type="nome" name="nome" id="email" class="form-control" placeholder="Digite o nome completo">
                    </div>
                    <h5>CPF</h5>
                     <div class="form-group">
                        <label for="cpf" class="sr-only">CPF</label>
                        <input type="cpf" name="cpf" id="email" class="form-control" placeholder="XXX.XXX.XXX-XX">
                    </div>
                    <h5>Email</h5>
                    <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="alguem@exemplo.com">
                    </div>
                    <h5>Senha</h5>
                  <div class="form-group">
                      <label for="key" class="sr-only">Senha</label>
                      <input type="password" name="key" id="key" class="form-control" placeholder="Senha">
                  </div>
                  <h5>Confirmar senha</h5>
                  <div class="form-group">
                      <label for="key" class="sr-only">Confirmar senha</label>
                      <input type="password" name="key" id="key" class="form-control" placeholder="Confirmar senha">
                  </div>
                  <div class="checkbox">
                      <span class="character-checkbox" onclick="showPassword()"></span>
                      <span class="label">Mostrar Senha</span>
                  </div>
                  <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Salvar">
                </form>
              <hr> <!-- Linha como quebra de paragrafo -->
            </div>
          </div> <!-- /.col-xs-12 -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->
  </section>

    </div><!-- Fim Modal-body -->
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
  </div>
  </div>




    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <script src="js/login.js"></script> <!-- JavaScript login -->

    <!-- Theme JavaScript -->
    <script src="js/vagaverde.min.js"></script>

</body>

</html>
