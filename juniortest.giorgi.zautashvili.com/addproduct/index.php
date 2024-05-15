<?php
    require_once "./addProduct.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addproduct</title>
    <link rel="stylesheet" href="../css/addProduct.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="nav-bar">
        <div>
            <h1>Product Add</h1>
        </div>
        <div>
            <button id="save" type="submit">Save</button>
            <button id="cancel">Cancel</button>
        </div>    
    </div>
    <hr>
    <div class="form-box">
        <!--i wanted not to change page becouse of that i am using PHP_SELF-->
        <form id="product_form">
            <label for="sku" id="sku">SKU</label><span id="skuErr"></span>
            <input type="text" name="sku" required><br>
            <label for="name">Name</label><span id="nameErr"></span>
            <input type="text" name="name" id="name" required><br>
            <label for="price">Price ($)</label><span id="priceErr"></span>
            <input type="number" name="price" id="id" required><br>

            <label for="product_select">Type Switcher</label><span id="typeErr"></span>
            <select id="product_select" name="product_select">
                <option style="display: none;" disabled selected>Type Switcher</option>
                <option id="DVD" value="DVD">DVD</option>
                <option id="Book" value="Book">Book</option>
                <option id="Furniture" value="Furniture">Furniture</option>
            </select>

            <!--this is size  for dvd switcher -->
            <div class="dvd_size_box pr_atrr">
                <label>Please, provide size</Label>
                <label for="size">Size (MB)</label><span id="sizeErr"></span>
                <input type="number" name="size" id="size">
            </div>

            <!--this is size  for book switcher -->
            <div class="book_weight_box pr_atrr">
                <label>Please, provide weight</Label>
                <label for="weight">Weight (KG)</label><span id="weightErr"></span>
                <input type="number" name="weight" id="weight">
            </div>

            <!--this is size  for furniture switcher -->
            <div class="furniture_Dimensions_box pr_atrr">
                <label>Please, provide dimensions</Label>
                <label for="height">Height (CM)</label><span id="heightErr"></span>
                <input type="number" name="height" id="height">
                <label for="width">Width (CM)</label><span id="widthErr"></span>
                <input type="number" name="width" id="width">
                <label for="length">Length (CM)</label><span id="lengthErr"></span>
                <input type="number" name="length" id="length">
            </div>

        </form>
    </div>
    <hr>
    <script src="../js/addProduct.js"></script>
</body>
</html>
