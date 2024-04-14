function searchProducts() {
    var searchValue = document.getElementById("searchInput").value.toLowerCase();
    var products = document.getElementsByClassName("product");
    
    for (var i = 0; i < products.length; i++) {
      var productName = products[i].getElementsByClassName("name")[0].innerHTML.toLowerCase();
      
      if (productName.includes(searchValue)) {
        products[i].style.display = "block";
      } else {
        products[i].style.display = "none";
      }
    }
  }