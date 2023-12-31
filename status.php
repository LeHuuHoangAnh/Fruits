<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Fruits Admin</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<style>
    .img_status {
        width: 220px;
    }

    .cart_status {
        width: 800px;
    }

    @media screen and (max-width: 1023px){
        .img_status {
            width: 100%;
        }

        .cart_status {
            flex-wrap: wrap;
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
                                <a class="nav-link" aria-current="page" href="admin.php">Sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="add_product.php">Thêm sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="status.php">Trạng thái đặt hàng</a>
                            </li>
                            <li class="nav-item add_cart">
                                <a class="nav-link add_cart" href="edit.php">Sửa sản phẩm</a>
                            </li>
                            <li class="nav-item add_cart">
                                <a class="nav-link add_cart" href="feedback.php">Đánh giá</a>
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
                <h3 class="mt-4 fw-bold text-center">Trạng thái đặt hàng</h3>
                <div class="d-flex justify-content-between gap-3 m-auto border border-1 border-black p-3 mt-4 rounded-3 cart_status">
                    <img src="img/44f920810a271a3bdd789bf275c2cad_cc8529666234418993f4d483c9f9939f_large_27566d30a81e41a39de3b1718e3db29e_large.jpg" class="img_status">
                    <div class="d-flex justify-content-start w-100 flex-column gap-1">
                        <p class="fw-bold mb-0">Tên sản phẩm : <span class="name_status">Bơ</span></p>
                        <p class="fw-bold mb-0">Loại sản phẩm : <span class="productType_status">Trái cây tươi</span></p>
                        <p class="fw-bold mb-0">Giá : <span class="price_status">23.000đ</span></p>
                        <p class="fw-bold mb-0">Số lượng : <span class="quanlity_status">2kg</span></p>
                        <p class="fw-bold mb-0">Tên người đặt hàng : <span class="user_status">Nguyễn A</span></p>
                        <p class="fw-bold mb-0">Phone : <span class="phone_status">0335673896</span></p>
                        <p class="fw-bold mb-0">Địa chỉ : <span class="address_status">Phụng hiệp - Hậu Giang</span></p>
                    </div>
                </div>
                <div class="d-flex justify-content-between gap-3 m-auto border border-1 border-black p-3 mt-4 rounded-3 cart_status">
                    <img src="img/44f920810a271a3bdd789bf275c2cad_cc8529666234418993f4d483c9f9939f_large_27566d30a81e41a39de3b1718e3db29e_large.jpg" class="img_status">
                    <div class="d-flex justify-content-start w-100 flex-column gap-1">
                        <p class="fw-bold mb-0">Tên sản phẩm : <span class="name_status">Bơ</span></p>
                        <p class="fw-bold mb-0">Loại sản phẩm : <span class="productType_status">Trái cây tươi</span></p>
                        <p class="fw-bold mb-0">Giá : <span class="price_status">23.000đ</span></p>
                        <p class="fw-bold mb-0">Số lượng : <span class="quanlity_status">2kg</span></p>
                        <p class="fw-bold mb-0">Tên người đặt hàng : <span class="user_status">Nguyễn A</span></p>
                        <p class="fw-bold mb-0">Phone : <span class="phone_status">0335673896</span></p>
                        <p class="fw-bold mb-0">Địa chỉ : <span class="address_status">Phụng hiệp - Hậu Giang</span></p>
                    </div>
                </div>
            </div>
        </main>
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