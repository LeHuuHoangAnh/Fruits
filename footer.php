<footer class="position-absolute top-100 end-0 w-100 bg-dark">
            <p class="text-center text-light p-3 mb-0">@Fresh Fruits Design</p>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="fruits.js"></script>
    <script>
        $(document).ready(function() {
            $('.btn-add').click(function() {
                var img_src = $(this).parents('.p-2').siblings('img').attr('src');
                var title = $(this).siblings('p:nth-child(1)').text();
                var price = $(this).siblings('p:nth-child(2)').text();
                var count = 0;
                count++;

                var cart_item = `
                    <div class="d-flex justify-content-between align-items-start gap-2 border-bottom pb-4 border-black pt-3 menu_cart w-100">
                        <div class = "d-flex gap-3">
                            <img class="img_cart" src="${img_src}">
                            <div>
                                <p class="fw-bold mb-1">${title}</p>
                                <p class="fw-bold mb-0">${price}</p>
                                <p class="fw-bold mb-0">Số lượng : ${count}</p>
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-2 button_cart justify-content-center align-content-center">
                            <button class="bg-warning fw-bold">Mua</button>
                            <button class="bg-danger fw-bold close">Xóa</button>
                        </div>
                    </div>
                `
                $('.order_cart').append(cart_item);
                console.log($('.menu_cart'));
            })
            $('.close').click(function() {
                $(this).parents('.menu_cart').remove();
            });
        })
    </script>
</body>

</html>