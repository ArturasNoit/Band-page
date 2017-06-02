$('.add-to-cart').on('click', function(event){
    event.preventDefault();
    var productID = $(this).data("productid");
    $.ajax({
        type:"POST",
        url: 'cartAjax',
        data: {id: productID},
        headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
        success: function(data){
            $('#cart-bar').html(data.cart.length);
            

            // console.log(data);
        },
        error: function(data){
            console.log('Niekas neveikia');
            // console.log(data);
        }
    })
})

