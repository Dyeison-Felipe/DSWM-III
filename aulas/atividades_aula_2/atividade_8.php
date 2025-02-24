<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atividade - 2</title>
</head>
<body>
  <form action="" method="POST">
    <input type="text" name="frase" placeholder="digite uma frase" required>
    >
    <button type="submit">Enviar</button>
  </form>

  <?php 
  function removerEspaços($frase) {
    // A expressão regular \s+ encontra qualquer tipo de espaço em branco (espaço, tabulação, nova linha) e o substitui por uma string vazia. O + significa "um ou mais espaços consecutivos".
   $palavraSemEspaco = preg_replace('/\s+/', '', $frase);
   echo "Palavra sem espaços: $palavraSemEspaco";
}
  //verificar se o usuário enviou o formulário
  if($_SERVER["REQUEST_METHOD"] == "POST") {
   $frase = $_POST['frase'];
   echo "Palavra original: $frase<br>";
   removerEspaços($frase);
  }
  ?>
</body>
</html>