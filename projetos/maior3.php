<?php
    $n1 = 0;
    $n2 = 0;
    $n3 = 0;
    $result = 0;
    

    if(isset($_POST['calcular'])){
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];
        $n3 = (int)$_POST['n3'];
        if($n1 > $n2 && $n1 > $n3){
            $result = $n1;
        }
        elseif($n2 > $n1 && $n2 > $n3){
            $result = $n2;
        }
        elseif($n3 > $n1 && $n3 > $n3){
            $result = $n3;
        }
        else
            $result = "Informe os valores";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>HUB</title>
</head>
<body>
    <h5>Maior entre 3</h5>
    <form method="post">
        Primeiro numero<br>
        <input type="number" name="n1" value= <?= $n1 ?> required ><br>
        Segundo numero<br>
        <input type="number" name="n2" value= <?= $n2 ?> required ><br>
        Terceiro numero<br>
        <input type="number" name="n3" value= <?= $n3 ?> required ><br>
        <input type="submit" name="calcular">
        <br><br>
        
        <p>Resultado: <?= $result ?> </p>
        
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>