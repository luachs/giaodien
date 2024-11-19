<?php
include_once "header.php";
include_once "./product_class.php";

?>
    <!-- slider -->
    <section id="slider">
      <div class="container">
        <div class="content">
          <img src="./images/slider/slider1.jpg" alt="lỗi" />
          <img src="./images/slider/slider2.jpg" alt="lỗi" />
          <img src="./images/slider/slider3.jpg" alt="lỗi" />
          <img src="./images/slider/slider4.jpg" alt="lỗi" />
        </div>
      </div>
      <div class="container-dots">
        <div class="dot active"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
    </section>
     <!-- hero -->
     <div class="hero-right">
      <!-- iPhone -->
      <?php
    // Code xử lý HTML
    $show_cart = new product;
    $cartegories = $show_cart->get_all_cartegories(); // Gọi hàm lấy danh mục

    if ($cartegories) {
        while ($cartegory = $cartegories->fetch_assoc()):
?>
            <div class="hero__title">
                <a href="cartegory.php?cartegory_id=<?php echo $cartegory['cartegory_id']; ?>">
                    <?php echo $cartegory['cartegory_name']; ?>
                </a>
            </div>
            <div class="hero__products">
                <?php
                    $products = $show_cart->get_products_by_cartegory($cartegory['cartegory_id']); // Lấy sản phẩm cho danh mục này
                    if ($products) {
                        while ($product = $products->fetch_assoc()):
                ?>
                    <div class="hero__product">
                        <div class="hero__product--value"><?php echo ($product['product_price_new'] ? 'New' : ''); ?></div>
                        <div class="hero__product--img">
                            <a href="product.php?product_id=<?php echo $product['product_id']; ?>">
                            <img src="./admin/uploads/<?php echo $product['product_img']; ?>" alt="lỗi" />
                            </a>
                        </div>
                        <div class="hero__product--name">
                            <a href=""><?php echo $product['product_name']; ?></a>
                        </div>
                        <div class="hero__product--price">
                            <?php echo $product['product_price']; ?>đ
                            <span class="discount">
                            <span><?php echo $product['product_price_new']; ?>đ</span>
                          </span>
                        </div>
                    </div>
                <?php
                        endwhile;
                    }
                ?>
            </div> <!-- Đóng hero__products -->

            <div class="hero-container">
            <a href="cartegory.php?cartegory_id=<?php echo $cartegory['cartegory_id']; ?>">
                    <button class="hero-container-btn">Xem tất cả <?php echo $cartegory['cartegory_name']; ?></button>
                </a>
            </div>
<?php
        endwhile;
    }
?>







    <!-- footer -->
<?php
include "footer.php";
?>