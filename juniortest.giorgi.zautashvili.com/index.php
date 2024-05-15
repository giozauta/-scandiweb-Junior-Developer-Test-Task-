<?php
    require_once "./ProductManager.php";
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="./css/styles.css">

</head>

<body>
    <div class="page1">
        <div class="navbar">
            <div><h1>Product List</h1></div>
            <div>
                <button id="add-product-btn">ADD</button>
                <button id="delete-product-btn">MASS DELETE</button>
            </div>
        </div>
        <hr>
        <div class="products-list-cont">
            <?php
            foreach ($products as $product) {
                echo "<div class='product-box'><br>".
                    "<input type='checkbox' class='delete-checkbox' name='delete' value=".$product['id'] .">" . 
                    "<div class='pr-Atr'>" . $product['sku'] . "</div>".
                        "<div class='pr-Atr'>" . $product['name']. "</div>".
                        "<div class='pr-Atr'>" . $product['price'] . "$</div>".
                        "<div class='pr-Atr'>" . $product['attribute']. "</div>".
                    "</div>";
            }
            ?>
         </div>
         <hr>
    </div>

    <script src="./js/index.js"></script>
    <script>
           // for goind add product page
              document.getElementById('add-product-btn').addEventListener('click', function() {
              window.location.href = './addproduct';
          });
    </script>

</body>
</html>

