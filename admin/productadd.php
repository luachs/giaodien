<?php
include "header.php";
include "slider.php";
include "../class/product_class.php"
?>
<?php 
$product = new product;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $insert_product = $product->insert_product($_POST, $_FILES);
}
?>




<div class="admin-content-right">
        <div class="admin-content-right-product__add">
          <h1>Thêm sản phẩm</h1>
          <form action="" method="POST" enctype="multipart/form-data">
            <label for=""
              >Nhập tên sản phẩm <span style="color: red">*</span></label
            >
            <input type="text" name="product_name" required placeholder="Nhập tên sản phẩm" />
            <label for=""
              >Chọn danh mục <span style="color: red">*</span></label
            >
            <select name="cartegory_id" id="">
              <option value="#">--Chọn--</option>
            <?php
            $show_cartegory = $product->show_cartegory();
            if($show_cartegory){
              while($result = $show_cartegory ->fetch_assoc()){
                ?>
                <option value="<?php  echo $result['cartegory_id']  ?>"><?php  echo $result['cartegory_name']  ?></option>
            <?php
              }
            }
            ?>
             </select>
            <label for=""
              >Chọn loại sản phẩm <span style="color: red">*</span></label
            >
            <select name="brand_id" id="">
              <option value="#">--Chọn--</option>
              <?php
            $show_brand = $product->show_brand();
            if($show_brand){
              while($result = $show_brand ->fetch_assoc()){
                ?>
                <option value="<?php  echo $result['brand_id']  ?>"><?php  echo $result['brand_name']  ?></option>
            <?php
              }
            }
            ?>
              
            </select>
            <label for="">Giá sản phẩm <span style="color: red">*</span></label>
            <input name = "product_price" required type="text" placeholder="Giá sản phẩm" />
            <label for=""
              >Giá khuyến mãi <span style="color: red">*</span></label
            >
            <input name = "product_price_new" required type="text" placeholder="Giá khuyến mãi" />
            <label for=""
              >Mô tả sản phẩm <span style="color: red">*</span></label
            >
            <textarea required name="product_desc" id="" cols="30" rows="10"></textarea>
            <label for="">Ảnh sản phẩm <span style="color: red">*</span></label>
            <input require type="file" name="product_img" />
            <label for="">Ảnh mô tả <span style="color: red">*</span></label>
            <input required multiple type="file" name="product_img_desc[]" />
            <button type="submit">Thêm</button>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
