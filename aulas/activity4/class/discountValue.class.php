<?php

  require_once = __DIR__ "./discount.php";

  class DiscountValue extends Discount {

    public function discountValue($value, $price) {
      $newPrice = $value - $price;

      return $newPrice;
    }
  }
?>