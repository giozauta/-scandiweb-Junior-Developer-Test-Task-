<?php
require_once "./config/connect_db.php";
require_once "./CreateProducts.php";

class ProductManager {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;

    }

    public function fetchProducts() {
        $sql = "SELECT * FROM products";
        $result = $this->conn->query($sql);

        $productsArray = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $object = Products::CreateProducts($row["id"], $row["type"], $row["sku"], $row["name"], $row["price"], $row["attribute"]);

                $productInfo = array(
                    'id' => $object->getId(),
                    'sku' => $object->getSku(),
                    'name' => $object->getName(),
                    'price' => $object->getPrice(),
                    'attribute' => $object->getAttribute()
                );

                $productsArray[] = $productInfo;
               
            }
        }
      
        return $productsArray;
    }
}

$productManager = new ProductManager($conn);
$products = $productManager->fetchProducts();


?>
