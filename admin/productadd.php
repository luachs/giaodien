<?php
include "header.php";
include "slider.php";

?>
<?php 
// $cartegory = new cartegory;
// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     $cartegory_name = $_POST['cartegory_name'];
//     $insert_cartegory = $cartegory->insert_cartegory($cartegory_name);
// }
?>
<div class="admin-content-right">
        <div class="admin-content-right-product__add">
          <h1>Thêm sản phẩm</h1>
          <form action="" method="POST" enctype="multipart/form-data">
            <label for=""
              >Nhập tên sản phẩm <span style="color: red">*</span></label
            >
            <input type="text" name="" placeholder="Nhập tên sản phẩm" />
            <label for=""
              >Chọn danh mục <span style="color: red">*</span></label
            >
            <select name="" id="">
              <option value="#">--Chọn--</option>
            </select>
            <label for=""
              >Chọn loại sản phẩm <span style="color: red">*</span></label
            >
            <select name="" id="">
              <option value="#">--Chọn--</option>
            </select>
            <label for="">Giá sản phẩm <span style="color: red">*</span></label>
            <input type="text" placeholder="Giá sản phẩm" />
            <label for=""
              >Giá khuyến mãi <span style="color: red">*</span></label
            >
            <input type="text" placeholder="Giá khuyến mãi" />
            <label for=""
              >Mô tả sản phẩm <span style="color: red">*</span></label
            >
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <label for="">Ảnh sản phẩm <span style="color: red">*</span></label>
            <input type="file" name="" />
            <label for="">Ảnh mô tả <span style="color: red">*</span></label>
            <input multiple type="file" name="" />
            <button type="submit">Thêm</button>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
