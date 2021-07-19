function handleAddToCart(product_id) {
    let quantity = 1
        //console.log(product_id, quantity);
    addtocart(product_id, quantity).then(data => update_nav_cart());
}