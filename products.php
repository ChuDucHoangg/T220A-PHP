<?php
$products = [
    [
        "id" => "1",
        "name" => "Pizza",
        "price" => 100,
        "thumbnail" => "images/pizza.png",
        "qty" => 3
    ],
    [
        "id" => "2",
        "name" => "Phomai",
        "price" => 300,
        "thumbnail" => "images/pizza.png",
        "qty" => 1
    ],
    [
        "id" => "3",
        "name" => "Cake",
        "price" => 200,
        "thumbnail" => "images/pizza.png",
        "qty" => 0
    ],
    [
        "id" => "4",
        "name" => "Pizza",
        "price" => 500,
        "thumbnail" => "images/pizza.png",
        "qty" => 1
    ],
    [
        "id" => "5",
        "name" => "Phomai",
        "price" => 100,
        "thumbnail" => "images/pizza.png",
        "qty" => 2
    ],
    [
        "id" => "6",
        "name" => "Cake",
        "price" => 1000,
        "thumbnail" => "images/pizza.png",
        "qty" => 1
    ],
    [
        "id" => "7",
        "name" => "Pizza",
        "price" => 700,
        "thumbnail" => "images/pizza.png",
        "qty" => 0
    ],
    [
        "id" => "8",
        "name" => "Phomai",
        "price" => 200,
        "thumbnail" => "images/pizza.png",
        "qty" => 4
    ],
    [
        "id" => "9",
        "name" => "Cake",
        "price" => 300,
        "thumbnail" => "images/pizza.png",
        "qty" => 0
    ],
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/5c282fdeb6.js" crossorigin="anonymous"></script>

    <title>Product</title>
</head>

<body>

    <div class="container">
        <div class="product">
            <?php foreach ($products as $p) { ?>
                <div class="product-item">
                    <div class="product-image">
                        <div class="product-add">
                            <?php if ($p["qty"] > 0) { ?>
                                <i class="fa-solid fa-cart-shopping" style="color: black;"></i>
                                <p>Add to cart</p>
                            <?php } else { ?>
                                <p>Sout out</p>
                            <?php } ?>
                            <p>(<?php echo $p["qty"]; ?>)</p>
                        </div>
                        <img src="<?php echo $p["thumbnail"]; ?>" alt="" />
                    </div>
                    <div class="product-content">
                        <div class="product-name">
                            <p><?php echo $p["name"]; ?></p>
                        </div>
                        <div class="product-price">
                            <p><?php echo $p["price"]; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <style>
            @import url("https://fonts.googleapis.com/css2?family=Catamaran:wght@800&display=swap");

            * {
                padding: 0;
                margin: 0;
            }

            .container {
                font-family: "Catamaran", sans-serif;
                margin-top: 30px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .product {
                display: grid;
                grid-template-columns: 300px 300px 300px;
            }

            .product-image {
                width: 230px;
                height: 230px;
                border: 2px solid rgb(256, 84, 11);
                border-radius: 10px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .product-image img {
                width: 200px;
                height: 200px;
            }

            .product-add {
                position: absolute;
                opacity: 0;
                background-color: rgba(179, 88, 19, 0.5);
                width: 230px;
                height: 230px;
                display: flex;
                justify-content: center;
                align-items: center;
                transition: all 500ms;
            }

            .product-image:hover .product-add {
                opacity: 1;
                cursor: pointer;
            }

            .product-add i {
                font-size: 30px;
            }

            .product-add p {
                font-size: 18px;
            }

            .product-content {
                display: flex;
            }

            .product-name p {
                padding-top: 10px;
                padding-left: 20px;
                font-size: 30px;
            }

            .product-price p {
                padding-top: 11px;
                padding-left: 40px;
                font-size: 28px;
            }
        </style>
</body>

</html>