<?php
spl_autoload_register(function ($class) {
    include '../../php/classes/' . $class . '.php';
});
$t = new LAtools();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HTML Intro Doctype Syntax</title>
    <link href="../../css/load.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <main class="container">
      <?php $t->requireDir('views/'); ?>
    </main>
    <script src="../../bower/jquery/dist/jquery.min.js"></script>
    <script src="../../bower/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>