<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: ../login.php");
        exit;
    }elseif($_SESSION["username"] === "professor"){
        header("location: ../index.php");
    }
    include "../partials/header.html";
?>

<div class="container mt-3">
<div class="card">
  <h5 class="card-header">Cadastro de livros</h5>
  <div class="card-body">
  <form action="index.php" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Titulo:</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Autor:</label>
        <input type="text" class="form-control" id="autor" name="autor">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Editora:</label>
        <input type="text" class="form-control" id="editora" name="editora">
    </div>  
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">ISBN:</label>
        <input type="text" class="form-control" id="isbn" name="isbn">
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
    <a href="../index.php" class="btn btn-warning me-2" role="button">Voltar</a>
    </form>
  </div>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $filename = "livros.txt";
    if(!file_exists("livros.txt")){
        $handle = fopen("livros.txt", "w");
    } else {
        $handle = fopen("livros.txt", "a");
    }

    if ($handle){
        $cadastro =  [
            "Titulo: " . $_POST['title'],
            "Autor: " . $_POST['autor'],
            "Editora: " . $_POST['editora'],
            "ISBN: " . $_POST['isbn']
        ];

        $linha = implode("|", $cadastro);
        fwrite($handle, $linha . "\n");
    }
    header("location: index.php");
}
?>




