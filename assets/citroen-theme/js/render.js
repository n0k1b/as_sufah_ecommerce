const Views = {
    navCartDropdownProduct: function(id, name, quantity, price, image) {
        return `
        <li class="item first">
            <div class="item-inner"> <a class="product-image" title="${name}" href="#l"><img alt="${name}" src="${baseURL}/${image}"> </a>
            <div class="product-details">
                <div class="access"><a class="btn-remove1" onclick="remove_nav_cart_product(${id})" title="Remove This Item" href="#">Remove</a> </div>
                <p class="product-name"><a href="#">${name}</a> </p>
                ${quantity} x <span class="price">tk${price}</span> </div>
            </div>
        </li>
        `
            // return `
            //     <div class="product">
            //     <div class="product-details">
            //         <h4 class="product-title">
            //             <a href="product.html">${name}</a>
            //         </h4>
            //         <span class="cart-product-info">
            //             <span class="cart-product-qty">${quantity}</span>
            //             x tk${price}
            //         </span>
            //     </div><!-- End .product-details -->

        //     <figure class="product-image-container">
        //         <a href="product.html" class="product-image">
        //             <img src="${baseURL}/${image}" alt="product">
        //         </a>
        //         <button href="#" class="btn-remove" title="Remove Product" onclick="remove_nav_cart_product(${id})"><i class="icon-retweet"></i></button>
        //     </figure>
        // </div><!-- End .product -->
        // `
    }
}