<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atividade - Pangrama</title>
</head>
<body>
  <form action="" method="POST">
    <input type="text" name="texto" placeholder="Digite um texto" required>
    <button type="submit">Verificar</button>
  </form>

  <?php 
  // Função para verificar se o texto é um pangrama
  function verificarPangrama($texto) {
      // Converte o texto para minúsculas e remove caracteres não alfabéticos
      $texto = strtolower(preg_replace('/[^a-z]/', '', $texto));
      
      // Cria um array com todas as letras do alfabeto
      $alfabeto = range('a', 'z');
      
      // Verifica se todas as letras do alfabeto estão presentes no texto
      foreach ($alfabeto as $letra) {
          if (strpos($texto, $letra) === false) {
              return "O texto não é um pangrama.";
          }
      }
      
      return "O texto é um pangrama.";
  }

  // Verifica se o formulário foi enviado
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $texto = $_POST['texto'];
      // Exibe o resultado da verificação
      echo verificarPangrama($texto);
  }
  ?>
</body>
</html>
