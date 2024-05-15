<?php
require_once "AbstractProduct.php";
// src/Models/Book.php
class Book extends AbstractProduct {
    public function __construct($id,$sku, $name, $price, $weight) {
        parent::__construct($id,$sku, $name, $price, $weight);
    }

    public function getType() {
        return 'Book';
    }

    public function getAttribute() {
        return "Weight: " . $this->attribute . " Kg";
    }
}
?>
