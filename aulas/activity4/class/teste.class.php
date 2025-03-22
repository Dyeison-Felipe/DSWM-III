<?php

class Produto {
    private string $nome;
    private float $preco;
    private int $quantidade;

    public function __construct(string $nome, float $preco, int $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function exibirInfo(): void {
        echo "Produto: {$this->nome}, Preço: R$ {$this->preco}, Quantidade: {$this->quantidade}\n";
    }

    public function aplicarDesconto(float $percentual): void {
        if ($percentual > 0 && $percentual <= 100) {
            $this->preco -= ($this->preco * ($percentual / 100));
        }
    }

    public function atualizarQuantidade(int $novaQuantidade): void {
        if ($novaQuantidade >= 0) {
            $this->quantidade = $novaQuantidade;
        }
    }

    public function getPreco(): float {
        return $this->preco;
    }

    public function getQuantidade(): int {
        return $this->quantidade;
    }
}

class Estoque {
    private array $produtos = [];

    public function adicionarProduto(Produto $produto): void {
        $this->produtos[] = $produto;
    }

    public function listarProdutos(): void {
        foreach ($this->produtos as $produto) {
            $produto->exibirInfo();
        }
    }

    public function calcularValorTotal(): float {
        $total = 0;
        foreach ($this->produtos as $produto) {
            $total += $produto->getPreco() * $produto->getQuantidade();
        }
        return $total;
    }
}

// Teste do sistema
$produto1 = new Produto("Notebook", 3500.00, 5);
$produto2 = new Produto("Mouse", 150.00, 10);
$produto3 = new Produto("Teclado", 250.00, 7);

$estoque = new Estoque();
$estoque->adicionarProduto($produto1);
$estoque->adicionarProduto($produto2);
$estoque->adicionarProduto($produto3);

$estoque->listarProdutos();

echo "\nValor total do estoque: R$ " . number_format($estoque->calcularValorTotal(), 2, ',', '.') . "\n";

// Aplicando desconto
$produto1->aplicarDesconto(10);
echo "\nApós aplicar desconto:\n";
$produto1->exibirInfo();

// Atualizando quantidade
$produto2->atualizarQuantidade(15);
echo "\nApós atualizar quantidade:\n";
$produto2->exibirInfo();

?>