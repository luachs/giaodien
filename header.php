<?php
include "./cartegory_class.php";
$cartegory = new cartegory;
$show_cartegory = $cartegory->show_cartegory();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="./images/logo/logo.jpg"
      type="image/x-icon"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <title>UTHTECH</title>
  </head>
  <body>
    <!-- header -->
    <header class="sticky">
      <div class="logo">
        <a href="./index.php"><img src="./images/logo/logo.jpg" alt="lỗi" /></a>
      </div>
      <div class="apple-devices">
      <?php
            if($show_cartegory){
              while($result = $show_cartegory->fetch_assoc()){
        ?>
        <li>
          <a href="cartegory.php?cartegory_id=<?php echo $result['cartegory_id']; ?>">
          <?php echo $result['cartegory_name'];  ?>
          </a>
      </li>

        <?php
               }
              }
            ?>
      </div>
      <div class="others">
        <li>
          <input placeholder="Tìm kiếm" type="text" />
          <i class="fa-solid fa-magnifying-glass"></i>
        </li>
        <li><i class="fa-solid fa-cart-shopping"></i></li>
        <li><i class="fa-solid fa-user"></i></li>
      </div>
    </header>