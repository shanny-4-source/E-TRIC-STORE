/*CART SYSTEM*/

let cart = JSON.parse(localStorage.getItem("cart")) || [];

function addToCart(name, price){

let existingProduct = cart.find(item => item.name === name);

if(existingProduct){
existingProduct.quantity += 1;
}
else{
cart.push({
name: name,
price: price,
quantity: 1
});
}

localStorage.setItem("cart", JSON.stringify(cart));

updateCartCount();



}



/* Update Cart Counter */

function updateCartCount(){

let cartCount = document.getElementById("cart-count");

if(cartCount){
cartCount.innerText = cart.length;
}

}

updateCartCount();


/*PRODUCT SLIDER*/

function slideLeft(){

document.getElementById("product-container").scrollBy({
left:-300,
behavior:"smooth"
});

}

function slideRight(){

document.getElementById("product-container").scrollBy({
left:300,
behavior:"smooth"
});

}


/*SIDE MENU*/

function openMenu(){
document.getElementById("sideMenu").style.left = "0";
}

function closeMenu(){
document.getElementById("sideMenu").style.left = "-300px";
}


/*LIVE SEARCH */

document.addEventListener("DOMContentLoaded", function(){

const searchInput = document.getElementById("search");

if(!searchInput) return;

searchInput.addEventListener("keyup", function(){

let searchValue = searchInput.value.toLowerCase();

let products = document.querySelectorAll(".product");

products.forEach(function(product){

let productName = product.querySelector("h4").textContent.toLowerCase();

if(productName.includes(searchValue)){
product.style.display = "block";
}
else{
product.style.display = "none";
}

});

});

});



