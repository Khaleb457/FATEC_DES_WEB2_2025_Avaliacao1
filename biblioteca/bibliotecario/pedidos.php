<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: ../login.php");
        exit;
    }elseif($_SESSION["username"] === "professor"){
        header("location: ../index.php");
    }
include "../partials/header.html"
?>
<div class="card">
  <div class="card-header fs-2">
    Pedidos Cadastrados
  </div>
    <?php
    $txt = "../professor/pedidos.txt";
    if(!file_exists($txt)){
        echo '<div class="alert alert-warning mb-4 mt-4">';
        echo 'Nenhum Pedido cadastrado ainda. O sistema ainda não possui registros.';
        echo '</div>';
    }else{
        echo '<div class="card-body">
        <table class="table">
        <thead>
          <tr>
            <th scope="col">Título</th>
            <th scope="col">Autor</th>
            <th scope="col">Editora</th>
            <th scope="col">ISBN</th>
          </tr>
        </thead>
        <tbody>';
        $handle = fopen("../professor/pedidos.txt", "r");
        if($handle){
            while(!feof($handle)){
                $linha = trim(fgets($handle));
    
                if(!empty($linha)){
                    $dados = explode("|", $linha);
                    if(count($dados)>=4){
                        echo '<tr>';
                        echo '<td>' . htmlspecialchars($dados[0]) . '</td>';
                        echo '<td>' . htmlspecialchars($dados[1]) . '</td>';
                        echo '<td>' . htmlspecialchars($dados[2]) . '</td>';
                        echo '<td>' . htmlspecialchars($dados[3]) . '</td>';
                        echo '</tr>';
                    }
                }
            }
            fclose($handle);
        }else{
            echo '<tr><td colspan="4" class="text-center text-danger">Erro ao carregar os pedidos</td></tr>';
        }
    }
    ?>
    
      </tbody>
    </table>
    <a href="../index.php" class="btn btn-warning" role="button">Voltar</a>
      </div>
    </div>
    <?php
    ?>