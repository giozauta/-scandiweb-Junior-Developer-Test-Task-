//this is for cancel button this will go in product list page 
document.getElementById('cancel').addEventListener('click', function() {
    window.location.href = '../index.php';
    
});
//this function is for alert if form data is not set 
function generateErr(data){
    if(data["sku"]==""){
        alert("Please, submit required data SKU")
        return;
    }    if(data["name"]==""){
        alert("Please, submit required data NAME")
        return;
    }    if(data["price"]==""){
        alert("Please, submit required data PRICE")
        return;
    }    if(!data.hasOwnProperty("product_select")){
        alert("Please, submit required data TYPE")
        return;
    }  
    if(data['product_select']=="DVD"){
        if(data["size"]==""){
            alert("Please, submit required data SIZE")
            return;
        }
    }
    if(data['product_select']=="Book"){
        if(data["weight"]==""){
            alert("Please, submit required data WEIGHT")
            return;
        }
    }
    if(data['product_select']=="Forniture"){
        if(data["height"]==""){
            alert("Please, submit required data WEIGHT")
            return;
        }
        if(data["width"]==""){
            alert("Please, submit required data WIDTH")
            return;
        }
        if(data["length"]==""){
            alert("Please, submit required data LENGTH")
            return;
        }
    }      

}

//this is for save button to make it submet 
document.querySelector("#save").addEventListener("click", function(event) {
        event.preventDefault();
        let form = document.getElementById('product_form');
        const formData = new FormData(form);
        const formValues = {};
        formData.forEach((value, key) => {
            formValues[key] = value;
        });
    
        generateErr(formValues);

        //for send data to addproduct.php 
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (this.responseText.trim() === "Product added successfully!") {
                // Change window location to index.php
                window.location.href = "../index.php";
            } 
        }
        xmlhttp.open("POST","addProduct.php",true);
        xmlhttp.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        xmlhttp.send(JSON.stringify(formValues));
        
  });

//this is for type switcher 
var productSelect = document.querySelector("#product_select");
productSelect.addEventListener("change", function() {
    var selectedValue = productSelect.value;
    
    switch(selectedValue){
        case "Book":
            document.querySelector(".book_weight_box").style.display = "block";
            document.querySelector(".furniture_Dimensions_box").style.display = "none";
            document.querySelector(".dvd_size_box").style.display = "none";

        break;
        case "Furniture":
            document.querySelector(".book_weight_box").style.display = "none";
            document.querySelector(".furniture_Dimensions_box").style.display = "block";
            document.querySelector(".dvd_size_box").style.display = "none";

        break;
        case "DVD":
            document.querySelector(".book_weight_box").style.display = "none";
            document.querySelector(".furniture_Dimensions_box").style.display = "none";
            document.querySelector(".dvd_size_box").style.display = "block";
        break;
    }
});
