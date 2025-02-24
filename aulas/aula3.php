<?php 
  $name = $email = $message = "";
  
  $errorName = $errorEmail = "";

  // verifica se o formulário foi enviado

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // validações
    if(empty($_POST['name'])) {
      $errorName = "O campo nome é obrigatório!";
    } else {
     $name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_STRING); 
    }

    if(empty($_POST['email'])) {
      $errorEmail = "O campo email é obrigatório!";
    } else {
      $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
      if(empty($email)) {
        $errorEmail = "O campo email deve ser válido";
      }
    }

    $message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fomulário validação</title>
</head>
<body>
  <h2>Fomulário com validação e segurança</h2>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <label for="name">Nome:</label>
    <input type="text" name="name" value=""<?php echo $name;?> placeholder="Seu nome:">
    <span style="color: red;"><?php echo $errorName; ?></span>
    <br>

    <label for="email">Email:</label>
    <input type="text" name="email" value="<?php echo $email; ?>" placeholder="email" >
    <span style="color: red;"><?php echo $errorEmail; ?></span>
    <br>

    <label for="Email">Mensagem:</label>
    <textarea id="message" name="message"><?php echo $message; ?></textarea>
    <br>
    <input type="submit" value="enviar">
  </form>
  <?php // exibir dados processados caso não tenha erro
  if($_SERVER['REQUEST_METHOD'] == 'POST' && empty($errorName) && empty($errorEmail)) {
    echo "<h3>Dados recebidos:</h3>";
    echo "<p><strong>Nome:". $name . "</strong></p>";
    echo "<p><strong>Nome:". $email . "</strong></p>";
    echo "<p><strong>Nome:". $message . "</strong></p>";
  }
  
  ?>
</body>
</html>