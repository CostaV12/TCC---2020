    <?php
      if (isset($_GET['unset'])) {
          session_unset();
      }

      if (isset($_GET['status'])) {
          $status = $_GET['status'];
          echo '<script type="text/javascript">alert("'.$status.'");</script>';
      }
    ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Barbearia Xavier</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="imagens/logo_barbearia_2.png" type="image/x-icon"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->
  <script src="./menu.js"></script>
  <link rel="stylesheet" href="./menu.css">
  <link rel="stylesheet" href="./sobre.css">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="servicos.css">
  <link rel="stylesheet" href="port.css">
  <link rel="stylesheet" href="share.css">
  <link rel="stylesheet" href="form.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="sobre.css">

    <!--Portifólio-->
  <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">
   <link rel="stylesheet" href="css/base.css">    

   <script src="js/modernizr.js"></script>
   <script src="js/pace.min.js"></script>
   <script src="js/jquery-2.1.3.min.js"></script>


<!---  <link rel="stylesheet" href="./sobre.css"> --->

  <!---<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
  <!---<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>--->

</head>
    
<?php
    session_start();
?>

<script type="text/javascript">
    function carregar(){
        $('#menu').load('menu.php');
        $("#carrousel").load('carrousel.php');
        $("#sobre").load('sobre.php');
        $("#servicos").load('servicos.php');
        $("#port").load('port.php');
        $("#form").load('form.php');
        $("#share").load('share.php');
        $("#footer").load('footer.php');
    }
</script>

<body onload="carregar()">

    <div id="menu"></div>
    <div id="carrousel"></div>
    <div id="sobre"></div>
    <div id="servicos"></div>
    <div id="port"></div>
    <div id="form"></div>
    <div id="share"></div>
    <div id="footer"></div>

</body>
</html>
