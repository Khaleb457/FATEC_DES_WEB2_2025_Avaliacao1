<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
      session_start();
      if($_POST['user'] == 'biblio' and $_POST['senha'] == 'biblio'){
          $_SESSION['loggedin'] = TRUE;
          $_SESSION["username"] = 'bibliotecario';
          header("location: index.php");
      } elseif(($_POST['user'] == 'professor' and $_POST['senha'] == 'professor')) {
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'professor';
        header("location: index.php");
      }else{
        $_SESSION['loggedin'] = FALSE;
      }
  }
  include "partials/header.html"
?>

    <div class="container mt-5">
        <form class="login-form p-4 border rounded shadow-sm" method="POST" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>'>
            <h2 class="mb-4 text-center">Página de Login</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="user" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="senha" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Conectar-se</button>
            <a href="index.php" class="btn btn-warning w-100 mt-3" role="button">Voltar</a>
        </form>
    </div>


