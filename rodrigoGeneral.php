<!DOCTYPE html>
<?php
    $titulo = "RODRIGO - JOGO GENERAL";
?>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php echo "$titulo"?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    <script src='js/main.js'></script>
</head>
<body class="bg-light">
<nav class="navbar sticky-top navbar-dark bg-primary">
<a class="navbar-brand" href="indexBootstrap.php">
<h2 class="text-center">RODRIGO - JOGO GENERAL</h2>
</a>

</nav>
<br><br>
<form class="" action="" method="post">
        <legend>INFORME:</legend>
    <div class="col-3">
        <label class="form-label" for="primeiroCaracter">INFORME:</label>
        <input  class="form-control" type="text" name="" id="" value="<?php if(isset($_POST[''])) echo ''. $ .'';?>">
    </div>
    <div class="col-4">
        <label class="form-label" for="segundoCaracter">INFORME:</label>
        <input  class="form-control" type="text" name="" id="" value="<?php if(isset($_POST[''])) echo ''. $ .'';?>">
    </div>
    <br><br>
    <div>
        <input class="btn btn-primary" type="submit" name="acao" id="acao" value="Pronto!">
    </div>
    <br><br>
</form>
<?php

?>
</body>
</html>