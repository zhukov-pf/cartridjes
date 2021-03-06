<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/cartridjes/class/users.php");
include_once($_SERVER['DOCUMENT_ROOT']."/cartridjes/class/point_view.php");   
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

    <title>Учет картриджей - Управление филиалами</title>

    <!-- Bootstrap core CSS -->
    <link href="http://localhost/cartridjes/lib/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://localhost/cartridjes/lib/css/dashboard.css" rel="stylesheet">

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
          <a class="navbar-brand" href="http://localhost/cartridjes/dashboard">Учет картриджей</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Добро пожаловать <?php echo $_SESSION['l_name']; echo $_SESSION['f_name']; ?></a></li>
            <li><a href="http://localhost/cartridjes/dashboard">Обзор</a></li>
            <li><a href="?logout=TRUE">Выход</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="#">Обзор</a></li>
            <li><a href="http://localhost/cartridjes/dashboard/printers">Принтеры</a></li>
            <li><a href="http://localhost/cartridjes/dashboard/cartridjes">Картриджи</a></li>
            <li class="active"><a href="http://localhost/cartridjes/dashboard/points">Филиалы</a></li>
            <li><a href="http://localhost/cartridjes/dashboard/users">Пользователи</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Филиалы</h1>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <td></td>
                  <th>#</th>
                  <th>Филиал</th>
                </tr>
              </thead>
              <tbody>
                <form class="form-signin" role="form" method="post">
                  
                  <button type="submit" name="addPoint" class="btn btn-success glyphicon glyphicon-plus" alt="Добавить филиал" data-toggle="modal" data-target="#addPoint"></button>
                  <button type="submit" name="editPoint" class="btn btn-warning glyphicon glyphicon-pencil" alt="Редактировать филиал"></button>
                  <button type="submit" name="deletePoint" class="btn btn-danger glyphicon glyphicon-trash" alt="Удалить филиал"></button>

                  <div class="modal fade" id="addPoint" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Добавить филиал</h4>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                        <button type="button" class="btn btn-primary">Сохранить изменения</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php new pointView(); ?>
                </form>
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
    <script src="http://localhost/cartridjes/lib/js/bootstrap.min.js"></script>
  </body>
</html>