<?php
require_once("class/Class_PDO.php");
require_once("class/class_fn.php");
require_once("post.php");
$post = new post;
if(isset($_GET['logout'])) unset($_SESSION['login']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appication</title>
    <link href="assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/custom.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/DataTables-1.10.7/media/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/bootstrap-3.3.5/js/bootstrap.min.js"></script>

    <script type="text/javascript" language="javascript" src="assets/DataTables-1.10.7/media/js/jquery.dataTables.js"></script>

    <script type="text/javascript" src="assets/appication.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container" style="width:100%;">
      <div class="row">
        <?php
        if(isset($_SESSION["login"])){
        echo '<div class="col-md-2">';
          include('menu.php');
        echo '</div>';
        echo '<div class="col-md-10" style="background-color:#fff;height:auto;min-height:100vh;padding-top:20px;">';
          if(isset($_GET["mod"])){
          $url = explode("_",$_GET["mod"]);
          include("views/".$url[0]."/".$url[1].".php");
          }
        echo '</div>';
        } else { include("login.php"); }
        ?>
      </div>
    </div>
  </body>
</html>