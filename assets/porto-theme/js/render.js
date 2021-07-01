const Views = {
    navCartDropdownProduct: function(id, name, quantity, price, image) {
        return `
            <div class="product">
            <div class="product-details">
                <h4 class="product-title">
                    <a href="product.html">${name}</a>
                </h4>
                <span class="cart-product-info">
                    <span class="cart-product-qty">${quantity}</span>
                    x tk${price}
                </span>
            </div><!-- End .product-details -->

            <figure class="product-image-container">
                <a href="product.html" class="product-image">
                    <img src="${baseURL}/${image}" alt="product">
                </a>
                <button href="#" class="btn-remove" title="Remove Product" onclick="remove_nav_cart_product(${id})"><i class="icon-retweet"></i></button>
            </figure>
        </div><!-- End .product -->
        `
    }
}