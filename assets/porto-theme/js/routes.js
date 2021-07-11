const baseURL = 'http://localhost/as_sufah_ecommerce'
const Routes = {
    addToCart: ((product_id, quantity) => `${baseURL}/product/cart/add/${product_id}/${quantity}`),
    getCartDetails: `${baseURL}/product/cart/details`,
    removeFromCart: (product_id => `${baseURL}/product/cart/remove/${product_id}`),
    viewAllProducts: ((id, item_id) => `${baseURL}/product/all/${id}/${item_id}`)
}
