<!DOCTYPE html>
<?php
    $titulo = "RODRIGO - JOGO GENERAL";
    $nomeJogador = "";
    if(isset($_POST["nomeJogador"])){
        $nomeJogador = $_POST["nomeJogador"];
    }

    $vetorJ = array();
    $vetorC = array();

    //números dos dados
    $diceNumJ = array(0,0,0,0,0,0);
    $diceNumC = array(0,0,0,0,0,0);

    //jogadas jogador
    $Jjogada1 = 0;
    $Jjogada2 = 0;
    $Jjogada3 = 0;
    $Jjogada4 = 0;
    $Jjogada5 = 0;
    $Jjogada6 = 0;
    $Jtrinca = 0;
    $Jquadra = 0;
    $JfullHouse = 0;
    $JsequenciaA = 0;
    $JsequenciaB = 0;
    $Jgeneral = 0;
    $Jaleatorio = 0;

    //jogadas computador
    $Cjogada1 = 0;
    $Cjogada2 = 0;
    $Cjogada3 = 0;
    $Cjogada4 = 0;
    $Cjogada5 = 0;
    $Cjogada6 = 0;
    $Ctrinca = 0;
    $Cquadra = 0;
    $CfullHouse = 0;
    $CsequenciaA = 0;
    $CsequenciaB = 0;
    $Cgeneral = 0;
    $Caleatorio = 0;
?>
<html>
<head>
<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php echo "$titulo"?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <script src='js/main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body class="bg-light" style="">
<nav class="navbar sticky-top navbar-dark bg-primary">
<a class="navbar-brand" href="rodrigoGeneral.php">
<h2 class="text-center">RODRIGO - JOGO GENERAL</h2>
</a>
</nav>
<div style="float:left; width: 23%; height: <?php if(isset($_POST["nomeJogador"])){echo "4500px;";}else{echo "800px;";} ?>x; background-image: url(img/saemless.png);"></div>
<div style="float: left;">
<header style="background-image: url(img/bluedices.jpg); height: 200px; background-position: center; background-repeat: repeat-x; background-size: cover; position: relative;"></header>
<br><br>
<form class="" action="" method="post">
        <legend class="h2">INFORME:</legend>
    <div class="col-5">
        <label class="form-label display-5" for="primeiroCaracter">INFORME O NOME DO JOGADOR:</label>
        <input  class="form-control" type="text" name="nomeJogador" id="nomeJogador" value="<?php if(isset($_POST['nomeJogador'])) echo ''. $nomeJogador .'';?>">
    </div>
    <br><br>
    <div>
        <input class="btn btn-primary" type="submit" name="acao" id="acao" value="Pronto">
    </div>
    <br><br>
</form>
<?php
if(isset($_POST['nomeJogador'])){
    for($a=0; $a<=5; $a++){
        $numeroDado = $a+1;
        $vetorJ[$a] = rand(1,6);
        echo '<h1 class="display-6">'. $nomeJogador .' Dado '. $numeroDado .':</h1>';
        switch ($vetorJ[$a]){
            case 1:
                echo "<img src=img/dice1.png><br><br><br>";
                $diceNumJ[0]++;
                break;
            case 2:
                echo "<img src=img/dice2.png><br><br><br>";
                $diceNumJ[1]++;
                break;
            case 3:
                echo "<img src=img/dice3.png><br><br><br>";
                $diceNumJ[2]++;
                break;
            case 4:
                echo "<img src=img/dice4.png><br><br><br>";
                $diceNumJ[3]++;
                break;
            case 5:
                echo "<img src=img/dice5.png><br><br><br>";
                $diceNumJ[4]++;
                break;
            case 6:
                echo "<img src=img/dice6.png><br><br><br>";
                $diceNumJ[5]++;
                break;
        }
    }

    echo "<br><br><br>";

    for($b=0; $b<=5; $b++){
        $numeroDado = $b+1;
        $vetorC[$b] = rand(1,6);
        echo '<h1 class="display-6">Computador Dado '. $numeroDado.':</h1>';
        switch ($vetorC[$b]){
            case 1:
                echo "<img src=img/dice1.png><br><br><br>";
                $diceNumC[0]++;
                break;
            case 2:
                echo "<img src=img/dice2.png><br><br><br>";
                $diceNumC[1]++;
                break;
            case 3:
                echo "<img src=img/dice3.png><br><br><br>";
                $diceNumC[2]++;
                break;
            case 4:
                echo "<img src=img/dice4.png><br><br><br>";
                $diceNumC[3]++;
                break;
            case 5:
                echo "<img src=img/dice5.png><br><br><br>";
                $diceNumC[4]++;
                break;
            case 6:
                echo "<img src=img/dice6.png><br><br><br>";
                $diceNumC[5]++;
                break;
        }
    }

    //Jogadas de números 1 a 6
    if($diceNumJ[0]==1 || $diceNumJ[0]==2 || $diceNumJ[0]==3 || $diceNumJ[0]==4 || $diceNumJ[0]==5){
        $Jjogada1 = 1*$diceNumJ[0];
    }
    if($diceNumJ[1]==1 || $diceNumJ[1]==2 || $diceNumJ[1]==3 || $diceNumJ[1]==4 || $diceNumJ[1]==5){
        $Jjogada2 = 2*$diceNumJ[1];
    }
    if($diceNumJ[2]==1 || $diceNumJ[2]==2 || $diceNumJ[2]==3 || $diceNumJ[2]==4 || $diceNumJ[2]==5){
        $Jjogada3 = 3*$diceNumJ[2];
    }
    if($diceNumJ[3]==1 || $diceNumJ[3]==2 || $diceNumJ[3]==3 || $diceNumJ[3]==4 || $diceNumJ[3]==5){
        $Jjogada4 = 4*$diceNumJ[3];
    }
    if($diceNumJ[4]==1 || $diceNumJ[4]==2 || $diceNumJ[4]==3 || $diceNumJ[4]==4 || $diceNumJ[4]==5){
        $Jjogada5 = 5*$diceNumJ[4];
    }
    if($diceNumJ[5]==1 || $diceNumJ[5]==2 || $diceNumJ[5]==3 || $diceNumJ[5]==4 || $diceNumJ[5]==5){
        $Jjogada6 = 6*$diceNumJ[5];
    }

    //Trincas
    if($diceNumJ[0]==3 || $diceNumJ[1]==3 || $diceNumJ[2]==3 || $diceNumJ[3]==3 || $diceNumJ[4]==3 || $diceNumJ[5]==3){
        $Jtrinca = 20;
    }
    if($diceNumC[0]==3 || $diceNumC[1]==3 || $diceNumC[2]==3 || $diceNumC[3]==3 || $diceNumC[4]==3 || $diceNumC[5]==3){
        $Ctrinca = 20;
    }

    //Quadras
    if($diceNumJ[0]==4 || $diceNumJ[1]==4 || $diceNumJ[2]==4 || $diceNumJ[3]==4 || $diceNumJ[4]==4 || $diceNumJ[5]==4){
        $Jquadra = 30;
    }
    if($diceNumC[0]==4 || $diceNumC[1]==4 || $diceNumC[2]==4 || $diceNumC[3]==4 || $diceNumC[4]==4 || $diceNumC[5]==4){
        $Cquadra = 30;
    }

    //Full House
    if($diceNumJ[0]==3 && $diceNumJ[1]==2 || $diceNumJ[0]==3 && $diceNumJ[2]==2 || $diceNumJ[0]==3 && $diceNumJ[3]==2 || $diceNumJ[0]==3 && $diceNumJ[4]==2 || $diceNumJ[0]==3 && $diceNumJ[5]==2){
        $JfullHouse = 25;
    }
    if($diceNumJ[1]==3 && $diceNumJ[0]==2 || $diceNumJ[1]==3 && $diceNumJ[2]==2 || $diceNumJ[1]==3 && $diceNumJ[3]==2 || $diceNumJ[1]==3 && $diceNumJ[4]==2 || $diceNumJ[1]==3 && $diceNumJ[5]==2){
        $JfullHouse = 25;
    }
    if($diceNumJ[2]==3 && $diceNumJ[1]==2 || $diceNumJ[2]==3 && $diceNumJ[0]==2 || $diceNumJ[2]==3 && $diceNumJ[3]==2 || $diceNumJ[2]==3 && $diceNumJ[4]==2 || $diceNumJ[2]==3 && $diceNumJ[5]==2){
        $JfullHouse = 25;
    }
    if($diceNumJ[3]==3 && $diceNumJ[1]==2 || $diceNumJ[3]==3 && $diceNumJ[2]==2 || $diceNumJ[3]==3 && $diceNumJ[0]==2 || $diceNumJ[3]==3 && $diceNumJ[4]==2 || $diceNumJ[3]==3 && $diceNumJ[5]==2){
        $JfullHouse = 25;
    }
    if($diceNumJ[4]==3 && $diceNumJ[1]==2 || $diceNumJ[4]==3 && $diceNumJ[2]==2 || $diceNumJ[4]==3 && $diceNumJ[3]==2 || $diceNumJ[4]==3 && $diceNumJ[0]==2 || $diceNumJ[4]==3 && $diceNumJ[5]==2){
        $JfullHouse = 25;
    }
    if($diceNumJ[5]==3 && $diceNumJ[1]==2 || $diceNumJ[5]==3 && $diceNumJ[2]==2 || $diceNumJ[5]==3 && $diceNumJ[3]==2 || $diceNumJ[5]==3 && $diceNumJ[4]==2 || $diceNumJ[5]==3 && $diceNumJ[0]==2){
        $JfullHouse = 25;
    }
    if($diceNumC[0]==3 && $diceNumC[1]==2 || $diceNumC[0]==3 && $diceNumC[2]==2 || $diceNumC[0]==3 && $diceNumC[3]==2 || $diceNumC[0]==3 && $diceNumC[4]==2 || $diceNumC[0]==3 && $diceNumC[5]==2){
        $CfullHouse = 25;
    }
    if($diceNumC[1]==3 && $diceNumC[0]==2 || $diceNumC[1]==3 && $diceNumC[2]==2 || $diceNumC[1]==3 && $diceNumC[3]==2 || $diceNumC[1]==3 && $diceNumC[4]==2 || $diceNumC[1]==3 && $diceNumC[5]==2){
        $CfullHouse = 25;
    }
    if($diceNumC[2]==3 && $diceNumC[1]==2 || $diceNumC[2]==3 && $diceNumC[0]==2 || $diceNumC[2]==3 && $diceNumC[3]==2 || $diceNumC[2]==3 && $diceNumC[4]==2 || $diceNumC[2]==3 && $diceNumC[5]==2){
        $CfullHouse = 25;
    }
    if($diceNumC[3]==3 && $diceNumC[1]==2 || $diceNumC[3]==3 && $diceNumC[2]==2 || $diceNumC[3]==3 && $diceNumC[0]==2 || $diceNumC[3]==3 && $diceNumC[4]==2 || $diceNumC[3]==3 && $diceNumC[5]==2){
        $CfullHouse = 25;
    }
    if($diceNumC[4]==3 && $diceNumC[1]==2 || $diceNumC[4]==3 && $diceNumC[2]==2 || $diceNumC[4]==3 && $diceNumC[3]==2 || $diceNumC[4]==3 && $diceNumC[0]==2 || $diceNumC[4]==3 && $diceNumC[5]==2){
        $CfullHouse = 25;
    }
    if($diceNumC[5]==3 && $diceNumC[1]==2 || $diceNumC[5]==3 && $diceNumC[2]==2 || $diceNumC[5]==3 && $diceNumC[3]==2 || $diceNumC[5]==3 && $diceNumC[4]==2 || $diceNumC[5]==3 && $diceNumC[0]==2){
        $CfullHouse = 25;
    }

    //Sequencia Alta
    if($diceNumJ[1]==1 && $diceNumJ[2]==1 && $diceNumJ[3]==1 && $diceNumJ[4]==1 && $diceNumJ[5]==1 ){
        $JsequenciaA = 30;
    }
    if($diceNumC[1]==1 && $diceNumC[2]==1 && $diceNumC[3]==1 && $diceNumC[4]==1 && $diceNumC[5]==1 ){
        $CsequenciaA = 30;
    }

    //Sequencia Baixa
    if($diceNumJ[1]==1 && $diceNumJ[2]==1 && $diceNumJ[3]==1 && $diceNumJ[4]==1 && $diceNumJ[0]==1 ){
        $JsequenciaB = 40;
    }
    if($diceNumC[1]==1 && $diceNumC[2]==1 && $diceNumC[3]==1 && $diceNumC[4]==1 && $diceNumC[0]==1 ){
        $CsequenciaB = 40;
    }

    //General
    if($diceNumJ[0]==5 || $diceNumJ[1]==5 || $diceNumJ[2]==5 || $diceNumJ[3]==5 || $diceNumJ[4]==5 || $diceNumJ[5]==5){
        $Jgeneral = 50;
    }
    if($diceNumC[0]==5 || $diceNumC[1]==5 || $diceNumC[2]==5 || $diceNumC[3]==5 || $diceNumC[4]==5 || $diceNumC[5]==5){
        $Cgeneral = 50;
    }

    //Aleatório
    $Jaleatorio = $vetorJ[0]+$vetorJ[1]+$vetorJ[2]+$vetorJ[3]+$vetorJ[4]+$vetorJ[5];
    $Caleatorio = $vetorC[0]+$vetorC[1]+$vetorC[2]+$vetorC[3]+$vetorC[4]+$vetorC[5];

    //Total
    $Jtotal = $Jjogada1+$Jjogada2+$Jjogada3+$Jjogada4+$Jjogada5+$Jjogada6+$Jtrinca+$Jquadra+$JfullHouse+$JsequenciaA+$JsequenciaB+$Jgeneral+$Jaleatorio;
    $Ctotal = $Cjogada1+$Cjogada2+$Cjogada3+$Cjogada4+$Cjogada5+$Cjogada6+$Ctrinca+$Cquadra+$CfullHouse+$CsequenciaA+$CsequenciaB+$Cgeneral+$Caleatorio;

    echo'
    <table class=" table table-dark table-striped">
    <tr class="tabela">
      <th class="tabela"></th>
      <th class="tabela">'. $nomeJogador .'</th>
      <th class="tabela">Computador</th>
    </tr>
    <tr class="tabela">
      <td class="tabela">Jogada 1</td>
      <td class="tabela">'. $Jjogada1 .'</td>
      <td class="tabela">'. $Cjogada1 .'</td>
    </tr>
    <tr class="tabela">
      <td class="tabela">Jogada 2</td>
      <td class="tabela">'. $Jjogada2 .'</td>
      <td class="tabela">'. $Cjogada2 .'</td>
    </tr>
    <tr class="tabela">
      <td class="tabela">Jogada 3</td>
      <td class="tabela">'. $Jjogada3 .'</td>
      <td class="tabela">'. $Cjogada3 .'</td>
    </tr>
    <tr class="tabela">
      <td class="tabela">Jogada 4</td>
      <td class="tabela">'. $Jjogada4 .'</td>
      <td class="tabela">'. $Cjogada4 .'</td>
    </tr>
    <tr class="tabela">
      <td class="tabela">Jogada 5</td>
      <td class="tabela">'. $Jjogada5 .'</td>
      <td class="tabela">'. $Cjogada5 .'</td>
    </tr>
    <tr class="tabela">
      <td class="tabela">Jogada 6</td>
      <td class="tabela">'. $Jjogada6 .'</td>
      <td class="tabela">'. $Cjogada6 .'</td>
    </tr>
    <tr class="tabela">
      <td class="tabela">Trinca</td>
      <td class="tabela">'. $Jtrinca .'</td>
      <td class="tabela">'. $Ctrinca .'</td>
    </tr>
    <tr class="tabela">
      <td class="tabela">Quadra</td>
      <td class="tabela">'. $Jquadra .'</td>
      <td class="tabela">'. $Cquadra .'</td>
    </tr>
    <tr class="tabela">
      <td class="tabela">Full House</td>
      <td class="tabela">'. $JfullHouse .'</td>
      <td class="tabela">'. $CfullHouse .'</td>
    </tr>
    <tr class="tabela">
      <td class="tabela">Sequencia alta</td>
      <td class="tabela">'. $JsequenciaA .'</td>
      <td class="tabela">'. $CsequenciaA .'</td>
    </tr>
    <tr class="tabela">
      <td class="tabela">Sequencia baixa</td>
      <td class="tabela">'. $JsequenciaB .'</td>
      <td class="tabela">'. $CsequenciaB .'</td>
    </tr>
    <tr class="tabela">
      <td class="tabela">General</td>
      <td class="tabela">'. $Jgeneral .'</td>
      <td class="tabela">'. $Cgeneral .'</td>
    </tr>
    <tr class="tabela">
      <td class="tabela">Aleatório</td>
      <td class="tabela">'. $Jaleatorio .'</td>
      <td class="tabela">'. $Caleatorio .'</td>
    </tr>
    <tr class="tabela">
      <td class="tabela">Total</td>
      <td class="tabela">'. $Jtotal .'</td>
      <td class="tabela">'. $Ctotal .'</td>
    </tr>
  </table>
';

if($Jtotal>$Ctotal){
    echo'<h1 style="text-align: center; font-size: 80px;">'. $nomeJogador .' ganhou!</h1>';
}else if($Ctotal>$Jtotal){
    echo '<h1 style="text-align: center; font-size: 80px;">Computador ganhou!</h1>';
}else{
    echo '<h1 style="text-align: center; font-size: 80px;">Empate</h1>';
}
}
?>
</div>
<div style="float:left; width: 23%; height: <?php if(isset($_POST["nomeJogador"])){echo "4500px;";}else{echo "800px;";} ?>; background-image: url(img/saemless.png);"></div>
</body>
</html>