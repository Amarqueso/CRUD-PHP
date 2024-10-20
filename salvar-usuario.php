<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $valor = $_POST["valor"];
            $tipo = $_POST["tipo"];
            $despesa_receita = strtolower($_POST["despesa_receita"]); // Converte para minúsculas

            if ($despesa_receita === 'despesa') {
                $valor = -abs($valor);
            } else {
                $valor = abs($valor);
            }

            $sql = "INSERT INTO transacao (valor, tipo, despesa_receita) 
                    VALUES ('{$valor}', '{$tipo}', '{$despesa_receita}')";

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Cadastro com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível realizar cadastro!!!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;

        case 'alterar':
            $valor = $_POST["valor"];
            $tipo = $_POST["tipo"];
            $despesa_receita = strtolower($_POST["despesa_receita"]);

            $sql = "UPDATE transacao SET valor='{$valor}', tipo='{$tipo}', despesa_receita='{$despesa_receita}' 
                    WHERE id=" . $_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Editado com Sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível Editar o Cadastro!!!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;

        case 'deletar':
            $sql = "DELETE FROM transacao WHERE id=" . $_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Excluído com Sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível Excluir o Cadastro!!!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;

        default:
            break;
    }
?>
