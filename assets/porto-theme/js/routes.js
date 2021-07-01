const baseURL = 'http://localhost/ecommerce'
const Routes = {
    addToCart: (product_id, quantity) => {
        return `${baseURL}/porto/product/cart/add/${product_id}/${quantity}`;
    },
    getCartDetails: `${baseURL}/porto/product/cart/details`,
    removeFromCart: (product_id) => {
        return `${baseURL}/porto/product/cart/remove/${product_id}`;
    },
}