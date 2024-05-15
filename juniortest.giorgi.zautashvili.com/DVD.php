<?php
require_once "AbstractProduct.php";

class Dvd extends AbstractProduct {
    public function __construct($id,$sku, $name, $price, $size) {
        parent::__construct($id,$sku, $name, $price, $size);
    }

    public function getType() {
        return 'DVD';
    }

    public function getAttribute() {
        return "Size: " . $this->attribute . " MB";
    }

    
}

?>
