<?php
include('control.php');//goi trang control
$getdata = new data();//gọi lớp data thuộc trang control
$select_product=$getdata->select_maxid($new); //gọi hàm hiện thị dữ liệu
$select_sale=$getdata->se_sale($sale);
$select_sp=$getdata->se_sanpham_limit();
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reponsive.css">
    <title>Trang chủ</title>
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
                                        <a class="nav-link active home" aria-current="page" href="index.php">Trang chủ</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="shop.php">Sản phẩm</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="allnews.php">Tin tức</a>
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
        <div class="banner text-center">
            <div class="inner">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div
                                id="banner-carousel"
                                class="carousel slide"
                                data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div
                                        class="carousel-item active"
                                        data-bs-interval="3000"
                                    >
                                        <p class="banner-sub-heading">
                                            Khuyến Mãi Lớn
                                        </p>
                                        <hr class="dashed" />
                                        <h2 class="banner-heading">
                                          (Giảm tới 50% tất cả các mặt hàng trong dịp đặc biệt nhằm chi ân khách hàng đã ủng hộ chúng tôi).
                                        </h2>
                                        
                                        <a href="" class="btn btn-white btn-animated">Chi Tiết</a>
                                    </div>
          
                                    <div
                                        class="carousel-item"
                                        data-bs-interval="3000"
                                    >
                                        <p class="banner-sub-heading">
                                          THIẾT KẾ ẤN TƯỢNG,ĐỘC ĐÁO
                                        </p>
                                        <hr class="dashed" />
                                        <h2 class="banner-heading">
                                          Chúng tôi mang đến những thiết kế độc đáo cho không gian sống của bạn thêm mới mẻ
                                        </h2>
                                        
                                        <a href="#" class="btn btn-white btn-animated">Chi Tiết</a>
                                    </div>
          
                                    <div
                                        class="carousel-item"
                                        data-bs-interval="3000"
                                    >
                                        <p class="banner-sub-heading">
                                          SỰ KẾT HỢP MỚI MẺ
                                        </p>
                                        <hr class="dashed" />
                                        <h2 class="banner-heading">
                                            Với những sáng tạo không ngừng,chúng tôi luôn kết hợp các sản phẩm đẹp mắt,phù hợp và ấn tượng.
                                        </h2>
                                        
                                        <a href="#" class="btn btn-white btn-animated">Chi Tiết</a>
                                    </div>
          
                                    <div
                                        class="carousel-item"
                                        data-bs-interval="3000"
                                    >
                                        <p class="banner-sub-heading">
                                            PHONG CÁCH HỆN ĐẠI
                                        </p>
                                        <hr class="dashed" />
                                        <h2 class="banner-heading">
                                            Luôn cập nhập xu hướng mới nhất để đêm cho khách hàng sản phẩm tốt nhất phục vụ khách hàng
                                        </h2>
                                        
                                        <a href="#" class="btn btn-white btn-animated">Chi Tiết</a>
                                    </div>
                                </div>
          
                                <div class="carousel-indicators">
                                    <div
                                        class="indicator active"
                                        data-bs-target="#banner-carousel"
                                        data-bs-slide-to="0"
                                        aria-current="true"
                                        aria-label="Slide 1"
                                    >
                                        <div class="timmer"></div>
                                        <!-- <div class="text">
                                            <span class="slide-number">01</span>
                                            Intro
                                        </div> -->
                                    </div>
                                    <div
                                        class="indicator"
                                        data-bs-target="#banner-carousel"
                                        data-bs-slide-to="1"
                                        aria-label="Slide 2"
                                    >
                                        <div class="timmer"></div>
                                        <!-- <div class="text">
                                            <span class="slide-number">02</span>
                                            Intro
                                        </div> -->
                                    </div>
                                    <div
                                        class="indicator"
                                        data-bs-target="#banner-carousel"
                                        data-bs-slide-to="2"
                                        aria-label="Slide 3"
                                    >
                                        <div class="timmer"></div>
                                        <!-- <div class="text">
                                            <span class="slide-number">03</span>
                                            Intro
                                        </div> -->
                                    </div>
                                    <div
                                        class="indicator"
                                        data-bs-target="#banner-carousel"
                                        data-bs-slide-to="3"
                                        aria-label="Slide 4"
                                    >
                                        <div class="timmer"></div>
                                        <!-- <div class="text">
                                            <span class="slide-number">04</span>
                                            Intro
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service text-center">
            <div class="container">
                <div class="service">
                    <div class="service1">
                        <div class="service-icon">
                            <i class="fas fa-share"></i>
                          </div>
                          <div class="service-title">
                            Phương thức đổi trả
                          </div>
                          <hr class="slash">
                          <div class="service-text">
                            Đổi trả miễn phí trong vòng 30 ngày
                          </div>
                    </div>
                    <div class="service1">
                        <div class="service-icon">
                            <i class="fas fa-truck"></i>
                          </div>
                          <div class="service-title">
                            Miễn phí giao hàng
                          </div>
                          <hr class="slash">
                          <div class="service-text">
                            Áp dụng với tất cả các sản phẩm
                          </div>
                    </div>
                    <div class="service1">
                        <div class="service-icon">
                            <i class="fas fa-headphones-alt"></i>
                          </div>
                          <div class="service-title">
                            Hỗ trợ trực tuyến
                          </div>
                          <hr class="slash">
                          <div class="service-text">
                            Luôn hỗ trợ về mọi câu hỏi
                          </div>
                    </div>
                    <div class="service1">
                        <div class="service-icon">
                            <i class="fab fa-angellist"></i>
                          </div>
                          <div class="service-title">
                            Ưu đãi và khuyến mại
                          </div>
                          <hr class="slash">
                          <div class="service-text">
                            Luôn có nhiều mã giảm giá cho bạn
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-products text-center">
            <div class="container">
                <div class="feature-heading">Sản phẩm nổi bật</div>
                <div class="feature-intro">Các sản phẩm mới luôn có sẵn trong cửa hàng</div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Sản phẩm mới</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Đang khuyến mại</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Phổ biến nhất</button>
                    </li>
                </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="product-slider1">
                            <div class="container">
                                <div class="row">
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
                                    <div class="product">
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
                                                </div>
                                                <div>
                                                    <button class="addCart"><i class="fas fa-cart-plus"></i>   Chi Tiết</button>
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
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="product-slider1">
                            <div class="container">
                            <div class="row">
                                <div class="slider">
                                <?php
                                foreach($select_sale as $se_pro) //duyệt dữ liệu mảng trả về
                                    {
                                ?>
                                <?php
                                $price = $se_pro['gia_sp'];
                                $sale = $se_pro['sale_sp'];
                                $discount = $price * ((100-$sale)/100);
                                ?>
                                    <div class="product">
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
                                                        <p>21 đánh giá</p>
                                                    </div>
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
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="product-slider1">
                            <div class="container">
                            <div class="row">
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
                                    <div class="product">
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
                                                        <p>21 đánh giá</p>
                                                    </div>
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
                    </div>
                  </div>
            </div>
        </div>
        <div class="all-product text-center">
            <div class="container">
                <p class="all-heading">Sản phẩm</p>
                <p class="all-intro">Tất cả sản phẩm có sẵn tại cửa hàng</p>
                    <div class="products">
                        <div class="container">
                            <div class="row">
                            <?php
                                foreach($select_sp as $se_pro) //duyệt dữ liệu mảng trả về
                                    {
                                ?>
                                <?php
                                $price = $se_pro['gia_sp'];
                                $sale = $se_pro['sale_sp'];
                                $discount = $price * ((100-$sale)/100);
                                ?>
                                <div class="col-lg-3 col-md-6 col-12 nopadding">
                                <div class="product">
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
                                                        <p>21 đánh giá</p>
                                                    </div>
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
                                </div>
                                <?php
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                    <a href="shop.php"><button class="all-button">Xem thêm</button></a>
            </div>
        </div>
        <div class="home-discount text-center">
            <div class="container">
                <h2 class="title-discount">Khuyến mãi lớn</h2>
                <p class="discount-intro">Các đợt khuyến mãi vào thời điểm đặc biệt</p>
                <!-- <hr class="dashed-sale"> -->
                <div class="wrapper">
                  <div class="row">
                    <div class="col-lg-12 col-sm-12 order-2">
                      <div class="list">
                      <?php
                                foreach($select_sale as $se_pro) //duyệt dữ liệu mảng trả về
                                    {
                                ?>
                                <?php
                                $price = $se_pro['gia_sp'];
                                $sale = $se_pro['sale_sp'];
                                $discount = $price * ((100-$sale)/100);
                                ?>
                        <div class="product">
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
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="rate-number">
                                            <p>12 đánh giá</p>
                                        </div>
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
                      <div class="nav">
                      <div class=""></div>
                      <div class=""></div>
                      <div class=""></div>
                    </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="comment text-center">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-sm-12">
                  <div class="left">
                    <div class="open-shop">
                      <div class="open-title">GIỜ MỞ CỬA</div>
                      <ul class="open-list text-start">
                        <li class="open-item">Thứ 2 - Thứ 6 : 7h - 22h</li>
                        <li class="open-item">Thứ 7 - CN : 9h - 18h</li>
                        <li class="open-item">Ngày lễ : 9h - 18h</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8 col-sm-12">
                  <div class="right">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <h2 class="comment-title">ĐÁNH GIÁ CỦA KHÁCH HÀNG</h2>
                         
                          <img src="img/portrait-user/comment1.jpg" alt="" class="comment-img">
                          <p class="comment-name"> Anh Lê Văn Linh - Hà Nam</p>
                          <p class="comment-text">“Tôi thực sự hài lòng với chất lượng cũng như mức giá của các sản phẩm mà Suplo cung cấp. Nhất định tôi sẽ còn quay lại Suplo nhiều lần nữa. Chúc cho Suplo sẽ ngày càng phát triển mạnh mẽ hơn.”</p>
                        </div>
                        <div class="carousel-item">
                          <h2 class="comment-title">ĐÁNH GIÁ CỦA KHÁCH HÀNG</h2>
                          
                          <img src="img/portrait-user/user2.png" alt="" class="comment-img">
                          <p class="comment-name"> Chị Nguyễn Thanh Thủy - Nam Định</p>
                          <p class="comment-text">“Tôi thích các sản phẩm chất lượng cũng như mức giá phù hợp mà Suplo cung cấp. Tôi sẽ gé thăm Suplo nhiều lần nữa. Chúc cho Suplo sẽ ngày càng phát triển.”</p>
                        </div>
                        <div class="carousel-item">
                          <h2 class="comment-title">ĐÁNH GIÁ CỦA KHÁCH HÀNG</h2>
                          
                          <img src="img/portrait-user/user1.png" alt="" class="comment-img">
                          <p class="comment-name"> Chị Phạm Nam - Hà nội</p>
                          <p class="comment-text">“Tôi ấn tượng va vô cùng hài lòng với chất lượng cũng như mức giá của các sản phẩm mà Suplo cung cấp. Tôi sẽ còn quay lại Suplo nhiều lần nữa. Chúc cho Suplo sẽ ngày càng phát triển.”</p>
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="news text-center">
            <div class="container">
                <p class="feature-heading">Bảng tin</p>
                <p class="feature-intro">Tin tức về các sản phẩm nội thất</p>
                <div class="row">
                <div class="news-slider">
                    <div class="new news1">
                        <a href="news1.php">
                            <img src="img/banner/banner4.jpg" alt="">
                            <div class="news-footer">
                                <p class="news-title">ĐỒ NỘI THẤT ĐEM TỚI VẺ ĐẸP VINTAGE CHO NGÔI NHÀ</p>
                                <div class="view-news d-flex">
                                    <div class="author">
                                        <i class="fas fa-user-edit"></i>
                                        Suplor Wood
                                    </div>
                                    <div class="comment-news">
                                        <i class="fas fa-comment"></i>
                                        10
                                    </div>
                                </div>
                            </div>
                            <div class="date">
                                <p>17/11/2021</p>
                            </div>
                        </a>
                    </div>
                    <div class="new news1">
                        <a href="news2.php">
                            <img src="img/banner/banner3.jpg" alt="">
                            <div class="news-footer">
                                <p class="news-title">CĂN HỘ ẤM ÁP NHỜ BIẾT CÁCH SỬ DỤNG NỘI THẤT</p>
                                <div class="view-news d-flex">
                                    <div class="author">
                                        <i class="fas fa-user-edit"></i>
                                        Suplor Wood
                                    </div>
                                    <div class="comment-news">
                                        <i class="fas fa-comment"></i>
                                        12
                                    </div>
                                </div>
                            </div>
                            <div class="date">
                                <p>22/05/2021</p>
                            </div>
                        </a>
                    </div>
                    <div class="new news1">
                        <a href="news3.php">
                            <img src="img/news/guong.jpg" alt="">
                            <div class="news-footer">
                                <p class="news-title">KIỂU TỦ GƯƠNG VỪA XINH VỪA TIỆN CHO NHÀ CHẬT HẸP</p>
                                <div class="view-news d-flex">
                                    <div class="author">
                                        <i class="fas fa-user-edit"></i>
                                        Suplor Wood
                                    </div>
                                    <div class="comment-news">
                                        <i class="fas fa-comment"></i>
                                        10
                                    </div>
                                </div>
                            </div>
                            <div class="date align-items-center">
                                <p>12/04/2021</p>
                            </div>
                        </a>
                    </div>
                    <div class="new news1">
                        <a href="news4.php">
                            <img src="img/news/moctreo.jpg" alt="">
                            <div class="news-footer">
                                <p class="news-title">MÓC TREO ĐỒ ĐÀN ACCORDION TREO ĐÂU CŨNG THÀNH XINH</p>
                                <div class="view-news d-flex">
                                    <div class="author">
                                        <i class="fas fa-user-edit"></i>
                                        Suplor Wood
                                    </div>
                                    <div class="comment-news">
                                        <i class="fas fa-comment"></i>
                                        19
                                    </div>
                                </div>
                            </div>
                            <div class="date">
                                <p>18/11/2021</p>
                            </div>
                        </a>
                    </div>
                    <div class="new news1">
                        <a href="news5.php">
                            <img src="img/news/tu.png" alt="">
                            <div class="news-footer">
                                <p class="news-title">ĐI TÌM GỖ ĐÓNG TỦ VẠN NĂNG GHÉP ĐƯỢC MUÔN VÀN KIỂU</p>
                                <div class="view-news d-flex">
                                    <div class="author">
                                        <i class="fas fa-user-edit"></i>
                                        Suplor Wood
                                    </div>
                                    <div class="comment-news">
                                        <i class="fas fa-comment"></i>
                                        6
                                    </div>
                                </div>
                            </div>
                            <div class="date">
                                <p>6/04/2021</p>
                            </div>
                        </a>
                    </div>
                </div>
</div>
            </div>
      </div>
        <div class="register text-center">
        <div class="container">
            <div class="register-inner">
                <h2 class="register-title">ĐĂNG KÝ NHẬN TIN</h2>
                <p class="register-text">Đăng ký với chúng tôi để nhận thông tin mới nhất về khuyến mãi, các sản phẩm mới và tin tức bạn cần. Nhập email tại đây</p>
                <div class="email">
                  <input type="text" class="email-dk" placeholder="Email của bạn">
                  <button class="email-btn">Gửi</button>
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
                      <input placeholder="Nhập email của bạn..." type="text" name="Email">
                      <button name="txtsub"><a href=""><i class="fab fa-telegram-plane"></i></a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      
            <div class="footer-madeby text-center">
              <p>Made by © 2023</p>
            </div>
          </div>
          <div class="backtotop hide">
            <i class="fas fa-arrow-up"></i>
          </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/addcart.js"></script>
    <script src="js/index.js"></script>
    <script src="js/validation.js"></script>
</body>
</php>