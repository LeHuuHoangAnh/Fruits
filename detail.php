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

    .img_small {
        width: 100px;
        cursor: pointer;
    }

    .img_big {
        width: 300px;
    }

    @media screen and (max-width: 1023px){
        .cart {
            width: 100%;
        }

        .product_detail {
            flex-wrap: wrap;
        }

        .img_small {
            width: 100px;
            cursor: pointer;
            display: none;
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
                                <a class="nav-link" href="login.php">Đăng nhập</a>
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
            <div class="container">
                <div class="w-100 h-100 mt-4 d-flex justify-content-center align-items-start gap-5 product_detail">
                    <div class="d-flex align-items-start gap-4">
                        <img src="img/263357c23ba80c433204bcdc0cb2d19_056f2c250f0d4ab699b11e67dc809b48_large_8039c27a72364872bcf02c14e6e399a0_large.jpg" class="img_small border border-success border-2">
                        <img src="img/263357c23ba80c433204bcdc0cb2d19_056f2c250f0d4ab699b11e67dc809b48_large_8039c27a72364872bcf02c14e6e399a0_large.jpg" class="img_big">
                    </div>
                    <div class="d-flex flex-column justify-content-start w-100 h-100 gap-1">
                        <p class="h3 fw-bold">Bơ</p>
                        <p class="fw-bold h6">Nhà cung cấp : <span class="text-warning">FreshFruits <span class="text-black">.vn</span></span></p>
                        <p class="mb-0">Bơ là một loại cây cận nhiệt đới có nguồn gốc từ México và Trung Mỹ, được phân loại thực vật có hoa, hai lá mầm, họ Lauraceae.</p>
                        <p class="mb-0">Trong nước : <span class="fw-bold">(+84) 333 245 783</span></p>
                        <p>Xuất khẩu : <span class="fw-bold">(+84) 333 245 783</span></p>
                        <button class="d-inline-block  btn btn-warning fw-bold">Mua Ngay</button>
                    </div>
                </div>
                <div class="mt-5">
                    <h3 class="text-warning">Mô tả</h3>
                    <hr>
                    <p>Thịt trái bơ thường được dùng làm nguyên liệu cho các món sinh tố giải khát, làm salad, sushi hoặc có thể dùng để ăn với bánh mì bằng cách quết lên bánh và rắc thêm một chút đường. Ngoài ra, bơ cũng được dùng trong việc chăm sóc da, tuy nhiên việc ăn nhiều bơ cũng gây nên bệnh về gan.</p>
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
        <footer class="position-absolute top-100 end-0 w-100 mt-5 bg-dark">
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