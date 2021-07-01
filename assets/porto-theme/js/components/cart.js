async function addtocart(product_id, quantity) {
    let response = await fetch(Routes.addToCart(product_id, quantity));
    let data = response.json();
    return data;
}
async function getCartDetails() {
    let response = await fetch(Routes.getCartDetails);
    let data = response.json();
    return data;
}
async function removeFromCart(product_id) {
    let response = await fetch(Routes.removeFromCart(product_id));
    let data = response.json();
    return data;
}