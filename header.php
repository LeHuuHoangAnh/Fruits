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

    .img_small {
        width: 100px;
        cursor: pointer;
    }

    .img_big {
        width: 300px;
    }

    .img_order {
        width: 250px;
    }

    footer {
        margin-top: 140px;
    }

    @media screen and (max-width: 1023px) {
        .cart ,.img_order {
            width: 100%;
        }

        .product_detail, .order {
            flex-wrap: wrap;
        }

        .img_small {
            width: 100px;
            cursor: pointer;
            display: none;
        }
    }
</style>