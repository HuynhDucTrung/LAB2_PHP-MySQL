<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canon Cameras</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .product {
            width: 30%;
            box-sizing: border-box;
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
        }
        .product img {
            max-width: 100%;
            height: auto;
        }
        .price {
            font-weight: bold;
        }
        .old-price {
            text-decoration: line-through;
            color: grey;
        }
        .discount {
            color: red;
        }
        .source {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $products = [
            [
                "name" => "Máy Ảnh Canon SX730 HS (Hàng Nhập Khẩu)",
                "new_price" => "7.690.000 ₫",
                "old_price" => "9.370.000 ₫",
                "discount" => "-18%",
                "image" => "img/Máy Ảnh Canon SX730 HS.jpg"
            ],
            [
                "name" => "Máy Ảnh Canon SX720 HS (Hàng Nhập Khẩu)",
                "new_price" => "6.290.000 ₫",
                "old_price" => "7.870.000 ₫",
                "discount" => "-20%",
                "image" => "img/Máy Ảnh Canon SX720 HS.jpg"
            ],
            [
                "name" => "Máy Ảnh Canon SX 620 HS (Hàng Nhập Khẩu)",
                "new_price" => "4.890.000 ₫",
                "old_price" => "6.240.000 ₫",
                "discount" => "-22%",
                "image" => "img/Máy Ảnh Canon SX 620 HS.jpg"
            ],
            [
                "name" => "Máy Ảnh Canon SX730 HS (Hàng Chính Hãng)",
                "new_price" => "9.170.000 ₫",
                "old_price" => "10.620.000 ₫",
                "discount" => "-14%",
                "image" => "img/Máy Ảnh Canon SX730 HS.jpg"
            ],
            [
                "name" => "Máy Ảnh Canon Powershot G3X (Lê Bảo Minh)",
                "new_price" => "16.990.000 ₫",
                "old_price" => "22.500.000 ₫",
                "discount" => "-24%",
                "image" => "img/Máy Ảnh Canon SX730 HS.jpg"
            ],
            [
                "name" => "Máy Ảnh Canon G9X Mark II (Hàng Nhập Khẩu)",
                "new_price" => "9.490.000 ₫",
                "old_price" => "11.990.000 ₫",
                "discount" => "-21%",
                "image" => "img/Máy Ảnh Canon G9X Mark II.jpg"
            ]
        ];

        foreach ($products as $product) {
            echo '<div class="product">';
            echo '<img src="' . $product["image"] . '" alt="' . $product["name"] . '">';
            echo '<p>' . $product["name"] . '</p>';
            echo '<p class="price">' . $product["new_price"] . '</p>';
            echo '<p class="old-price">' . $product["old_price"] . '</p>';
            echo '<p class="discount">' . $product["discount"] . '</p>';
            echo '</div>';
        }
        ?>
    </div>
    <div class="source">
        Source: Products of Canon
    </div>
</body>
</html>
