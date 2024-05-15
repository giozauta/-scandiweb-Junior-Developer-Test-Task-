<?php
require "../config/connect_db.php";

$rawData = file_get_contents("php://input");
$data = json_decode($rawData, true);

class ProductHandler {
    private $conn;
    private $data;

    public function __construct($conn, $data) {
        $this->conn = $conn;
        $this->data = $data;
    }

    // This function is for generating a unique name for "sku"
    public static function generateUniqueString($baseString) {
        $randomSuffix = bin2hex(random_bytes(3));
        return $baseString . $randomSuffix;
    }

    public function addProduct($type) {
        $sku = $name = $price = $attribute = "";

        switch ($type) {
            case "DVD":
                $sku = self::generateUniqueString($this->data["sku"]);
                $name = $this->data["name"];
                $price = $this->data["price"];
                $attribute = $this->data["size"];
                break;
            case "Book":
                $sku = self::generateUniqueString($this->data["sku"]);
                $name = $this->data["name"];
                $price = $this->data["price"];
                $attribute = $this->data["weight"];
                break;
            case "Furniture":
                $sku = self::generateUniqueString($this->data["sku"]);
                $name = $this->data["name"];
                $price = $this->data["price"];
                $height = $this->data["height"];
                $width = $this->data["width"];
                $length = $this->data["length"];
                $attribute = "$height x $width x $length";
                break;
            default:
                return false;
        }

        if ($sku != "" && $name != "" && $price != "" && $attribute != "") {
            $sql = "INSERT INTO products (sku, name, price, type, attribute)
                    VALUES ('$sku', '$name', '$price', '$type', '$attribute')";
            if ($this->conn->query($sql)) {
                return "Product added successfully!";
            } else {
                return "Error adding product: " . $this->conn->error;
            }
        }
    }   
}

// Instantiate ProductHandler only if data is received
if ($data !== null && isset($data["product_select"])) {
    $productHandler = new ProductHandler($conn, $data);
    $response = $productHandler->addProduct($data["product_select"]);
    echo $response;
}
?>