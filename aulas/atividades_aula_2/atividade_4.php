<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atividade - 4</title>
</head>
<body>
  <form action="" method="POST">
    <input type="number" name="numero" placeholder="digite um número" required>
    >
    <button type="submit">Enviar</button>
  </form>

  <?php 
  //verificar se o usuário enviou o formulário
  function verifyNumber($num){
    if($num == 0){
      echo "O número, $num, é zero";
    }elseif($num % 2 == 0) {
      echo "O número, $num, é par";
    }

    if($num % 2 != 0 ){
      echo "O número, $num , é ímpar";
    }
  }
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];

    verifyNumber($numero);
  }
  ?>
</body>
</html>