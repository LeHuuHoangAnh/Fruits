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
<style></style>

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
                                <a class="nav-link active" aria-current="page" href="admin.php">Sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="add_product.php">Thêm sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="status.php">Trạng thái đặt hàng</a>
                            </li>
                            <li class="nav-item add_cart">
                                <a class="nav-link add_cart" href="add_product.php">Sửa sản phẩm</a>
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
                <h3 class="mt-4 fw-bold text-center">Thêm sản phẩm</h3>
                <div class="d-flex justify-content-center align-content-center flex-column w-100">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Tên sản phẩm ...">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold">Loại sản phẩm</label>
                            <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle w-100" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Loại
                                </a>
                                <ul class="dropdown-menu w-100">
                                    <li><a class="dropdown-item" href="#">Trái cây tươi</a></li>
                                    <li><a class="dropdown-item" href="#">Nước đóng hộp</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label fw-bold">Giá</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Giá sản phẩm ...">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label fw-bold">Nhà cung cấp</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Nhà cung cấp ...">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label fw-bold">Mô tả</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Mô tả ..."></textarea>
                        </div>
                        <div class="mb-3 d-flex justify-content-between align-items-center flex-wrap gap-3">
                            <div>
                                <label for="exampleInputPassword1" class="form-label fw-bold">Upload ảnh : </label>
                                <input type="file" id="upload">
                            </div>
                            <button class="btn btn-warning fw-bold">Upload</button>
                        </div>
                        <button type="submit" class="btn btn-dark fw-bold mb-2 w-100">Thêm sản phẩm</button>
                    </form>
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