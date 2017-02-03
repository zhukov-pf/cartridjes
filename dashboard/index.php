<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/cartridjes/class/users.php");
include_once($_SERVER['DOCUMENT_ROOT']."/cartridjes/class/stock_view.php");
include_once($_SERVER['DOCUMENT_ROOT']."/cartridjes/class/printer_view.php");   
$users = new Users();
$users->checkSigninUser();
if($_GET['logout'] == TRUE) {
  $users->flushUsersSession();
}
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Учет картриджей - Обзор</title>

    <!-- Bootstrap core CSS -->
    <link href="../lib/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../lib/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Учет картриджей</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Добро пожаловать <?php echo $_SESSION['f_name'];?></a></li>
            <li><a href="../dashboard">Обзор</a></li>
            <li><a href="?logout=TRUE">Выход</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Обзор</a></li>
            <li><a href="../dashboard/printers">Принтеры</a></li>
            <li><a href="../dashboard/cartridjes">Картриджи</a></li>
            <li><a href="#">Пользователи</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Принтеры и картриджи</h1>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Принтер</th>
                  <th>Картридж</th>
                </tr>
              </thead>
              <tbody>
                <?php new printerView();?>
              </tbody>
            </table>
          </div>

          <h2 class="sub-header">Склад</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Фирма</th>
                  <th>Модель</th>
                  <th>В наличии</th>
                </tr>
              </thead>
              <tbody>
                  <?php new stockView();?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>