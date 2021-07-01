function handleAddToCart(product_id) {
    let quantity = parseInt(document.querySelector("#product-quantity").value)
    console.log(product_id, quantity);
    addtocart(product_id, quantity).then(data => update_nav_cart());
}