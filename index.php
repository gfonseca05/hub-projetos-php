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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" aria-current="page" href="?page=''">Projetos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown">
                Qual deseja ver?
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="?page=maior2">Maior entre 2</a></li>
                <li><a class="dropdown-item" href="?page=pn">Positivo/Negativo</a></li>
                <li><a class="dropdown-item" href="?page=fm">Feminino/Masculino</a></li>
                <li><a class="dropdown-item" href="?page=nota">Média de notas</a></li>
                <li><a class="dropdown-item" href="?page=maior3">Maior entre 3</a></li>
                <li><a class="dropdown-item" href="?page=barato">Produto mais barato</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <h4 class="container mt-3">Bem vindo ao hub de projetos!</h4>
    <div class="container shadow-sm p-3 mb-3 mt-3 bg-body-tertiary rounded col mt-5">
    <div class="row">
    <div class="col">
        <?php
        switch(@$_REQUEST["page"]){
            case "maior2":
                include("./projetos/maior2.php");
                break;
                case "pn":
                    include('./projetos/pn.php');
                    break;
                    case "fm":
                        include('./projetos/fm.php');
                        break;
                        case "nota":
                            include('./projetos/nota.php');
                            break;
                            case "maior3":
                                include('./projetos/maior3.php');
                                break;
                                case "barato":
                                    include('./projetos/barato.php');
                                    break;
                                    default:
                                    print "<h5>Escolha um projeto para visualizar!</h5>";
        }
        ?>
    </div>
    </div>    
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>