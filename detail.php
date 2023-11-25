<?php
require_once("backend/auth.php");
require_once("repository/shoeRepository.php");
require_once("repository/cartRepository.php");

$cartRepository = new CartRepository();


if(isset($_POST['submit_cart'])){
  $user_id = Auth::loginWithCookie()['id'];
  if($cartRepository->findByUserIdAndShoeIdAndStatus($user_id,$_GET['id'],1))
    $cartRepository->insert($user_id,$_GET['id'],$_POST['soluong'],1);
    echo "<script>alert('Đã thêm vào giỏ hàng');
    </script>";
}

include('control.php');//goi trang control
$getdata = new data();//gọi lớp data thuộc trang control
$select_detail=$getdata->se_detail($_GET['id']); //gọi hàm hiện thị dữ liệu
$select_product=$getdata->select_all(); 
if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = 'đ') {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
    }
}
?>
<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png"
    type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/detail.css">
    <link rel="stylesheet" href="css/reponsive.css">
    <title>Chi tiết</title>
</head>
<body>
    <div class="container-fluid">
        <div class="header">
                <div class="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <div class="header-icon">
                                    <ul class="d-flex">
                                        <li class="icon"><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="icon"><a href=""><i class="fab fa-instagram"></i></a></li>
                                        <li class="icon"><a href=""><i class="fab fa-twitter"></i></a></li>
                                        <li class="icon"><a href=""><i class="fab fa-youtube"></i></a></li>
                                        <li class="icon"><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="header-contact">
                                    <ul class="d-flex justify-content-end">
                                        <li class="contact">
                                            <a href="" class="header-shop-map">
                                                <i class="fas fa-map-marker-alt"></i>
                                                Hệ thống cửa hàng
                                            </a>
                                        </li>
                                        <li class="contact">
                                            <a href="" class="header-shop-phone">
                                                <i class="fas fa-phone"></i>
                                                (+84)934 323 882
                                            </a>
                                        </li>
                                        <li class="contact">
                                            <a href="" class="header-shop-support">
                                                <i class="fas fa-envelope"></i>
                                                support@suplo.vn
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-menu">
                    <div class="container">
                        <div class="row">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <div class="container-fluid">
                                    <div class="logo">
                                        <a href="index.php">
                                            <img src="img/logo.png" alt="">
                                        </a>
                                    </div>
                                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                  </button>
                                  <div class="collapse navbar-collapse hide justify-content-center" id="navbarSupportedContent">
                                    <ul class="navbar-nav  mb-2 mb-lg-0 justify-content-center">
                                      <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link active pro" aria-current="page" href="shop.php">Sản phẩm</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link active newss" aria-current="page" href="allnews.php">Tin tức</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="contact.php">Liên hệ</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="about.php">Giới thiệu</a>
                                      </li>
                                    </ul>
                                  </div>
                                  <ul class="icon-nav justify-content-end d-flex">
                                    <li>
                                    <?php
                                        require_once("backend/filterWithCookie.php");
                                        ?>
                                    </li>
                                    <li>
                                        <a class="icon-buy" href="cart.php">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="responsive-navbar text-center hide an">
                    <div class="row">
                        <div class="col-12">
                            <div class="search">
                                <input type="text" placeholder="Tìm kiếm...">
                                <i class="fas fa-search"></i>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-6 d-flex flex-column align-items-start res-left">
                                    <div class="res-home">
                                        <a href=""><i class="fas fa-house-user"></i>Trang chủ</a>
                                    </div>
                                    <div class="resproducts">
                                        <a href=""><i class="fas fa-cart-plus"></i>Sản phẩm</a>
                                    </div>
                                    <div class="res-contact">
                                        <a href=""><i class="fas fa-map-marker-alt"></i>Liên hệ</a>
                                    </div>
                                    <div class="res-about">
                                        <a href=""><i class="fas fa-address-card"></i>Giới thiệu</a>
                                    </div>
                                    <div class="about-us">
                                        <a href=""><i class="fab fa-themeisle"></i>Về chúng tôi</a>
                                    </div>
                                </div>
                                <div class="col-6 d-flex flex-column align-items-start res-right">
                                    <div class="love">
                                        <a href=""><i class="far fa-heart"></i>Yêu thích</a>
                                    </div>
                                    <div class="res-n">
                                        <a href=""><i class="far fa-newspaper"></i>Tin tức</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="buy-success d-flex justify-content-center align-items-center hide">
            <p>Đặt hàng thành công</p>
        </div>
        <div class="banner">
            <div class="inner">
                <div class="container text-center">
                    <p class="title-heading">CHI TIẾT SẢN PHẨM</p>
                    <p class="intro"><a href="">Trang chủ</a>/ <a href="">Chi tiết sản phẩm</a></p>
                </div>
            </div>
        </div>
        <div class="detail">
            <div class="container">
                <div class="row">
                <?php
                                foreach($select_detail as $se_pro) //duyệt dữ liệu mảng trả về
                                    {
                                ?>
                                <?php
                                $price = $se_pro['gia_sp'];
                                $sale = $se_pro['sale_sp'];
                                $discount = $price * ((100-$sale)/100);
                                ?>
                    <div class="col-lg-5">
                        <div class="list-img">
                            <img src="bs-advance-admin\advance-admin\images\<?php echo $se_pro['anh_sp'];?>" alt=""  href='bs-advance-admin\advance-admin\images\<?php echo $se_pro['anh_sp'];?>'>
                            <div class="row">
                                <div class="col-4"><img src="bs-advance-admin\advance-admin\images\<?php echo $se_pro['anh_sp'];?>" alt="" href='bs-advance-admin\advance-admin\images\<?php echo $se_pro['anh_sp'];?>'></div>
                                <div class="col-4"><img src="bs-advance-admin\advance-admin\images\<?php echo $se_pro['anh_sp'];?>" alt="" href='bs-advance-admin\advance-admin\images\<?php echo $se_pro['anh_sp'];?>'></div>
                                <div class="col-4"><img src="bs-advance-admin\advance-admin\images\<?php echo $se_pro['anh_sp'];?>" alt="" href='bs-advance-admin\advance-admin\images\<?php echo $se_pro['anh_sp'];?>'></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <form action="" method="POST">
                        <div class="main-info">
                            <div class="product-info">
                                <p class="name-product"><?php echo $se_pro['ten_sp'];?></p>
                                <div class="price-product text-center d-flex align-items-center">
                                    <p class="price"><?php echo currency_format($discount); ?></p>
                                    <p class="root-price"><?php echo currency_format($se_pro['gia_sp']);?></p>
                                </div>
                                <p class="text-intro"><?php echo $se_pro['mota_sp'];?></p>
                                <div class="soluong d-flex align-items-center">
                                    <p class="sl-text">Số lượng: </p>
                                    <input name="soluong" type="number" value="1">
                                </div>
                                <div class="rate d-flex">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="rate-number text-end">
                                        <p>12 đánh giá</p>
                                    </div>
                                    <?php
                                    $giamgia = $price-$discount;
                                    ?>
                                </div>
                                <div>
                                <button class="addCart" name="submit_cart"><i class="fas fa-cart-plus"></i>   Thêm vào giỏ</button>
                                        <!-- <button class="buyNow">Mua ngay</button> -->
                                    </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="col-lg-3">
                        <div class="uudai">
                            <p class="uudai-title">Ưu đãi thêm</p>
                            <p>Trừ 5% cho khách hàng đăng kí</p>
                            <p>Trừ 5% cho thanh toán qua thẻ</p>
                        </div>
                    </div>
                </div>

                <div class="product-intro">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Miêu tả</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Thông số</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Đánh giá & Nhận xét</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            Những năm 50 đã nhắn tin - họ đã trở lại. Ghế Svelti mang tính biểu tượng của chúng tôi đặt một góc quay hiện đại vào một thiết kế cổ điển giữa thế kỷ, khiến nó trở thành chiếc ghế trong nhà hoặc ngoài trời hoàn hảo. Đa năng, dễ chăm sóc và cũng dễ dàng cho mắt. Ghế được bán và vận chuyển theo cặp. Giá được hiển thị trên mỗi ghế.
                            282 / 5000
                            Một diện mạo hiện đại duyên dáng giữa thế kỷ được đặt trong đá. Chân gỗ chắc chắn được bao phủ bởi một phiến đá cẩm thạch trang nhã để tạo nên vẻ ngoài gọn gàng, nhỏ gọn, hoàn hảo cho không gian nhỏ. Đó là một thiết kế cổ điển sẽ chuyển đổi qua bất kỳ phong cách chỗ ngồi nào. Trộn và kết hợp với bàn gỗ rắn.                         </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <ul class='list-thongso'>
                                <li>Trọng lượng: 50kg</li>
                                <li>Ghế được bán và vận chuyển theo cặp. Giá được hiển thị trên mỗi ghế</li>
                                <li>Polypropylene đúc chất lượng cao</li>
                                <li>Thích hợp cho sử dụng trong nhà và ngoài trời</li>
                                <li>Yêu cầu lắp ráp đơn giản (khoảng 15 phút)</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="judge">
                                <div class="container">
                                    <div class=" d-flex flex-column">
                                        <p class="nhanxet">Đánh giá & nhận xét sản phẩm</p>
                                        <div class="input d-flex flex-column">
                                            <input type="text" class="input-name" placeholder="Họ và Tên">
                                            <input type="text" class="input-name" placeholder="Số điện thoại">
                                            <textarea name="" id="" cols="30" rows="10" placeholder="Chia sẻ về sản phẩm"></textarea>
                                        </div>
                                        
                                    </div>
                                    <div class="send">
                                        <p class="feel">Bạn cảm thấy như thế nào?</p>
                                        <div class="stars-judge d-flex justify-content-center">
                                           <div class="star1"><i class="fas fa-star"></i><p>Rất tệ</p></div>
                                           <div class="star1"><i class="fas fa-star"></i><p>Tệ</p></div>
                                           <div class="star1"><i class="fas fa-star"></i><p>Bình thường</p></div>
                                           <div class="star1"><i class="fas fa-star"></i><p>Tốt</p></div>
                                           <div class="star1"><i class="fas fa-star"></i><p>Rất tốt</p></div>
                                        </div>
                                    </div>
                                    <div class="submit text-center">
                                        <button class="btn">Gửi đánh giá</button>
                                    </div>
                                    <hr class="hr">
                                    <div class="comment text-start">
                                        <div class="row">
                                            <div class="col-1">
                                                <img src="img/portrait-user/comment1.jpg" alt="">
                                            </div>
                                            <div class="col-11">
                                                <div class="comment-name">Lê Văn Linh</div>
                                                Một sản phẩm tốt
                                                <div class="stars">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-1">
                                                <img src="img/portrait-user/user2.png" alt="">
                                            </div>
                                            <div class="col-11">
                                                <div class="comment-name">Phạm Nam</div>
                                                Sản phẩm chất lượng
                                                <div class="stars">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
                <?php
                                    }
                ?>
                <div class="suggest">
                    <div class="suggest-heading">Sản phẩm gợi ý</div>
                    <div class="slider">
                    <?php
                                foreach($select_product as $se_pro) //duyệt dữ liệu mảng trả về
                                    {
                                ?>
                                <?php
                                $price = $se_pro['gia_sp'];
                                $sale = $se_pro['sale_sp'];
                                $discount = $price * ((100-$sale)/100);
                                ?>
                        <div class="product" style="height: auto;">
                            <a href="detail.php?id=<?php echo $se_pro['id_sp'];?>">
                                <img src="bs-advance-admin\advance-admin\images\<?php echo $se_pro['anh_sp'];?>" alt="" class="product-img">
                                <div class="product-info">
                                    <p class="name-product text-center"><?php echo $se_pro['ten_sp'];?></p>
                                    <div class="price-product text-center d-flex align-items-center">
                                        <p class="price"><?php echo currency_format($discount); ?></p>
                                        <p class="root-price"><?php echo currency_format($se_pro['gia_sp']);?></p>
                                    </div>
                                    <div class="rate d-flex">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="rate-number">
                                            <p>16 đánh giá</p>
                                        </div>
                                        <?php
                                    $giamgia = $price-$discount;
                                    ?>
                                    </div>
                                    <div>
                                    <button class="addCart"><i class="fas fa-cart-plus"></i>   Chi Tiết</button>
                                        <!-- <button class="buyNow">Mua ngay</button> -->
                                    </div>
                                </div>
                            </a>
                            <?php
                                        if($se_pro['sale_sp']>0){
                                        echo '<p class="discount">'.$se_pro['sale_sp'].'%</p>';
                                        }
                                        ?>
                            
                        </div>
                        <?php
                            }
                            ?>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="modal-login">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Đăng nhập</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Đăng kí</button>
                          </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                  <div class="modal-inner">
                                      <input type="text" class="user-name" placeholder="Tài khoản">
                                      <p class="wrong-user is-invalid">Tài khoản phải có độ dài 6-12 kí tự và không chứa kí tự đặc biệt</p>
                                      <input type="text" class="pass" placeholder="Mật khẩu">
                                      <p class="wrong-pass is-invalid">Mật khẩu phải có độ dài 6-12 kí tự.</p>
                                      <button class="login">Đăng nhập</button>
                                      <div class="row">
                                          <div class="col-6 save">
                                              <input type="checkbox">Lưu mật khẩu
                                          </div>
                                          <div class="col-6 forget text-end">
                                              <a href="">Quên mật khẩu</a>
                                          </div>
                                      </div>
                                      <p class="text-center">Hoặc</p>
                                      <div class="oline d-flex justify-content-center">
                                          <a href="">
                                              <img src="img/facebook.png" alt="">
                                          </a>
                                          <a href="">
                                              <img src="img/google.png" alt="">
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                              <div class="modal-inner">
                                <div class="regis">
                                    <input type="text" class="user-name" placeholder="Tài khoản">
                                    <p class="wrong-user is-invalid">Tài khoản phải có độ dài 6-12 kí tự và không chứa kí tự đặc biệt</p>
                                    <input type="text" class="pass" placeholder="Mật khẩu">
                                    <p class="wrong-pass is-invalid">Mật khẩu phải có độ dài 6-12 kí tự.</p>
                                    <input type="text" class="again" placeholder="Nhập lại mật khẩu">
                                    <p class="wrong-again is-invalid">Mật khẩu phải có độ dài 6-12 kí tự.</p>
                                    <button class="register-button">Đăng kí</button>
                                </div>
                              </div>
                          </div>
                        </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="footer">
            <div class="footer-inner">
              <div class="container">
                <div class="row">
                  <div class="col-lg-3 col-sm-12">
                    <img src="img/logo.png" alt="" class="footer-img">
                    <div class="address">
                      <i class="fas fa-home"></i>
                      Số 1 Lương Yên, Q.Hai Bà Trưng, Hà Nội
                    </div>
                    <div class="phone-footer">
                      <i class="fas fa-phone"></i>
                      (+84)934 323 882
                    </div>
                    <div class="supports">
                     <i class="far fa-envelope"></i>
                      support@suplo.vn
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-12 cot2">
                    <h4 class="title-col2">DỊCH VỤ KHÁCH HÀNG</h4>
                    <p><a href="">Hướng dẫn đặt mua hàng</a></p>
                    <p><a href="">Kinh nghiệm mua hàng</a></p>
                    <p><a href="">Đối tác và đại lý</a></p>
                    <p><a href="">Hình thức thanh toán</a></p>
                    <p><a href="">Mua hàng và đổi trả</a></p>
                  </div>
                  <div class="col-lg-3 col-sm-12 cot3">
                    <h4 class="title-col3">HỖ TRỢ</h4>
                    <p><a href="">Đổi trả</a></p>
                    <p><a href="">Chính sách bảo hành</a></p>
                    <p><a href="">Chính sách vận chuyển</a></p>
                    <p><a href="">Điều khoản dịch vụ</a></p>
                    <p><a href="">Chính sách quyền riêng tư</a></p>
                  </div>
                  <div class="col-lg-3 col-sm-12">
                    <h4 class="title-col4">LIKE SUPLO TRÊN MẠNG XÃ HỘI</h4>
                    <div class="col4-item">
                      <a href=""><i class="fab fa-facebook-f"></i></a>
                      <a href=""><i class="fab fa-instagram"></i></a>
                      <a href=""><i class="fab fa-youtube"></i></a>
                      <a href=""><i class="fab fa-twitter"></i></a>
                      <a href=""><i class="fab fa-google-plus-g"></i></a>
                    </div>
                    <h4 class="title-col4">ĐĂNG KÝ NHẬN TIN</h4>
                    <div class="col4-input d-flex">
                      <input placeholder="Nhập email của bạn..." type="text">
                      <button><a href=""><i class="fab fa-telegram-plane"></i></a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      
            <div class="footer-madeby text-center">
              <p>Made by © 2023 </p>
            </div>
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="js/addcart.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/addcart.js"></script>
    <script src="js/detail.js" type="module"></script>
    <!-- <script src="js/cart.js"></script> -->
    <script src="js/validation.js"></script>
</body>
</php>