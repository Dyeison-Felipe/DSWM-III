<?php

  require_once = __DIR__ "./discount.php";

  class DiscountPercentage extends Discount {

    public function discountPercent($porcent, $price) {
      $discountValue = ($porcent / 100) * $price;
      $newPrice = $discountValue - $price;

      return $newPrice;
    }
  }
?>