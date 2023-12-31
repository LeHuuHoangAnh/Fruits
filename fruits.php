<?php include_once "header.php";?>

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
                    <p class="fw-bold h5">Góp ý : </p>
                    <input type="text" class="pb-3 border-top-0 border-start-0 border-end-0" placeholder="Góp ý shop tại đây ...">
                    <button class="btn btn-warning fw-bold mt-3">Góp ý</button>
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

<?php include_once "footer.php";?>