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
    body {
        background: linear-gradient(45deg, #FFD700, #DCDCDC);
        padding: 50px;
    }

    .background-form {
        backdrop-filter: blur(15px);
        box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.6),
        inset 3px 3px 10px rgba(255, 255, 255, 0.7);
        max-width: 800px;
    }
</style>

<body class="position-relative min-vh-100 w-100">
    <div class="p-4 rounded-4 background-form container">
        <form>
            <h3 class="text-center fw-bold">Sign Up</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold">Name</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name ...">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label fw-bold">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email ...">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="••••••••">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fw-bold">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="••••••••">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fw-bold">Phone</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="••••••••">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label fw-bold">Address</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Address ..."></textarea>
              </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" class="btn btn-dark fw-bold mb-2 w-100">Sign Up</button>
            <div class="d-flex gap-1">
                <p class="fw-bold">If you have an account?</p>
                <a href="login.php" class="text-decoration-none fw-bold text-success">Login</a>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="fruits.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>