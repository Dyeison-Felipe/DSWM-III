<?php
// Definição do nome do arquivo que será manipulado
$arquivo = "exemplo.txt";

/* ---------- Escrita em Arquivo ---------- */

// Abre o arquivo em modo de escrita ("w" - write)
// Se o arquivo não existir, ele será criado. Se existir, será sobrescrito.
// $handle = fopen($arquivo, "w");

// // Verifica se o arquivo foi aberto corretamente
// if ($handle) {
//     // Escreve um texto no arquivo
//     $conteudo = "Olá, este é um exemplo de escrita em arquivo usando PHP.\n";
//     fwrite($handle, $conteudo); // Escreve a string no arquivo
    
//     // Escrevendo outra linha
//     fwrite($handle, "Esta é a segunda linha do arquivo.\n");

//     // Fecha o arquivo após a escrita
//     fclose($handle);
//     echo "Arquivo escrito com sucesso!<br>";
// } else {
//     echo "Erro ao abrir o arquivo para escrita!<br>";
// }

/* ---------- Leitura de Arquivo ---------- */

// Abre o arquivo em modo de leitura ("r" - read)
// $handle = fopen($arquivo, "r");

// // Verifica se o arquivo foi aberto corretamente
// if ($handle) {
//     // Lê o conteúdo do arquivo
//     $conteudo = fread($handle, filesize($arquivo)); // Lê todo o conteúdo do arquivo
//     fclose($handle); // Fecha o arquivo após a leitura
    
//     // Exibe o conteúdo do arquivo na tela
//     echo "<strong>Conteúdo do Arquivo:</strong><br>";
//     echo nl2br($conteudo); // Converte quebras de linha para HTML
// } else {
//     echo "Erro ao abrir o arquivo para leitura!<br>";
// }

// /* ---------- Leitura Alternativa com file_get_contents ---------- */

// Outra forma de ler um arquivo sem precisar abrir e fechar manualmente
$conteudo_rapido = file_get_contents($arquivo);

if ($conteudo_rapido !== false) {
    echo "<br><strong>Conteúdo lido com file_get_contents:</strong><br>";
    echo nl2br($conteudo_rapido);
} else {
    echo "Erro ao ler o arquivo com file_get_contents!<br>";
}
// ?>