<?php
require_once 'db.connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trial tes</title>
    <!-- main css -->
    <link rel="stylesheet" href="style.css">
    <!-- font-awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
</head>
<body>

    <!-- search product section starts -->
    <section class="container">
            <h2>Search product here</h2>
        <!-- product search bar starts -->
        <form action="" method="post">
            <input type="text" name="" id="search-item" placeholder="search your product here" onkeyup="search()">
            <button type="submit" name=""><i class="fas fa-search"></i></button>
        </form>
        <!-- product search bar ends -->

        <!-- show product list starts -->
        <div class="product-list" id="product-list">
            <?php
                $select_product = $conn->prepare("SELECT * FROM `product_tbl`");
                $select_product->execute([]);
                if($select_product->rowCount() > 0){
                    while($fetch_product = $select_product->fetch(PDO::FETCH_ASSOC)){
            ?>
            <div class="product">
                <img src="uploads/<?=$fetch_product['product_image'];?>">
                <div class="produt-details">
                    <h2><?=$fetch_product['product_name']?></h2>
                    <h3>₵<?=$fetch_product['product_price']?></h3>
                </div>
            </div>

            <?php
                } 
                }else{
                    echo '<p style="color: red; font-size:1.4rem">product can not be found</p>';
                }
            ?>
        </div>
        <!-- show product list ends -->
    </section>
    <!-- search product section ends -->

    










<!-- custom js script -->
<script src="main.js"></script>
</body>
</html>