<?php 
    include_once "header.php";
    
    $conn = new mysqli('localhost', 'root', '','fruits');
    $pdo = new PDO('mysql:host=localhost;dbname=fruits', 'root', '');

    $success = '';
    $err = '';
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        if (isset($_POST['submit'])) {
            if (!empty($_POST['name'])) {
                //require_once __DIR__.'/../partials/db_connect.php';
                $sql = "INSERT INTO products (name, type, price, supplier, description,image) VALUE(?,?,?,?,?,?)";
                try {
                    $statement = $pdo->prepare($sql);
                    $is_successful = $statement ->execute([
                    $_POST['name'],
                    $_POST['type'],
                    $_POST['price'],
                    $_POST['supplier'],
                    $_POST['description'],
                    $_POST['image']
                    ]); 
                } catch(PDOException $e) {
                    $err = $e->getMessage();
                } 
                if($is_successful && $statement->errorCode() == 0) {
                    $success = "Bạn đã thêm sản phẩm thành công";
                } else {
                    $err = "Có lỗi xảy ra, Không thể thêm sản phẩm";
                } 
            } else {
                $err = "Không được để trống";
            }
        }
    }
?>

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
                                <a class="nav-link active" href="add_product.php">Thêm sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="status.php">Trạng thái đặt hàng</a>
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
                <h3 class="mt-4 fw-bold text-center">Thêm sản phẩm</h3>
                <p class="text-center text-success fw-bold"><?php echo "$success"?></p>
                <p class="text-center text-danger fw-bold"><?php echo "$err"?></p>
                <div class="d-flex justify-content-center align-content-center flex-column w-100">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold">Tên sản phẩm</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Tên sản phẩm ...">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label fw-bold">Loại sản phẩm</label>
                            <input type="text" name="type" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Loại sản phẩm ...">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label fw-bold">Giá</label>
                            <input type="text" name="price" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="###.###">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label fw-bold">Nhà cung cấp</label>
                            <input type="text" name="supplier" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Nhà cung cấp ...">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label fw-bold">Mô tả</label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Mô tả ..."></textarea>
                        </div>
                        <div class="mb-3 d-flex justify-content-between align-items-center flex-wrap gap-3">
                            <div>
                                <label for="exampleInputPassword1" class="form-label fw-bold">Upload ảnh : </label>
                                <input type="file" name="image" id="upload">
                            </div>
                            <button class="btn btn-warning fw-bold">Upload</button>
                        </div>
                        <button type="submit" name="submit" class="btn btn-dark fw-bold mb-2 w-100">Thêm sản phẩm</button>
                    </form>
                </div>
            </div>
        </main>
<?php include_once "footer.php"?>