
<?php
include "header.php";
include "slider.php";
include "../class/product_class.php"
?>
<?php 
$product = new product;
$show_product = $product->show_product();
?>
<div class="admin-content-right">
<div class="admin-content-right-cartegory__list">
          <h1>Danh loại sản phẩm</h1>
          <table>
            <tr>
              <th>STT</th>
              <th>ID Sản phẩm</th>
              <th>Tên danh mục</th>
              <th>Tên loại sản phẩm</th>
              <th>Tên sản phẩm</th>
              <th>Giá sản phẩm</th>
              <th>Giá khuyến mãi</th>
              <th>Tùy biến</th>
            </tr>
            <?php
            if($show_product){
              $i = 0;
              while($result = $show_product->fetch_assoc()){
                $i++;
            ?>
            <tr>
              <td><?php echo $i;  ?></td>
              <td><?php echo $result['product_id'];  ?></td>
              <td><?php echo $result['cartegory_name'];  ?></td>
              <td><?php echo $result['brand_name'];  ?></td>
              <td><?php echo $result['product_name'];  ?></td>
              <td><?php echo $result['product_price'];  ?></td>
              <td><?php echo $result['product_price_new'];  ?></td>
              
              <td><a href="productdelete.php?product_id=<?php echo $result['product_id'];  ?>">Xóa</a></td>
            </tr>
            <?php
               }
              }
            ?>
          </table>
          <a href="./productadd.php"><button>Thêm sản phẩm</button></a>
        </div>
      </div>
    </section>
  </body>
</html>
