<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Transações</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="?page=novo">Cadastro de Transações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=listar">Listagem de Transações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=deletar">Exclusão de Transações</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col mt-5">
            <?php
                include("config.php");
                switch(@$_REQUEST["page"]){
                    case "novo":
                        include("nova-transacao.php");
                    break;
                    case "listar":
                        include("listar-transacao.php");
                    break;
                    case "alterar":
                        include("alterar-transacao.php");
                    break;
                    case "deletar":
                        include("deletar-transacao.php");
                    break;
                    case "salvar":
                        include("salvar-usuario.php");
                    break;
                    default:
                        include("nova-transacao.php");
                    break;
                }
            ?>
        </div>
    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
