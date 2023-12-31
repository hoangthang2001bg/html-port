<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="css/allnews.css">
    <link rel="stylesheet" href="css/reponsive.css">
    <title>Tin tức</title>
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
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse hide justify-content-center"
                                    id="navbarSupportedContent">
                                    <ul class="navbar-nav  mb-2 mb-lg-0 justify-content-center">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="index.php">Trang
                                                chủ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active pro" aria-current="page" href="shop.php">Sản
                                                phẩm</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active newss" aria-current="page" href="allnews.php">Tin
                                                tức</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active con" aria-current="page" href="contact.php">Liên
                                                hệ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="about.php">Giới
                                                thiệu</a>
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
                                            <div class="number-buy">0</div>
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
                                <div class="res-news">
                                    <a href=""><i class="far fa-newspaper"></i>Tin tức</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner">
            <div class="inner">
                <div class="container text-center">
                    <p class="title-heading">Tin tức</p>
                    <p class="intro">
                        <a href="">Trang chủ </a>/<a href=""> Tin tức </a>
                    </p>
                </div>
            </div>
        </div>

        <div class="allnews">
            <div class="container">
                <div class="text-center">
                    <p class="new">Tin tức mới nhất</p>
                </div>
                <div class="news">
                    <div class="news1">
                        <a href="news1.php">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="img/banner/banner4.jpg" alt="">
                                </div>
                                <div class="col-lg-6">
                                    <div class="news-heading">SẢN PHẨM NỘI THẤT ĐEM TỚI VẺ ĐẸP VINTAGE CHO NGÔI NHÀ
                                    </div>
                                    <p class="news-intro">“Vintage” là từ có nguồn gốc từ tiếng Pháp, dùng để chỉ những
                                        đồ vật đã có thời gian sử dụng lâu dài. Phong cách vintage là sự hòa trộn hoàn
                                        hảo giữa nét đẹp cổ điển và hiện đại. Từ lâu, phong cách vintage đã gây ấn tượng
                                        sâu sắc và được nhiều người yêu thích bởi vẻ giản dị, mộc mạc nhưng đầy tinh tế
                                        thông qua các thiết kế trong lĩnh vực thời trang, xe cộ, đồ trang trí,...</p>
                                    <div class="author-news">
                                        <div class="row">
                                            <div class="col-lg-6 order-2 d-flex">
                                                <p>Tác giả:</p>
                                                <p class="name">Admin</p>
                                            </div>
                                            <div class="col-lg-6 order-1">
                                                <i class="far fa-clock"></i>05:06:08 - 20/11/2021
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="">
                        <a href="news2.php">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="img/banner/banner3.jpg" alt="">
                                </div>
                                <div class="col-lg-6">
                                    <div class="news-heading">CĂN HỘ ẤM ÁP NHỜ BIẾT CÁCH SỬ DỤNG NỘI THẤT Gỗ
                                    </div>
                                    <p class="news-intro">Đồ gỗ mang đến sự ấm áp, sang trọng nên được nhiều người ưu
                                        tiên lựa chọn trong trang trí nội thất căn hộ hiện đại.
                                        Trong phòng khách gỗ được chọn làm chất liệu chính cho bàn ghế, tủ tivi và sàn
                                        nhà.
                                        Phòng ngủ dù không trang bị nhiều vật dụng đắt tiền nhưng vẫn ấm áp, thoải mái
                                        và là nơi yêu thích nhất của gia chủ.
                                    </p>
                                    <div class="author-news">
                                        <div class="row">
                                            <div class="col-lg-6 order-2 d-flex">
                                                <p>Tác giả:</p>
                                                <p class="name">Admin</p>
                                            </div>
                                            <div class="col-lg-6 order-1">
                                                <i class="far fa-clock"></i>05:06:08 - 20/11/2021
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="news3">
                        <a href="news4.php">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="img/news/moctreo.jpg" alt="">
                                </div>
                                <div class="col-lg-6">
                                    <div class="news-heading">MÓC TREO ĐỒ ĐÀN ACCORDION TREO ĐÂU CŨNG XINH
                                    </div>
                                    <p class="news-intro">Kiểu móc treo đồ hiện đại này đảm bảo bạn đặt đâu thì trông
                                        cũng sẽ rất ấn tượng và đáng yêu cơ!
                                        Nguyên liệu làm móc treo đồ:
                                        - 6 thanh gỗ dài 25cm
                                        - 4 thanh gỗ ngắn 12,5cm
                                        - 13 thanh gỗ tròn nhỏ ngắn
                                        - Keo dán gỗ
                                        - Khoan
                                    </p>
                                    <div class="author-news">
                                        <div class="row">
                                            <div class="col-lg-6 order-2 d-flex">
                                                <p>Tác giả:</p>
                                                <p class="name">Admin</p>
                                            </div>
                                            <div class="col-lg-6 order-1">
                                                <i class="far fa-clock"></i>05:06:08 - 20/11/2021
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="others-news">
                        <div class="text-center">
                            <p class="other-title">Tin tức khác</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <a href="">
                                    <img src="img/news/guong.jpg" alt="">
                                    <div class="others-name">KIỂU TỦ GƯƠNG VỪA XINH VỪA TIỆN CHO NGÔI NHÀ CHẬT HẸP
                                    </div>
                                    <div class="time">
                                        <i class="far fa-clock"></i>05:06:08 - 20/11/2021
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <a href="">
                                    <img src="img/news/tu.png" alt="">
                                    <div class="others-name">ĐI TÌM TỦ VẠN NĂNG GHÉP ĐƯỢC MUÔN VÀN KIỂU
                                    </div>
                                    <div class="time">
                                        <i class="far fa-clock"></i>05:06:08 - 20/11/2021
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <a href="news5.php">
                                    <img src="img/news/canho.jpg" alt="">
                                    <div class="others-name">CĂN HỘ ẤM ÁP NHỜ BIẾT CÁCH SỬ DỤNG NỘI THẤT Gỗ
                                    </div>
                                    <div class="time">
                                        <i class="far fa-clock"></i>05:06:08 - 20/11/2021
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- <div class="more text-center">
                            <button class="btn">Xem thêm</button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-login">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Đăng nhập</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Đăng kí</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="modal-inner">
                                        <input type="text" class="user-name" placeholder="Tài khoản">
                                        <p class="wrong-user is-invalid">Tài khoản phải có độ dài 6-12 kí tự và không
                                            chứa kí tự đặc biệt</p>
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
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="modal-inner">
                                    <div class="regis">
                                        <input type="text" class="user-name" placeholder="Tài khoản">
                                        <p class="wrong-user is-invalid">Tài khoản phải có độ dài 6-12 kí tự và không
                                            chứa kí tự đặc biệt</p>
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
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-youtube"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-google-plus-g"></i>
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
    <script>
        //reponsive
        document.querySelector('.navbar-toggler').addEventListener('click', () => {
            document.querySelector('.responsive-navbar').classList.toggle('hide')
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- <script src="js/cart.js"></script> -->
    <script src="js/addcart.js"></script>
    <script src="js/validation.js"></script>
</body>

</php>