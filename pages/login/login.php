<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // recebe os dados digitado no formulário
    $username = $_POST['username'];
    $password = $_POST['password'];

    // verificar se o usuário exite no arquivo
    $filePath = "../register/users.txt";
    if (file_exists($filePath)) {
      $file = fopen($filePath, "r");

      // verifica cada linha dor aquivo para encontrar o usuário
      while (($line = fgets($file)) !== false) {
        $line = trim($line);
        list($storedUsername, $storedPhone, $storedPasswordHash) = explode(",", $line);

        if($username == $storedUsername && password_verify($password, $storedPasswordHash)) {
          echo "Login realizado com sucesso, bem vindo, $username.";
          fclose($file);
          exit;
        }
      }
      fclose($file);
      echo("Usuário ou senha incorretos");
    } else {
      echo "usuário $username não cadastrado";
    }
  }
?>