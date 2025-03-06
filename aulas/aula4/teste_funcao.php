<?php 
$frase = "PHP é uma linguagem poderosa";

// 1. strlen() - Obtém o comprimento da string
$tamanho = strlen($frase);
echo "O tamanho da string é: $tamanho <br>";

// 2. strpos() - Procura a posição de uma palavra na string
$posicao = strpos($frase, "linguagem");
if ($posicao !== false) {
    echo "A palavra 'linguagem' está na posição: $posicao <br>"; // Exibe a posição onde a palavra foi encontrada
} else {
    echo "Palavra não encontrada na string. <br>";
}

// 3. explode() - Divide uma string em um array, usando um espaço como delimitador
$palavras = explode(" ", $frase);
echo "Array gerado com explode(): ";
print_r($palavras); // Exibe o array criado pela separação da string
echo "<br>";

// 4. implode() - Junta os elementos de um array em uma string, separando-os por hífen "-"
$novaFrase = implode("-", $palavras);
echo "String gerada com implode(): $novaFrase <br>";

// 5. array_merge() - Junta dois arrays em um único array
$array1 = ["Maçã", "Banana"];
$array2 = ["Laranja", "Uva"];
$arrayUnido = array_merge($array1, $array2);

echo "Array unido com array_merge(): ";
print_r($arrayUnido); // Exibe o array resultante da fusão
echo "<br>";
?>