<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Notas</title>
</head>
<body>
    <h2>Cadastrar Aluno</h2>
    <form action="" method="POST">
        <input type="text" name="nome" placeholder="Nome do aluno" required>
        <input type="number" step="0.1" name="nota" placeholder="Nota" required>
        <button type="submit">Salvar</button>
    </form>

    <?php 
    define('ARQUIVO', 'notas.txt');

    // Função para salvar aluno e nota no arquivo
    function salvarNota($nome, $nota) {
        $linha = "$nome, $nota\n";
        file_put_contents(ARQUIVO, $linha, FILE_APPEND);
    }

    // Função para listar alunos e notas
    function listarNotas() {
        if (!file_exists(ARQUIVO)) return [];
        $linhas = file(ARQUIVO, FILE_IGNORE_NEW_LINES);
        $alunos = [];
        foreach ($linhas as $linha) {
            list($nome, $nota) = explode(", ", $linha);
            $alunos[] = ["nome" => $nome, "nota" => (float) $nota];
        }
        return $alunos;
    }

    // Função para calcular a média das notas
    function calcularMedia($alunos) {
        if (empty($alunos)) return 0;
        return array_sum(array_column($alunos, 'nota')) / count($alunos);
    }

    // Processamento do formulário
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome']) && isset($_POST['nota'])) {
        $nome = trim($_POST['nome']);
        $nota = (float) $_POST['nota'];
        salvarNota($nome, $nota);
    }

    $alunos = listarNotas();
    $media = calcularMedia($alunos);
    ?>

    <h2>Lista de Alunos e Notas</h2>
    <?php if (!empty($alunos)): ?>
        <ul>
            <?php foreach ($alunos as $aluno): ?>
                <li><?php echo htmlspecialchars("{$aluno['nome']}: {$aluno['nota']}"); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Nenhum aluno cadastrado.</p>
    <?php endif; ?>

    <h2>Média das Notas</h2>
    <p><?php echo "Média: " . number_format($media, 2); ?></p>

</body>
</html>