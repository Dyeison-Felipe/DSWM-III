<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atividade - 2</title>
</head>
<body>
  <form action="" method="POST">
    <button type="submit">Calcular Fibonacci</button>
  </form>

  <?php 
  // Função para calcular a sequência de Fibonacci até o décimo termo
  // O conceito de Fibonacci é baseado em uma sequência em que cada número é a soma dos dois anteriores, começando com 0 e 1.
  function calcularFibonacci($n) {
    // números inicias em Fibonacci
      $a = 0;
      $b = 1;
      
      echo "Sequência de Fibonacci até o 10º termo: <br>";

      // Exibe os primeiros dois termos (0 e 1)
      echo $a . "<br>";
      echo $b . "<br>";

      // Calcula e exibe os próximos termos até o décimo
      for ($i = 2; $i < $n; $i++) {
          $c = $a + $b;  // Calcula o próximo número
          echo $c . "<br>";
          $a = $b;  // Atualiza o valor de a
          $b = $c;  // Atualiza o valor de b
      }
  }

  // Verifica se o formulário foi enviado
  if($_SERVER["REQUEST_METHOD"] == "POST") {
      // Chama a função para calcular a sequência de Fibonacci até o 10º termo
      calcularFibonacci(10);
  }
  ?>
</body>
</html>
