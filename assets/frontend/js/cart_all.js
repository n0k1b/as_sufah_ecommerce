$(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    get_all_cart_info();


})

// function get_all_cart_infor()
// {

// $.ajax({
//     processData: false,
//     contentType: false,
//     type: 'GET',
//     url: 'get_all_category',
//     success: function(data) {

//         $('#category_list').html(data);


//     }
//      })
// }

function delete_cart(id) {
    $.ajax({
        processData: false,
        contentType: false,
        type: 'GET',
        url: 'cart_delete/' + id,
        success: function(data) {
            $('.mini-cart').toggleClass('open');
            get_cart_count();
            get_cart_box();

        }
    })
}

function get_all_cart_info() {

    $.ajax({
        processData: false,
        contentType: false,
        type: 'GET',
        url: 'get_all_cart_info',
        success: function(data) {
            var cart = JSON.parse(data);
            $("#cart_all").html(cart.cart_table);
            $("#cart_total").html(cart.cart_total);
        }
    })
}

function get_cart_count() {
    $.ajax({
        processData: false,
        contentType: false,
        type: 'GET',
        url: 'get_cart_count',
        success: function(data) {

            $("#cart_itemt_count").text(data);
        }
    })
}

function cart_add(id) {
    var quantity = $("#quantity-" + id).val()
    var formdata = new FormData();
    formdata.append('id', id);
    formdata.append('quantity', quantity);
    $.ajax({
        processData: false,
        contentType: false,
        type: 'POST',
        url: 'cart_add',
        data: formdata,
        success: function(data) {
            get_cart_count();
            get_cart_box();

        }
    })
}

function inc(product_id) {


    $("#input_quantity").val(product_id);

}

function dec(product_id) {

    $("#input_quantity").val(product_id);

}
$(".inc").click(function() {
    updateValue(this, 1);
});
$(".dec").click(function() {
    updateValue(this, -1);
});


function updateValue(obj, delta) {
    var item = $(obj).parent().find("input[type=number]");
    var newValue = parseInt(item.val(), 10) + delta;
    item.val(Math.max(newValue, 0));
    var product_id = $('#input_quantity').val();
    $("#quantity-" + product_id).val(newValue);




}