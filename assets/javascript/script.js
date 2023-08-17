function login() {
    let username = $("#username").val();
    let password = $("#password").val();

    $.ajax({
        url: 'backend/login_process.php',
        method: 'POST',
        data: { username: username, password: password },
        success: function (response) {
            if (response.status == 'success') {
                location.href = 'home.php';
            } else {

                $("#login_error").html(`<div class="alert alert-danger" role="alert">` + response.message + `</div>`);

            }
        }
    })

}


function addproduct() {
    let product_name = $("#product_name").val();
    let product_price = $("#product_price").val();
    let product_code = $("#product_code").val();

    $.ajax({
        url: 'backend/add_product_process.php',
        method: 'POST',
        data: { product_name: product_name, product_price: product_price, product_code: product_code },
        success: function (response) {
            if (response.status == 'success') {
                $("#msg").html(`<div class="alert alert-success" role="alert">`
                    + response.message +
                    `</div>`);
                $("#my_form")[0].reset();
                loadProduct();
            } else {
                $("#msg").html(`<div class="alert alert-warning" role="alert">`
                    + response.message +
                    `</div>`);
                $("#my_form")[0].reset();
            }
        }
    });

}

function loadProduct() {
    $.ajax({
        url: 'backend/load_product_process.php',
        success: function (response) {
            $("#loadtabledata").html(response);
        }
    })
}

function updateProduct() {
    let product_name = $("#product_name").val();
    let product_price = $("#product_price").val();
    let product_code = $("#product_code").val();
    let product_id = $("#product_id").val();


    $.ajax({
        url: 'backend/update_product_process.php',
        method: 'POST',
        data: { product_name: product_name, product_price: product_price, product_code: product_code, product_id: product_id },
        success: function (response) {
            if (response.status == 'success') {
                location.href = "product.php";
                // $("#msg").html(`<div class="alert alert-success" role="alert">`
                //     + response.message +
                //     `</div>`);

            } else {
                $("#msg").html(`<div class="alert alert-warning" role="alert">`
                    + response.message +
                    `</div>`);

            }
        }
    });
}


function deleteProduct(userid) {
    $.ajax({
        url: 'backend/delete_product_process.php',
        method: 'POST',
        data: { userid: userid },
        success: function (response) {
            if (response.status == 'success') {
                $("#msg").html(`<div class="alert alert-warning" role="alert">`
                    + response.message +
                    `</div>`);
                loadProduct();
            } else {
                $("#msg").html(`<div class="alert alert-danger" role="alert">`
                    + response.message +
                    `</div>`);
            }
        }
    })
}

function addvendor() {
    let vendor_code = $("#vendor_code").val();
    let vendor_name = $("#vendor_name").val();
    let shop_name = $("#shop_name").val();
    let vendor_mobile = $("#vendor_mobile").val();
    let vendor_address = $("#vendor_address").val();


    $.ajax({
        url: 'backend/add_vendor_process.php',
        method: 'POST',
        data: { vendor_code: vendor_code, vendor_name: vendor_name, shop_name: shop_name, vendor_mobile: vendor_mobile, vendor_address: vendor_address },
        success: function (response) {
            if (response.status == 'success') {
                $("#msg").html(`<div class="alert alert-success" role="alert">`
                    + response.message +
                    `</div>`);
                $("#my_form")[0].reset();
                loadvendor();
            } else {
                $("#msg").html(`<div class="alert alert-danger" role="alert">`
                    + response.message +
                    `</div>`)
            }
        }
    })
}

function loadvendor() {
    $.ajax({
        url: 'backend/load_vendor_process.php',
        success: function (response) {
            $("#loadtabledata2").html(response);
        }
    })
}

function updatevendor(vendor_id) {
    let vendor_code = $("#vendor_code").val();
    let vendor_name = $("#vendor_name").val();
    let shop_name = $("#shop_name").val();
    let vendor_mobile = $("#vendor_mobile").val();
    let vendor_address = $("#vendor_address").val();
    let vendorid = vendor_id;
    $.ajax({
        url: 'backend/update_vendor_process.php',
        method: 'POST',
        data: { vendor_code: vendor_code, vendor_name: vendor_name, shop_name: shop_name, vendor_mobile: vendor_mobile, vendor_address: vendor_address, vendor_id: vendorid },
        success: function (response) {
            if (response.status == 'success') {
                // $("#msg").html(`<div class="alert alert-success" role="alert">`
                // + response.message +
                // `</div>`);
                location.href = "vender.php";
                // $("#msg").html(`<div class="alert alert-danger" role="alert">`
                // + response.message +
                // `</div>`)
            }
        }
    })
}

function deletevendor(vendor_id) {
    let vendorid = vendor_id;

    $.ajax({
        url: 'backend/delete_vendor_process.php',
        method: 'POST',
        data: { vendorid: vendorid },
        success: function (response) {
            if (response.status == 'success') {
                loadvendor();
            }
        }
    })
}

$("#select_shop").on("change", function () {
    let x = this.value.split("-");
    $("#vendor_id").val(x[0]);
    $("#vendor_name").val(x[1]);
    $("#vendor_mobile").val(x[2]);

});

$("#select_product").on("change", function () {
    let x = this.value.split("-");
    $("#product_id").val(x[0]);
    $("#product_price").val(x[1]);

});

$("#quantity").on("keyup", function () {
    let a = $("#product_price").val();
    let b = $("#quantity").val();
    let c = a * b;
    $("#total").html("TOTAL = " + c);
})

function purchase() {
    let invoice = $("#invoice").val();
    let vendor_id = $("#vendor_id").val();
    let product_id = $("#product_id").val();
    let product_price = $("#product_price").val();
    let quantity = $("#quantity").val();

    $.ajax({
        url: 'backend/purchase_process.php',
        method: 'POST',
        data: {invoice:invoice , vendor_id:vendor_id , product_id:product_id , product_price:product_price , quantity:quantity},
        success: function(response){
             if(response.status == 'success'){
             $("#msg").html(`<div class="alert alert-success" role="alert">`+ response.message+`</div>`) ;  
             }
        }
    })
}

function sell(){
   let sellinvoice = $("#sellinvoice").val();
   let name = $("#name").val();
   let mobile = $("#mobile").val();
   let address = $("#address").val();
   let product_id = $("#product_id").val();
   let product_price = $("#product_price").val();
   let quantity = $("#quantity").val();

   $.ajax({
    url: 'backend/sell _process.php',
    method: 'POST',
    data: {sellinvoice:sellinvoice , name:name ,  mobile:mobile , address:address , product_id:product_id , product_price:product_price , quantity:quantity},
    success: function(response){
        if(response.status == 'success'){
            $("#msg").html('<div class="alert alert-success" role="alert">'+ response.message +'</div>');
        }
    }
   })
}

function stockloaddata(){
    $.ajax({
        url: 'backend/report_process.php',
        success: function(response){
         $("#stockloaddata").html
         ( response.stockdata1 + response.stockdata2 + response.stockdata3); 
         
         $("#sellloaddata").html(response.selldata1 + response.selldata2 + response.selldata3 );
        }
    })
}