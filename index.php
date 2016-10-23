
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="icono.png">

    <title>Corpeq</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <?php include('php/header.php'); ?>


    
    <!-- Carousel
    ================================================== -->
    <!-- /.carousel -->

    <?php
    if (!isset($_GET['op'])) {
      if (!isset($_GET['service'])) {
        include('php/carrousell.php');
      }
      
    }
    if (isset($_GET['service'])) {
        if ($_GET['service']=="1") {
      include('php/corpeq.php');
    }
    if ($_GET['service']=="2") {
      include('php/autofast.php');
    }
    if ($_GET['service']=="3") {
      include('php/rentacar.php');
    }
    if ($_GET['service']=="4") {
      include('php/fullparts.php');
    }
    if ($_GET['service']=="5") {
      include('php/esmed.php');
    }
    if ($_GET['service']=="6") {
     include('php/licsa.php');
    }
  }
    
      ?>
    <br><hr>
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    
    <div class="container marketing">
        
      <!-- Three columns of text below the carousel -->
      

      <?php if (!isset($_GET['op'])) {
      if (!isset($_GET['service'])) {
        include('php/contenido.inicial.php');
      }
      
    }
       ?>
       <br><hr>
      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

      
      <!-- FOOTER -->
      <?php if (!isset($_GET['op'])) {
            if (!isset($_GET['service'])) {
              include('php/footer.php');
            }
            } ?>
      <div class="copy">
          <p class="pull-right">Created By  <a  href="https://mobiliariosfamarsa.com/devdesign" target="_blank">Eric Js Mtz.</a></p>
        <p>&copy; CopyRight  2016 - Corpeq. All Right Reserved</p>
      </div>
  <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
