update_nav_cart();

async function get_all_subcategory(id) {
    console.log('fetch api')
    let response = await fetch("http://localhost/ecommerce/api_get_subcategories/" + id, {
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        }

    });
    data = await response.json()
    return data
}

function show_category_submenu(e) {
    get_all_subcategory(e.id).then(data => {
        sub_category_list = '';
        data.forEach(item => {
            sub_category_list += `<li><a href="/ecommerce/porto/product/all/${e.id}/${item.id}">${item.name}</a></li>`
        })
        document.querySelector('.sub-categories').innerHTML = sub_category_list
    })
}

// function init_nav_cart() {
//     document.querySelector(".dropdown-cart-products").innerHTML = "";
//     getCartDetails().then(data => {
//         for (var prop in data) {
//             if (data.hasOwnProperty(prop)) {
//                 document.querySelector(".dropdown-cart-products").innerHTML += Views.navCartDropdownProduct(prop, data[prop].name, data[prop].quantity, data[prop].price, data[prop].image);
//             }
//         }
//     });

// }

function update_nav_cart() {
    document.querySelector(".dropdown-cart-products").innerHTML = "";

    getCartDetails().then(data => {
        noOfProducts = Object.keys(data).length
        totalPrice = 0;
        document.querySelector('#nav-cart-count').innerHTML = noOfProducts;
        document.querySelector('#nav-cart-count_badge').innerHTML = noOfProducts;
        for (var prop in data) {
            if (data.hasOwnProperty(prop)) {
                totalPrice += data[prop].quantity * data[prop].price
                document.querySelector(".dropdown-cart-products").innerHTML += Views.navCartDropdownProduct(prop, data[prop].name, data[prop].quantity, data[prop].price, data[prop].image);
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