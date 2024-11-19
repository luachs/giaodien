<?php  
include_once "./header.php";
include_once "./product_class.php";
$product_id = $_GET['product_id'];
$product = new product;
$show_product = $product->show_product_by_productID($product_id);
?>
    <!-- trang chủ -->
    <div class="trangchu-index">
      <a href="../index.html">Trang chủ </a>
      <span>></span>
      <span><a href="./cartegory.php">iPhone</a></span>
      <span>></span>
      <span>iPhone 16</span>
    </div>
    <!-- product -->
    <div class="product">
      <div class="product-left">
        <?php 
        while($result = $show_product->fetch_assoc()){
        ?>
        <img
          class="product-img-large"
          src="./admin/uploads/<?php echo $result['product_img']; ?>"
          alt=""
        />
        
        <div class="product-imgs-small">
          <div class="product-img-small">
            <img src="./images/iphone/iphone16plus.jpg"/>
            <img src="./images/iphone/iphone16pm.jpg"/>
            <img src="./images/iphone/iphone16.jpg"/>
            <img src="./images/iphone/iphone16pro.jpg"/>
            <img src="./images/iphone/iphone16plus.jpg"/>
          </div>
        </div>
      </div>
      <div class="product-right">
        <div class="product-right__title"><?php echo $result['product_name']; ?></div>
        <div class="product-right__star">
          <span><i class="fa-regular fa-star"></i></span>
          <span><i class="fa-regular fa-star"></i></span>
          <span><i class="fa-regular fa-star"></i></span>
          <span><i class="fa-regular fa-star"></i></span>
          <span><i class="fa-regular fa-star"></i></span>
        </div>
        <div class="product-right__price"><?php echo $result['product_price']; ?> <sup>đ</sup></div>
        <?php
        }
        ?>
        <div class="product-right__storage">
          <h2>Dung lượng</h2>
          <div class="product-right--storage">128GB</div>
          <div class="product-right--storage">256GB</div>
          <div class="product-right--storage">512GB</div>
        </div>
        <div class="product-right__color">
          <h2>Màu sắc</h2>
          <div class="product-right--color black"></div>
          <div class="product-right--color white"></div>
          <div class="product-right--color pink"></div>
          <div class="product-right--color blue"></div>
          <div class="product-right--color green"></div>
        </div>
        <div class="product-sales">
          <h2>Ưu đãi</h2>
          <div>
            <i class="fa-solid fa-check"></i>Giảm <b>500.000đ</b> khi thanh toán
            qua QR-Code Zalo Pay (SL có hạn)
          </div>
          <div>
            <i class="fa-solid fa-check"></i> Hỗ trợ trả góp <b>0% </b>lãi suất,
            0 phụ phí
          </div>
          <div>
            <i class="fa-solid fa-check"></i> Giảm đến <b>200.000đ</b> khi thanh
            toán qua Momo
          </div>
          <div>
            <i class="fa-solid fa-check"></i> Ốp chính hãng Apple iPhone 16
            series giảm <b>100.000đ</b>
          </div>
        </div>
        <a href="./HTML/cart.html"><button class="btn-muangay">MUA NGAY</button></a>
        <div class="product-list">
          <div>
            <i class="fa-solid fa-check"></i> Bộ sản phẩm gồm: Hộp, Sách hướng
            dẫn, Cây lấy sim, Cáp Type C
          </div>
          <div>
            <i class="fa-solid fa-check"></i>Miễn phí 1 đổi 1 trong 30 ngày đầu
            tiên (nếu có lỗi do NSX)
          </div>
          <div><i class="fa-solid fa-check"></i>Bảo hành chính hãng 1 năm</div>
          <div><i class="fa-solid fa-check"></i>Giao hàng nhanh toàn quốc</div>
        </div>
      </div>
    </div>
    <!-- product similar -->
    <div class="product-similar">
      <h2>Sản phẩm tương tự</h2>
    </div>
    <!-- hero -->
    <div class="hero-right">
      <!-- iPhone -->
      <div class="hero__title"><a href="">iPhone</a></div>
      <div class="hero__products">
        <!-- 1 -->
        <div class="hero__product">
          <div class="hero__product--value">New</div>
          <div class="hero__product--img">
            <a href="./product.html"
              ><img src="./images/iphone/iphone16pm.jpg" alt="lỗi"
            /></a>
          </div>
          <div class="hero__product--name">
            <a href="">iPhone 16 Pro Max 256gb</a>
          </div>
          <div class="hero__product--price">
            34.990.000đ
            <span class="discount">
              <span></span>
              <span></span>
            </span>
          </div>
        </div>
        <!-- 2 -->
        <div class="hero__product">
          <div class="hero__product--value">New</div>
          <div class="hero__product--img">
            <a href=""><img src="./images/iphone/iphone16.jpg" alt="lỗi" /></a>
          </div>
          <div class="hero__product--name">
            <a href="">iPhone 16 128gb</a>
          </div>
          <div class="hero__product--price">
            22.190.000đ
            <span class="discount">
              <span>22.990.000₫</span>
              <span>-3%</span>
            </span>
          </div>
        </div>
        <!-- 3 -->
        <div class="hero__product">
          <div class="hero__product--value">New</div>
          <div class="hero__product--img">
            <a href=""
              ><img src="./images/iphone/iphone16plus.jpg" alt="lỗi"
            /></a>
          </div>
          <div class="hero__product--name">
            <a href="">iPhone 16 Plus 128gb</a>
          </div>
          <div class="hero__product--price">
            25.990.000đ
            <span class="discount">
              <span></span>
              <span></span>
            </span>
          </div>
        </div>
        <!-- 4 -->
        <div class="hero__product">
          <div class="hero__product--value">Like new</div>
          <div class="hero__product--img">
            <a href=""
              ><img src="./images/iphone/iphone16pro.jpg" alt="lỗi"
            /></a>
          </div>
          <div class="hero__product--name">
            <a href="">iPhone 16 Pro 256gb</a>
          </div>
          <div class="hero__product--price">
            28.990.000đ
            <span class="discount">
              <span></span>
              <span></span>
            </span>
          </div>
        </div>
      </div>
    </div>
    <!-- introduce -->
    <div class="introduce">
      <div class="introduce-button">
        <div class="introduce-btn a active">Mô tả sản phẩm</div>
        <div class="introduce-btn b">Thông số kĩ thuật</div>
      </div>
      <div class="introduce-describe">
        <img src="./images/New/introduce1.jpg" />
        <img src="./images/New/introduce2.jpg" />
        <img src="./images/New/introduce3.jpg" />
        <img src="./images/New/introduce4.jpg" />
      </div>
      <div class="specification hide">
        <table>
          <tr class="specification-brey">
            <td>Kích thước màn hình:</td>
            <td>6.7 inches</td>
          </tr>
          <tr class="specification-white">
            <td>Công nghệ màn hình:</td>
            <td>Super Retina XDR OLED</td>
          </tr>
          <tr class="specification-brey">
            <td>Độ phân giải màn hình</td>
            <td>2796 x 1290-pixel</td>
          </tr>
          <tr class="specification-white">
            <td>Tính năng màn hình</td>
            <td>
              <div>Dynamic Island</div>
              <div>Màn hình HDR</div>
              <div>True Tone</div>

              <div>Dải màu rộng (P3)</div>
              <div>Haptic Touch</div>
              <div>Tỷ lệ tương phản 2.000.000:1</div>

              <div>Độ sáng tối đa 1000 nit 460 ppi</div>
              <div>Dải màu rộng (P3) Haptic Touch</div>
              <div>Tỷ lệ tương phản 2.000.000:1</div>

              <div>Lớp phủ kháng dầu chống in dấu vân tay</div>
              <div>Hỗ trợ hiển thị đồng thời nhiều ngôn ngữ và ký tự</div>
            </td>
          </tr>
          <tr class="specification-brey">
            <td>Tính năng camera</td>
            <td>
              <div>Flash True Tone</div>
              <div>Photonic Engine</div>
              <div>Deep Fusion</div>
              <div>HDR thông minh thế hệ 5</div>
              <div>Hiệu ứng Chiếu Sáng Chân Dung với sáu chế độ</div>
              <div>Chế độ Ban Đêm</div>
              <div>Chụp ảnh toàn cảnh Panorama (lên đến 63MP)</div>
              <div>Phong Cách Nhiếp Ảnh thế hệ mới nhất</div>
              <div>Ảnh không gian</div>
            </td>
          </tr>
          <tr class="specification-white">
            <td>Quay video trước</td>
            <td>
              <div>4K@24 fps</div>
              <div>4K@25 fps</div>
              <div>4K@30 fps</div>
              <div>4K@60 fps</div>
              <div>1080p@25fps, 1080p@30 fps, hoặc 1080p@60 fps</div>
            </td>
          </tr>
        </table>
      </div>
    </div>
    <!-- footer -->
   <?php
include_once "footer.php";
   ?>