<?php
echo '<h3>Livros Cadastrados</h3>';
$handle = fopen("../bibliotecario/livros.txt", "r");
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }
fclose($handle);
?>