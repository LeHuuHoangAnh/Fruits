<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Fruits</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<style>
    .classification li {
        transition: .4s;
        cursor: pointer;
    }

    .classification li:hover {
        color: gold;
    }

    .product div {
        cursor: pointer;
    }

    .product div img {
        transition: .4s;
        cursor: pointer;
    }

    .product div:hover img {
        transform: scale(1.1);
    }

    .cart {
        width: 500px;
        transition: .4s;
        width: 500px;
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
        margin-top: 60px;
    }

    .comment input {
        outline: none;
    }

    footer {
        margin-top: 150px;
    }

    @media screen and (max-width: 1023px){
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
                                <a class="nav-link" href="#">Thông tin</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Loại
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Trái cây</a></li>
                                    <li><a class="dropdown-item" href="#">Nước đóng hộp</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.html">Đăng nhập</a>
                            </li>
                            <li class="nav-item add_cart">
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
                    <div class="position-relative col-12 col-md-3 mb-3 classification">
                        <p class="h5 text-warning">Phân loại</p>
                        <li class="list-unstyled fw-medium mb-1">Fresh fruits</li>
                        <li class="list-unstyled fw-medium mb-1">Nước đóng hộp</li>
                        <li class="list-unstyled fw-medium">khác</li>
                    </div>
                    <div
                        class="col-12 col-md-9 d-flex justify-content-end align-content-center gap-5 flex-wrap product">
                        <div
                            class="col-12 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-content-center border border-dark-subtle gap-2 p-3">
                            <img
                                src="img/44f920810a271a3bdd789bf275c2cad_cc8529666234418993f4d483c9f9939f_large_27566d30a81e41a39de3b1718e3db29e_large.jpg">
                            <div class="p-2">
                                <p class="text-center mb-1 fw-bold h5">Chanh Dây</p>
                                <p class="text-center">Giá : 20.000đ</p>
                                <button class="w-100 btn btn-warning fw-medium">Thêm giỏ hàng</button>
                            </div>
                        </div>
                        <div
                            class="col-12 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-content-center border border-dark-subtle gap-2 p-3">
                            <img
                                src="img/263357c23ba80c433204bcdc0cb2d19_056f2c250f0d4ab699b11e67dc809b48_large_8039c27a72364872bcf02c14e6e399a0_large.jpg">
                            <div class="p-2">
                                <p class="text-center mb-1 fw-bold h5">Bơ</p>
                                <p class="text-center">Giá : 24.000đ</p>
                                <button class="w-100 btn btn-warning fw-medium">Thêm giỏ hàng</button>
                            </div>
                        </div>
                        <div
                            class="col-12 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-content-center border border-dark-subtle gap-2 p-3">
                            <img
                                src="img/b95c97425c61b58564941eb792ae995_2e37cd585c804482b657735df156c883_large_081baa580b4143efac82332c545a908e_large.jpg">
                            <div class="p-2">
                                <p class="text-center mb-1 fw-bold h5">Chuối Mỹ</p>
                                <p class="text-center">Giá : 26.000đ</p>
                                <button class="w-100 btn btn-warning fw-medium">Thêm giỏ hàng</button>
                            </div>
                        </div>
                        <div
                            class="col-12 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-content-center border border-dark-subtle gap-2 p-3">
                            <img
                                src="img/sau_rieng_new-01_63392fbb5c3d449e913faebc332ae80f_large_e8357702710042d784366abaf39de8a0_large.png">
                            <div class="p-2">
                                <p class="text-center mb-1 fw-bold h5">Sầu Riêng</p>
                                <p class="text-center">Giá : 158.000đ</p>
                                <button class="w-100 btn btn-warning fw-medium">Thêm giỏ hàng</button>
                            </div>
                        </div>
                        <div
                            class="col-12 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-content-center border border-dark-subtle gap-2 p-3">
                            <img
                                src="img/xoai-01_e1334c093fb64fa7afc4b505b7d0586a_large_36412fe000c3422082cf318110db6fde_large.png">
                            <div class="p-2">
                                <p class="text-center mb-1 fw-bold h5">Xoài Keo</p>
                                <p class="text-center">Giá : 38.000đ</p>
                                <button class="w-100 btn btn-warning fw-medium">Thêm giỏ hàng</button>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-content-center border border-dark-subtle gap-2 p-3">
                            <img src="img/anh_shopee__1__79d3c17a2d034f119e6f1315b4575bf2_large.png">
                            <div class="p-2">
                                <p class="text-center mb-1 fw-bold h5">Nước Đào Tươi</p>
                                <p class="text-center">Giá : 160.000đ</p>
                                <button class="w-100 btn btn-warning fw-medium">Thêm giỏ hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100 d-flex flex-column gap-2 comment">
                    <p class="fw-bold h5">Đánh giá : </p>
                    <input type="text" class="pb-3 border-top-0 border-start-0 border-end-0" placeholder="Đánh giá shop tại đây ...">
                </div>
            </div>
        </main>
        <div class="position-fixed start-0 top-0 bg-secondary h-100 cart d-none">
            <div class="w-100 h-100 p-4">
                <div class="d-flex justify-content-between align-content-center mb-3 position-relative">
                    <p class="fw-bold h4">Fresh <span class="text-warning">Fruits</span></p>
                    <i class="fa-solid fa-x h3 fw-bold position-absolute top-0 end-0"></i>
                </div>
                <div class="d-flex justify-content-center align-items-start gap-2 border-bottom pb-4 border-black pt-3 menu_cart overflow-x-auto w-100">
                    <img class="img_cart" src="img/263357c23ba80c433204bcdc0cb2d19_056f2c250f0d4ab699b11e67dc809b48_large_8039c27a72364872bcf02c14e6e399a0_large.jpg" alt="">
                    <div>
                        <p class="fw-bold mb-1">Tên sản phẩm : <span class="name_product-cart">Bơ</span></p>
                        <p class="fw-bold mb-0">Giá tiền : <span class="price_cart">24.000đ/kg</span></p>
                        <p class="fw-bold mb-0">Số lượng : <input type="number" class="w-25" placeholder="1"></p>
                    </div>
                    <div class="d-flex flex-column gap-2 button_cart justify-content-center align-content-center">
                        <button class="bg-warning">Mua</button>
                        <button class="bg-danger">Xóa</button>
                    </div>
                </div>
            </div>
        </div>
        <footer class="position-absolute top-100 end-0 w-100 bg-dark">
            <p class="text-center text-light p-3 mb-0">@Fresh Fruits Design</p>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="fruits.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>