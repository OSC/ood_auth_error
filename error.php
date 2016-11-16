<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8 />
    <title>Login Error</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/master.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Error <strong><?php echo htmlspecialchars($_POST["error"]); ?></strong></h1>
    <pre><?php echo htmlspecialchars($_POST["description"]); ?></pre>
  </body>
</html>
