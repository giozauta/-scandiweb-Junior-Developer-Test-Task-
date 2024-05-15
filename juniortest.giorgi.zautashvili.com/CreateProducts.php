<?php 
// როგორც მივხვდი ამ პროდაქტს ვერ ვიყენებთ იმიტომ რომ აქვე ვიძახებთ  დათას სხვა ადგილზე უნდა შექმნა 
require_once "./config/connect_db.php";
require_once "./Book.php";
require_once "./DVD.php";
require_once "./Furniture.php";



Class Products {
    public static function CreateProducts($id,$type, $sku, $name, $price, $attribute){
        switch($type){
            case "Book":
                return new Book($id,$sku, $name, $price, $attribute);
            case "DVD":
                return new Dvd($id,$sku, $name, $price, $attribute);
            case "Furniture":
                return new Furniture($id,$sku, $name, $price, $attribute);
        }
    }
}

?>
