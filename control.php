<?php
include('connect.php');//chèn trang connect vào bài
class data // tạo mới một lớp data chứa các phương thức liên quan đến
{
    function in_subcribe($email)
    {
        global $conn;// gọi biến kết nối sql
        $sql="insert into subcribe(email) values('$email')";// câu lệnh SQL để chèn dữ liệu và database
        $run=mysqli_query($conn,$sql);// hàm để thực thi câu lệnh SQL
        return $run;// kiểm tra thực thi được hay không;
    }
    function se_product($category)
    {
        global $conn;
        $sql ="select * from sanpham where theloai_sp='$category' ";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    function register()
    {
        global $conn;
        $sql="select * from user";
        $run = mysqli_query($conn,$sql);
        return $run;
    }
    function select_maxid($new)
    {
        global $conn;
        $sql="select * from sanpham where sale_sp='$new'!=0";
        $run =mysqli_query($conn,$sql);
        return $run;
    }
    function select_all()
    {
        global $conn;
        $sql="select * from sanpham";
        $run =mysqli_query($conn,$sql);
        return $run;
    }
    function se_product_limit($start,$result)
    {
        global $conn;
        $sql="select * from sanpham limit $start,$result";
        $run =mysqli_query($conn,$sql);
        return $run;
    }
    function se_flast()
    {
        global $conn;
        $sql="select * from sanpham order by id_sp DESC limit 0,3";
        $run =mysqli_query($conn,$sql);
        return $run;
    }
    function se_category($theloai)
    {
        global $conn;
        $sql="select * from sanpham where theloai_sp='$theloai'";
        $run =mysqli_query($conn,$sql);
        return $run;
    }
    function se_category_limit($start,$result,$cate)
    {
        global $conn;
        $sql="select * from sanpham where theloai_sp ='$cate' limit $start,$result";
        $run =mysqli_query($conn,$sql);
        return $run;
    }
    function se_detail($id)
    {
        global  $conn;
        $sql="select * from sanpham where id_sp='$id' ";
        $run=mysqli_query($conn,$sql);
        return  $run;
    }
    function se_sale($sale)
    {
        global  $conn;
        $sql="select * from sanpham where sale_sp='$sale'=0 ";
        $run=mysqli_query($conn,$sql);
        return  $run;
    }
    function se_sanpham_limit()
    {
        global $conn;
        $sql="select * from sanpham order by id_sp DESC limit 5,8";
        $run =mysqli_query($conn,$sql);
        return $run;
    }
    function register_id($id)
    {
        global $conn;
        $sql="select * from user where id='$id";
        $run = mysqli_query($conn,$sql);
        return $run;
    }
}
?>