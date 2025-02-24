<?php 
  // verificar se o formulario foi enviado
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    // recebendo os dados do formulário
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // criptografando a senha
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // armazenar os dados em um arquivo (alternativa para banco de dados)
    $file = fopen("users.txt", "a");

    fwrite($file, "$username,$phone,$passwordHash\n");
    fclose($file);

    echo("Usuário cadastrado com sucesso!");
  }
?>