<?php
abstract class  AbstractProduct{
    //Properties
    public $id;
    public $sku;
    public $name;
    public $price;
    public $type;
    public $attribute;
    
    public function __construct($id,$sku, $name, $price, $attribute){
        $this->id = $id;
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->attribute = $attribute;
    }
    public function getId(){
        return $this->id;
    }
    public function getSku() {
        return $this->sku;
    }
    public function getName() {
        return $this->name;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getAttribute() {
        return $this->attribute;
    }
    abstract public function getType();
}
?>
