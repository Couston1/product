<?php
require_once 'db.connection.php';

// add product
if(isset($_POST['Add_product'])){
    $productname = $_POST['product_name'];
    $productname = filter_var($productname, FILTER_SANITIZE_STRING);
    $productprice = $_POST['product_price'];
    $productprice = filter_var($productprice, FILTER_SANITIZE_STRING);

    $image = $_FILES['product_image']['name'];
    $image = filter_var($image, FILTER_SANITIZE_STRING);
    $image_size = $_FILES['product_image']['size'];
    $image_tmp_name = $_FILES['product_image']['tmp_name'];
    $image_folder = 'uploads/'.$image;

    $select_product = $conn->prepare("SELECT * FROM `product_tbl` WHERE product_name = ?");
    $select_product->execute([$productname]);

    if($select_product->rowCount() > 0 ){
        $messageboxdanger[] = 'Product already exist';

    }else{
        if($image_size > 2000000){
            $messageboxdanger[] = 'image size is more than 2MB';
        }else{

            move_uploaded_file($image_tmp_name, $image_folder);
            $insert_food = $conn->prepare("INSERT INTO `product_tbl` (product_name, product_price, product_image) VALUES(?,?,?) ");
            $insert_food->execute([$productname, $productprice, $image]); 
            
            $messageboxsuccess[] = 'Product Added Successfully';            

        }
    }

}else{
    $messageboxdanger[] = 'No product added yet';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add product</title>

    <!-- main css -->
    <link rel="stylesheet" href="style.css">
    <!-- font-awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    
</head>
<body>

    <section class="add-product">
        <form action="" method="post" enctype="multipart/form-data" onsubmit="return validateFields();">
                 <h2>Add product here</h2>
            <div class="image">
                <img src="photo.jfif" id="previewImg">
            </div>

            <div class="input-group">
                <input type="text" name="product_name" id="productname" placeholder="Enter product Name" value="">
                <span id="error-productname"></span>
            </div>

            <div class="input-group">
                <input type="text" name="product_price" id="productprice" placeholder="Enter price" maxlength="999999">
                <span id="error-productprice"></span>
            </div>

            <div class="input-group">
                <input type="file" name="product_image" id="productimage" accept="image/.jpeg, .jpg, .jfif, .png" onchange="PreviewImage(this);">
                <span id="error-productimage"></span>
            </div>

            <div class="btns">
                <button type="submit" name="Add_product" class="btn" onclick="removeToast(this.parentElement);">Save</button>
            </div>
        </form>
    </section>
    

<!-- custom js script -->
<script src="main.js"></script>
<!-- jquery link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script>
        $('document').ready(function()
        {
            $('.notifications').fadeOut(10000);
        });
     </script>

<!-- alert message -->
<?php include 'alert.php'?>


</body>
</html>