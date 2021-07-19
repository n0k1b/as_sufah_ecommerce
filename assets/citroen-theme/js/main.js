function update_nav_cart() {
    document.querySelector(".mini-products-list").innerHTML = "";

    getCartDetails().then(data => {
        noOfProducts = Object.keys(data).length
        totalPrice = 0;
        document.querySelector('#nav-cart-count').innerHTML = noOfProducts;
        //document.querySelector('#nav-cart-count_badge').innerHTML = noOfProducts;
        for (var prop in data) {
            if (data.hasOwnProperty(prop)) {
                totalPrice += data[prop].quantity * data[prop].price
                document.querySelector(".mini-products-list").innerHTML += Views.navCartDropdownProduct(prop, data[prop].name, data[prop].quantity, data[prop].price, data[prop].image);
            }
        }
        document.querySelector("#nav-cart-total-price").innerHTML = totalPrice;
    });
    // data.forEach(product => {
    //     document.querySelector(".dropdown-cart-products").innerHTML += Views.navCartDropdownProduct(product.name, product.quantity, product.price, product.image);
    // })
}

function remove_nav_cart_product(id) {
    removeFromCart(id).then(data => {
        update_nav_cart();
    })
}
update_nav_cart();