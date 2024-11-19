
<?php

include "../admin/database.php";
?>
<?php
Class product{
    private $db;
    public function __construct(){
        $this-> db =  new Database();
    }
    public function show_cartegory(){
        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC ";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_brand(){
        $query = "SELECT tbl_brand.*,tbl_cartegory.cartegory_name
        FROM tbl_brand INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id = tbl_cartegory.cartegory_id
        ORDER BY tbl_brand.brand_id DESC
        ";
        $result = $this->db->select($query);
        return $result;
    }
    public function insert_product(){
        $product_name = $_POST['product_name'];
        $cartegory_id = $_POST['cartegory_id'];
        $brand_id = $_POST['brand_id'];
        $product_price = $_POST['product_price'];
        $product_price_new = $_POST['product_price_new'];
        $product_desc = $_POST['product_desc'];
        $product_img = $_FILES['product_img']['name'];
        $upload_dir = dirname(__FILE__) . "/../admin/uploads/";
        move_uploaded_file($_FILES['product_img']['tmp_name'], $upload_dir . $product_img);



        $query ="INSERT INTO tbl_product(
        product_name,
        cartegory_id,
        brand_id,
        product_price,
        product_price_new,
        product_desc,
        product_img) values (
         '$product_name',
         '$cartegory_id',
         '$brand_id',
         '$product_price',
         '$product_price_new',
         '$product_desc',
         '$product_img'
         )";
        $result = $this->db->insert($query);
        if($result){
            $query ="SELECT * FROM tbl_product ORDER BY product_id DESC LIMIT 1";
            $result = $this->db->select($query)->fetch_assoc();
            $product_id = $result['product_id'];
            $filename = $_FILES['product_img_desc']['name'];
            $filetmp = $_FILES['product_img_desc']['tmp_name'];

            foreach($filename as $key => $value){
                move_uploaded_file($filetmp[$key], $upload_dir .$value);
        
        
                $query = "INSERT INTO tbl_product_img_desc(product_id, product_img_desc)
                values('$product_id','$value')";
                $result = $this->db->insert($query);
            }
        }
        header("location:productlist.php");
        return $result;
    }
    public function show_product(){
        $query = "SELECT  tbl_product.*,tbl_brand.brand_name, tbl_cartegory.cartegory_name
        FROM tbl_product INNER JOIN tbl_brand INNER JOIN tbl_cartegory
         ON tbl_product.brand_id = tbl_brand.brand_id AND tbl_brand.cartegory_id = tbl_cartegory.cartegory_id
        ORDER BY tbl_product.product_id DESC
        ";
        $result = $this->db->select($query);
        return $result;
    }

    public function delete_product($product_id){
        $query = "DELETE FROM tbl_product WHERE product_id = '$product_id' ";
        $result = $this->db->delete($query);
        header("location:productlist.php");
        return $result;
    }

    public function get_product($product_id){
        $query = "SELECT * FROM tbl_product WHERE product_id = '$product_id' ";
        $result = $this->db->select($query);
        return $result;
    } 

}

?>


