$(document).ready(function() {
    $('.add_cart').click(function() {
        $('.cart').removeClass('d-none');
        $('.opacity').removeClass('d-none');
    });
    $('.fa-x').click(function() {
        $('.cart').addClass('d-none');
        $('.opacity').addClass('d-none');
    });
})