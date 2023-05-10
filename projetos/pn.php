<?php
    $n1 = 0;
    $result = "";
    
    if(isset($_POST['calcular'])){
        $n1 = (int)$_POST['n1'];
        if ($n1 == 0){
            $result = "Zero";
        }
        elseif ($n1 < 0){
            $result = "Negativo";
        }
        elseif ($n1 > 0){
            $result = "Positivo";
        }
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
    <h5>Positivo ou Negativo</h5>
    <form method="post">
        Digite um número<br>
        <input type="number" name="n1" value= <?= $n1 ?> required ><br>
        <input type="submit" name="calcular">
        <br><br>
        
        <p>Resultado: <?= $result ?> </p>
        
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>