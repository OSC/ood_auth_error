<!DOCTYPE html>

<?php

  // branding information
  include('config.php');

?>

<html>

  <head>

    <meta charset=utf-8 />
    <title><?= $config->title ?> | Error</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/master.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="/public/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style type="text/css">

      .navbar-brand {
        color: <?= $config->nav_brand_text_color ?> !important;
      }

      .navbar.navbar-inverse {
         background-color: <?= $config->nav_background_color ?> !important;
         border-color: <?= $config->nav_background_color ?> !important;
      }

      body {
        padding-top: 60px;
      }

      .thumbnail h4{
        min-height: 80px;
      }

      div.row {
        margin-bottom: 50px;
      }

      h2 {
        text-align: center;
        font-weight: 300;
        margin-bottom: 40px;
      }

      .btn-primary   {
        /* 10% lighter than the ohtech dark gray*/
        background-color: #6c696a !important;
        border-color: rgb(82, 80, 81) !important;
      }

      .btn-primary:hover {
        background-color: rgb(82, 80, 81) !important;
      }

    </style>

</head>

<body>

  <!-- navigation bar -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><?= $config->title ?></a>
      </div>
    </div><!-- /.navbar-collapse -->
  </nav>
  <!-- navbar -->

  <div class="container">

    <h2><?= $config->title ?> Error</h2>

    <div class="row">
      <h3 class="text-center"><?= htmlspecialchars($_POST["error"]); ?></h3>
    </div>

    <div class="container">
      <pre>
        <?= htmlspecialchars($_POST["description"]); ?>
      </pre>
    </div>

    <div class="text-center">
      Please contact <a href="<?= $config->help_website ?>"><?= $config->title ?></a> support at <a href="mailto:<?= $config->help_email ?>"><?= $config->help_email ?></a>
    </div>

  </div>

</body>

</html>
