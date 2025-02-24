<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atividade - 2</title>
</head>
<body>
  <form action="" method="POST">
    <button type="submit">Imprimir números</button>
  </form>

  <?php 

  function imprimirNumeros() {
    for($i = 0; $i <= 20; $i++) {
      if($i % 3 != 0) {
        echo $i . "<br>";
      } else {
        echo "X<br>";
      }
    }
  }
  //verificar se o usuário enviou o formulário
  if($_SERVER["REQUEST_METHOD"] == "POST") {

    imprimirNumeros();
  }
  ?>
</body>
</html>