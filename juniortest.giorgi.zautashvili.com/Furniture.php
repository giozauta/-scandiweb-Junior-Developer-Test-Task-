<?php
require_once "AbstractProduct.php";
// src/Models/Furniture.php
class Furniture extends AbstractProduct {
    public function __construct($id,$sku, $name, $price, $dimensions) {
        parent::__construct($id,$sku, $name, $price, $dimensions);
    }

    public function getType() {
        return 'Furniture';
    }

    public function getAttribute() {
        return "Dimensions: " . $this->attribute;
    }
}
?>
