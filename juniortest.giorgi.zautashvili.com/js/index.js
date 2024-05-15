// delete section
let massDelete = document.querySelector("#delete-product-btn");



//for deleting product
massDelete.addEventListener("click", function() {
    let deleteProductIds = [];

    let checkboxes = document.querySelectorAll(".delete-checkbox");

    checkboxes.forEach(function(arg){
       if(arg.checked){
        deleteProductIds.push(arg.value)
       }
    })

    if (deleteProductIds.length > 0) {
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'DeleteProduct.php', true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                // Request finished. You can handle the response here.
                location.reload();
                
            }
        };
        xhr.send(JSON.stringify(deleteProductIds));
    }
   
});



