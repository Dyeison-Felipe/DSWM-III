<?php 

  abstract class Discount {
    abstract public function execute($price, $dicount) {}
  }
?>