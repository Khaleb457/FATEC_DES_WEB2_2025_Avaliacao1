<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: ../login.php");
        exit;
    }
    include "../partials/header.html";
include "../partials/header.html"
?>
<div class="card">
  <div class="card-header fs-2">
    Livros Cadastrados
  </div>
    <?php
    $txt = "../bibliotecario/livros.txt";
    if(!file_exists($txt)){
        echo '<div class="alert alert-warning mb-4 mt-4">';
        echo 'Nenhum livro cadastrado ainda. O sistema ainda não possui registros.';
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
        $handle = fopen("../bibliotecario/livros.txt", "r");
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
            echo '<tr><td colspan="4" class="text-center text-danger">Erro ao carregar os livros</td></tr>';
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