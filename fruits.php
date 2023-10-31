<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Fruits</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<style>
    .classification li,  .product div img{
        transition: .4s;
        cursor: pointer;
    }

    .classification li:hover {
        color: gold;
    }

    .product div img:hover {
        transform: scale(1.1);
    }

    .cart {
        width: 500px;
        transition: .4s;
        max-width: 500px;
    }

    .fa-x {
        cursor: pointer;
        transition: .4s;
    }

    .fa-x:hover {
        transform: scale(1.2);
    }

    .img_cart {
        width: 70px;
    }

    .button_cart button{
        padding: 6px 20px;
        font-size: 12px;
        border: none;
    }

    .comment {
        margin-top: 80px;
    }

    .comment input {
        outline: none;
    }

    footer {
        margin-top: 140px;
    }

    @media screen and (max-width: 1023px) {
        .cart {
            width: 100%;
        }
    }
</style>
<body class="position-relative min-vh-100 w-100">
    <div class="container">
        <header>
            <nav class="navbar navbar-expand-lg mt-2">
                <div class="container-fluid">
                    <a class="navbar-brand fw-bold" href="#">Fresh <span class="text-warning">Fruits</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Đăng nhập</a>
                            </li>
                            <li class="nav-item add_cart position-relative">
                                <a class="nav-link add_cart" href="#">Giỏ Hàng</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search ..." aria-label="Search">
                            <button class="btn btn-outline-warning fw-bold" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div class="mt-4 container position-relative">
                <div class="opacity d-none bg-black opacity-50 position-fixed w-100 h-100 top-0 end-0"></div>
                <div class="row">
                    <div class="position-relative col-12 col-md-2 mb-3 classification">
                        <p class="h5 text-warning">Phân loại</p>
                        <li class="list-unstyled fw-medium mb-1 all">Tất cả</li>
                        <li class="list-unstyled fw-medium mb-1 Fresh_fruits">Trái cây tươi</li>
                        <li class="list-unstyled fw-medium mb-1 canned_water">Nước đóng hộp</li>
                    </div>
                    <div
                        class="col-12 col-md-10 d-flex justify-content-end align-content-center gap-5 flex-wrap product">
                        <div
                            class="col-12 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-content-center border border-dark-subtle gap-2 p-3">
                            <img
                                src="img/44f920810a271a3bdd789bf275c2cad_cc8529666234418993f4d483c9f9939f_large_27566d30a81e41a39de3b1718e3db29e_large.jpg">
                            <div class="p-2">
                                <p class="text-center mb-1 fw-bold h5">Chanh Dây</p>
                                <p class="text-center">Giá : 20.000đ</p>
                                <button class="w-100 btn btn-warning fw-medium btn-add">Thêm giỏ hàng</button>
                            </div>
                        </div>
                        <div
                            class="col-12 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-content-center border border-dark-subtle gap-2 p-3">
                            <img
                                src="img/263357c23ba80c433204bcdc0cb2d19_056f2c250f0d4ab699b11e67dc809b48_large_8039c27a72364872bcf02c14e6e399a0_large.jpg">
                            <div class="p-2">
                                <p class="text-center mb-1 fw-bold h5">Bơ</p>
                                <p class="text-center">Giá : 24.000đ</p>
                                <button class="w-100 btn btn-warning fw-medium btn-add">Thêm giỏ hàng</button>
                            </div>
                        </div>
                        <div
                            class="col-12 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-content-center border border-dark-subtle gap-2 p-3">
                            <img
                                src="img/5_ef22a81094624d57aab3c8edca6e84e3_large.jpg">
                            <div class="p-2">
                                <p class="text-center mb-1 fw-bold h5">Nước thơm</p>
                                <p class="text-center">Giá : 15.000đ</p>
                                <button class="w-100 btn btn-warning fw-medium btn-add">Thêm giỏ hàng</button>
                            </div>
                        </div>
                        <div
                            class="col-12 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-content-center border border-dark-subtle gap-2 p-3">
                            <img
                                src="img/7c084cec91edf88014257bfa_master_6c1180c4da33429aa3ccff3a2ef0f3fa_large_b49db52cb6b043ea9422b3e44eb50630_large.jpg">
                            <div class="p-2">
                                <p class="text-center mb-1 fw-bold h5">Nước vải</p>
                                <p class="text-center">Giá : 75.000đ</p>
                                <button class="w-100 btn btn-warning fw-medium btn-add">Thêm giỏ hàng</button>
                            </div>
                        </div>
                        <div
                            class="col-12 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-content-center border border-dark-subtle gap-2 p-3">
                            <img
                                src="img/xoai-01_e1334c093fb64fa7afc4b505b7d0586a_large_36412fe000c3422082cf318110db6fde_large.png">
                            <div class="p-2">
                                <p class="text-center mb-1 fw-bold h5">Xoài úc</p>
                                <p class="text-center">Giá : 38.000đ</p>
                                <button class="w-100 btn btn-warning fw-medium btn-add">Thêm giỏ hàng</button>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-content-center border border-dark-subtle gap-2 p-3">
                            <img src="img/anh_shopee__1__79d3c17a2d034f119e6f1315b4575bf2_large.png">
                            <div class="p-2">
                                <p class="text-center mb-1 fw-bold h5">Nước Đào Tươi</p>
                                <p class="text-center">Giá : 160.000đ</p>
                                <button class="w-100 btn btn-warning fw-medium btn-add">Thêm giỏ hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100 d-flex flex-column gap-2 comment">
                    <p class="fw-bold h5">Đánh giá : </p>
                    <input type="text" class="pb-3 border-top-0 border-start-0 border-end-0" placeholder="Đánh giá shop tại đây ...">
                    <button class="btn btn-warning fw-bold mt-3">Đánh giá</button>
                </div>
            </div>
        </main>
        <div class="position-fixed start-0 top-0 bg-light h-100 cart d-none">
            <div class="w-100 h-100 p-4 order_cart overflow-y-auto overflow-x-auto">
                <div class="d-flex justify-content-between align-content-center mb-3 position-relative">
                    <p class="fw-bold h4">Fresh <span class="text-warning">Fruits</span></p>
                    <i class="fa-solid fa-x h3 fw-bold position-absolute top-0 end-0"></i>
                </div>
            </div>
        </div>
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