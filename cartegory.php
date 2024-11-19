<?php
include_once "./header.php";
include_once "./product_class.php";
?>
<?php
      $cartegory_id = $_GET['cartegory_id'];
      $product = new product;
      $show_brand = $product->show_brand_cart($cartegory_id);
      $show_cartegory = $product->show_cartegory_name($cartegory_id);
?>
    <!-- trang chủ -->
    <div class="trangchu-index">
      <a href="./index.php">Trang chủ </a>
      <span>></span>
      <?php
         while($result = $show_cartegory->fetch_assoc()){
        ?>
      <span><?php echo $result['cartegory_name']; ?></span>
      <?php
        }
    ?>
    </div>
    <!-- hero -->
    <div class="hero">
      <!-- iPhone -->

      
      <div class="hero-left">
        <ul>
        <?php
         while($result = $show_brand->fetch_assoc()){
        ?>
          <li class="iphone__name"><?php echo $result['brand_name']; ?></li>
          <?php
        }
    ?>
        </ul> 
      </div>
  


<?php
$show_product = $product->get_products_by_cartegory($cartegory_id)
?>



      <div class="hero-right">
        <div class="hero__products">
          <!-- 1 -->
           <?php
           while($result1 = $show_product->fetch_assoc()){
           ?>
          <div class="hero__product">
            <div class="hero__product--value">New</div>
            <div class="hero__product--img">
            <a href="product.php?product_id=<?php echo $result1['product_id']; ?>">
                <img src="./admin/uploads/<?php echo $result1['product_img']; ?>" alt="lỗi"
              /></a>
            </div>
            <div class="hero__product--name">
              <a href=""><?php echo $result1['product_name']; ?></a>
            </div>
            <div class="hero__product--price">
            <?php echo $result1['product_price']; ?>
              <span class="discount">
                <span><?php echo $result1['product_price_new']; ?></span>
                <span></span>
              </span>
            </div>
          </div>
        <?php
        }
        ?>
        </div>
      </div>
    </div>
    <!-- history -->
    <div class="history">
      <h3>Lịch sử hình thành, phát triển của iPhone</h3>
      <div class="history-p">
        iPhone là dòng điện thoại thông minh được phát triển từ Apple Inc, được
        ra mắt lần đầu tiên bởi Steve Jobs và mở bán năm 2007. Bên cạnh tính
        năng của một máy điện thoại thông thường, iPhone còn được trang bị màn
        hình cảm ứng, camera, khả năng chơi nhạc và chiếu phim, trình duyệt
        web... Phiên bản thứ hai là iPhone 3G ra mắt tháng 7 năm 2008, được
        trang bị thêm hệ thống định vị toàn cầu, mạng 3G tốc độ cao. Trải qua 15
        năm tính đến nay đã có đến 34 mẫu iPhone được sản xuất từ dòng 2G cho
        đến iPhone 13 Pro Max và Apple là một trong những thương hiệu điện thoại
        được yêu thích và sử dụng phổ biến nhất trên thế giới.
      </div>
      <h3>iPhone có những mã máy nào?</h3>
      <div class="history-p">
        Những chiếc iPhone do Apple phân phối tại thị trường nước nào thì sẽ
        mang mã của nước đó. Ví dụ: LL: Mỹ, ZA: Singapore, TH: Thái Lan, JA:
        Nhật Bản, Những mã này xuất hiện tại Việt Nam đều là hàng xách tay, nhập
        khẩu. Còn tại Việt Nam, iPhone sẽ được mang mã VN/A. Tất cả các mã này
        đều là hàng chính hãng phân phối của Apple. Lợi thế khi bạn sử dụng
        iPhone mã VN/A đó là chế độ bảo hành tốt hơn với 12 tháng theo tiêu
        chuẩn của Apple. iPhone của bạn sẽ được bảo hành tại tất cả các trung
        tâm bảo hành Apple tại Việt Nam, một số mã quốc tế bị từ chối bảo hành
        và phải đem ra các trung tâm bảo hành Apple tại nước ngoài. Rất là phức
        tạp đúng không nào?
      </div>
      <h3>Apple đã khai tử những dòng iPhone nào?</h3>
      <div class="history-p">
        Tính đến nay, Apple đã khai tử (ngừng sản xuất) các dòng iPhone đời cũ
        bao gồm: iPhone 2G, iPhone 3G, iPhone 4, iPhone 5 series, iPhone 6
        series, iPhone 7 series, iPhone 8 series, iPhone X series, iPhone SE
        (thế hệ 1), iPhone SE (thế hệ 2), iPhone 11 Pro, iPhone 11 Pro Max,
        iPhone 12 Pro, iPhone 12 Pro Max. ShopDunk cung cấp những dòng iPhone
        nào?
      </div>
      <h3>UTHTECH cung cấp những dòng iPhone nào?</h3>
      <div class="history-p">
        ShopDunk là một trong những thương hiệu bán lẻ được Apple uỷ quyền tại
        Việt Nam, đáp ứng được các yêu cầu khắt khe từ Apple như: dịch vụ kinh
        doanh, dịch vụ chăm sóc khách hàng, vị trí đặt cửa hàng...
      </div>
      <div class="history-p">
        Những chiếc iPhone do Apple Việt Nam phân phối tại nước ta đều mang mã
        VN/A và được bảo hành 12 tháng theo theo tiêu chuẩn tại các trung tâm
        bảo hành Apple. Các dòng iPhone được cung cấp tại ShopDunk gồm:
      </div>
      <div><a href="">iPhone 15 series</a></div>
      <div class="history-a">
        <a href="">iPhone 14 series</a>
        <a href="">iPhone 13 series</a>
        <a href="">iPhone 12 series</a>
        <a href="">iPhone 11 series</a>
        <a href="">iPhone SE</a>
      </div>
      <div class="history-p">
        iPhone 11 được trang bị màn hình LCD và không hỗ trợ HDR, nâng cấp với
        chế độ chụp đêm Night Mode cùng Deep Fusion. Camera trước được nâng độ
        phân giải từ 7MP lên thành 12MP. Được trang bị chip A13 Bionic và hỗ trợ
        công nghệ WiFi 6. Với 6 màu sắc bắt mắt: Đen, Trắng, Xanh Mint, Đỏ,
        Vàng, Tím.
      </div>
      <div class="history-p">
        iPhone 12 mini, iPhone 12 là những chiếc iPhone đầu tiên của hãng hỗ trợ
        mạng di động 5G. Apple đã thay đổi thiết kế của iPhone từ khung viền bo
        tròn thành khung viền vuông vức như những dòng iPhone 5 và sử dụng mặt
        kính trước Ceramic Shield. Ngoài ra, hộp của thiết bị iPhone 12 và các
        dòng iPhone sau đều đã được loại bỏ củ sạc.
      </div>
      <div class="history-p">
        Tháng 9 năm 2021, Apple đã chính thức ra mắt 4 chiếc iPhone mới của hãng
        bao gồm iPhone 13 mini, iPhone 13, iPhone 13 Pro, iPhone 13 Pro Max. Các
        cụm Camera trên bộ 4 iPhone mới của Apple đều to hơn một chút so với thế
        hệ tiền nhiệm và phần tai thỏ ở mặt trước cũng được làm nhỏ hơn. Đối với
        iPhone 13 Pro và iPhone 13 Pro Max, Apple đã nâng cấp bộ nhớ tối đa của
        máy lên đến 1TB. Đi cùng với đó là tần số quét của dòng iPhone 13 cũng
        đã được nâng cấp lên 120Hz.
      </div>
      <div class="history-p">
        iPhone SE thế hệ 3 (còn gọi là iPhone SE 3 hay iPhone SE 2022) được
        Apple công bố vào tháng 3 năm 2022, kế nhiệm iPhone SE 2. Đây là một
        phần của iPhone thế hệ thứ 15, cùng với iPhone 13 và iPhone 13 Pro. Thế
        hệ thứ 3 có kích thước và yếu tố hình thức của thế hệ trước, trong khi
        các thành phần phần cứng bên trong được lựa chọn từ dòng iPhone 13, bao
        gồm cả hệ thống trên chip A15 Bionic.
      </div>
    </div>
    <div class="history-more"><span>Tìm hiểu thêm &#8595;</span></div>
    <!-- footer -->
<?php
include_once "./footer.php";
?>