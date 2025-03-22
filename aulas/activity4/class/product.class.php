<?php
  class Product {
    protect $name;
    protect $price;
    protect $quantity;
    protect $filePath;

    public function __construct($name, $price, $quantity) {
      $this->name = $name;
      $this->price = $price;
      $this->quantity = $quantity;
      $this->filePath = __DIR__."../db/products.json"
    };

    public function getName() {
      return $this->name;
    }

    public function getPrice() {
      return $this->price;
    }

    public function getQuantity() {
      return $this->quantity;
    }

    protect function setName($name) {
      this->name = $name;
    }

    protect function setPrice($price) {
      $this->price = $price;
    }

    protect function setQuantity($quantity) {
      $this->quantity = $quantity;
    }

    public function getProduct() {
      echo "nome: ". $this->getName(). "<br> preço: ". $this->getPrice(). "<br> quantidade: ". $this->getQuantity();
    }

    protect function discount(Discount $discount, $discountValue){
      $this->price = $discount->execute($this->price, $discountValue);
    }

    public create($name, $price, $quantity) {

      if (!file_exists($filePath)) {
        // Se o arquivo não existir, cria um arquivo vazio
        file_put_contents($filePath, json_encode([]));
      }

      $fileContents = file_get_contents($filePath);

      $products = json_decode($fileContents, true);

      $id = 1;

      if (is_array($products) && !empty($products)) {
        // Pegar o último produto do array
        $lastProduct = end($products);
        
        // Verificar se o campo 'id' existe no último produto
        if (isset($lastProduct['id'])) {
            $lastId = $lastProduct['id'];
            $id = $lastId + 1;
        }
    } else {
        $products = [];
    }

    $newProduct = [
      'id' => $id,
      'name' => $name,
      'price' => $price,
      'quantity' => $quantity,
    ]

    $products[] = $newProduct;

    // Codifica o array de volta para JSON
    $newFileContents = json_encode($products, JSON_PRETTY_PRINT);

    // Escreve o novo conteúdo de volta no arquivo
    file_put_contents($filePath, $newFileContents);

    fclose($file);
    }

    protected function loadProducts() {
      if (!file_exists($this->filePath)) {
          return [];
      }

      $json = file_get_contents($this->filePath);
      return json_decode($json, true) ?? []; 
  }


    protected function generateUniqueId($products) {
      // Se não houver produtos, o primeiro ID será 1
      if (empty($products)) {
          return 1;
      }

      // Encontra o maior ID existente e adiciona 1
      $lastProduct = end($products);
      return $lastProduct['id'] + 1;
  }
  }
?>