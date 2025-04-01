<?php
session_start();
include "partials/header.html"
?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Biblioteca Virtual</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="bibliotecario/index.php">Cadastro de Livros</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="professor/index.php">Cadastro de pedidos</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <a href="login.php" class="btn btn-success me-2" role="button">Login</a>
            <a href="destroy.php" class="btn btn-danger" role="button">Logout</a>
        </form>
        </div>
    </div>
    </nav>
    <div class="card container mt-3">
        <div class="card-header text-center fs-4">
            Visualização
        </div>
        <div class="card-body">
            <?php
            if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            echo ucwords('<h2 class= "text-center">Seja bem-vindo, faça seu login para mais beneficios</h2>');
            }else{
                echo ucwords('<h2 class= "text-center">Seja Bem Vindo ' . htmlspecialchars($_SESSION["username"]) . '</h2>');
                echo '<a href="professor/visualizar.php" class="btn btn-success btn-lg me-2 mt-2 w-100">Visualizar Livros</a>';
            }
            
            if(isset($_SESSION['username']) && $_SESSION['username'] === "bibliotecario") {
                echo '<a href="bibliotecario/pedidos.php" class="btn btn-light me-2 mt-2 btn-lg w-100">Visualizar Pedidos</a>';
            }
    ?>
        </div>
    </div>
