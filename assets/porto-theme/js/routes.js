const baseURL = 'http://localhost/as_sufah_ecommerce'
const Routes = {
    addToCart: (product_id, quantity) => {
        return `${baseURL}/product/cart/add/${product_id}/${quantity}`;
    },
    getCartDetails: `${baseURL}/product/cart/details`,
    removeFromCart: (product_id) => {
        return `${baseURL}/product/cart/remove/${product_id}`;
    },
}
