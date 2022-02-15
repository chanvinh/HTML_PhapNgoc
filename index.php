<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 , maximum-scale=1, user-scalable=no, viewport-fit=cover">
	<title>Title</title>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">

    <?php // Thư viện dùng chung toàn website -- KHÔNG ĐƯỢC SỬA ?>
    <link href="css/vendor/normalize.css" rel="stylesheet" />
    <link href="css/vendor/font-awesome.css" rel="stylesheet" />
    <link href="css/hitech/ht-base.css" rel="stylesheet" />
    <script src="js/vendor/jquery-3.3.1.js" type="text/javascript"></script>
    <script src="js/hitech/ht-base.js" type="text/javascript"></script>

    <?php // Thư viện chỉ dùng cho trang này -- KHÔNG ĐƯỢC SỬA ?>
    <link rel="stylesheet" type="text/css" href="js/vendor/vegas-slider/vegas-slider.css">
    <script src="js/vendor/vegas-slider/vegas-slider.js"></script>
    <link rel="stylesheet" type="text/css" href="js/vendor/slick/slick.css">
    <script src="js/vendor/slick/slick.js"></script>

    <?php // CSS & JS dùng chung toàn website ?>
    <link href="css/style.css" rel="stylesheet" />
	<script src="js/style.js" type="text/javascript"></script>

	<?php // CSS, JS chỉ dùng cho trang này ?>
    <link rel="stylesheet" type="text/css" href="css/sidebar.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">

</head>
<body>
    <!-- BEGIN HEADER -->
	<?php include('header.php'); ?>
    <!-- END HEADER -->

    <!-- BEGIN CONTENT -->
    <div class="s-slide-6 ht-ratio--35">
        <div class="vegas-wrapper ht-ratio__img">
            <!-- <div class="s_caption">
                <div>Pháp Ngọc - Phật từ trong tâm</div>
                <div>Hạnh phúc không tự nhiên mà có, nó đến từ chính hành động của bạn.</div>
            </div> -->
        </div>
    </div>
    <div class="s-product">
        <div class="container">
            <div class="row row-flex">
                <div class="col-sm-3 col-12">
                    <?php include('sidebar.php');?>
                </div>
                <div class="col-sm-9 col-12">
                    <div class="s-product-highlight ht-mrb30">
                        <div class="c-headline-14 h2 text-center">
                            <h2 class="c_name">Sản phẩm nổi bật</h2>
                        </div>
                        <div class="s-home-2">
                            <div class="b-sslide-default">
                                <div class="slick-slider">
                                    <?php for ( $i =9; $i <= 20; $i++) { ?>
                                    <div class="col-md-4 col-6">
                                        <a href="san-pham-chi-tiet.php" title="">
                                            <div class="b-card-58">
                                                <div class="b_thumb ht-ratio--135">
                                                    <img src="images/sanpham/<?php echo $i ?>.jpg" alt="" class="ht-ratio__img" />
                                                </div>
                                                <div class="b_content">
                                                    <div class="b_source">Mã sản phẩm: A2-03
                                                    </div>
                                                    <h3 class="b_title">Pháp phục</h3>
                                                    <div class="b_price">
                                                        <span class="discount">800.000<sup>đ</sup></span>
                                                        <span class="market">2.000.000<sup>đ</sup></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s-product-sale ht-mrb30">
                        <div class="row row-flex headline">
                            <div class="col-6">
                                <div class="c-headline-12 h2 ">
                                    <h2 class="c_name"><a href="">Sản phẩm khuyến mãi</a></h2>
                                </div>
                            </div>
                            <div class="col-6 more">
                                <a href="" title=""><em>Xem thêm</em></a>
                            </div>
                        </div>

                        <div class="row row-flex">
                            <?php for ( $i =1; $i <= 9; $i++) { ?>
                                <div class="col-md-4 col-6">
                                    <a href="san-pham-chi-tiet.php" title="">
                                        <div class="b-card-58">
                                            <div class="b_thumb ht-ratio--135">
                                                <img src="images/sanpham/<?php echo $i ?>.jpg" alt="" class="ht-ratio__img" />
                                            <div class="b_divider"><span>50% OFF</span></div>
                                            </div>
                                            <div class="b_content">
                                                <div class="b_source">Mã sản phẩm: A4-04
                                                </div>
                                                <h3 class="b_title">Trang sức phật giáo</h3>
                                                <div class="b_price">
                                                    <span class="discount">800.000<sup>đ</sup></span>
                                                    <span class="market">2.000.000<sup>đ</sup></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="s-product-new ht-mrb30">
                        <div class="row row-flex headline">
                            <div class="col-6">
                                <div class="c-headline-12 h2 ">
                                    <h2 class="c_name"><a href="">Sản phẩm mới</a></h2>
                                </div>
                            </div>
                            <div class="col-6 more">
                                <a href="" title=""><em>Xem thêm</em></a>
                            </div>
                        </div>

                        <div class="row row-flex">
                            <?php for ( $i =26; $i <= 34; $i++) { ?>
                                <div class="col-md-4 col-6">
                                    <a href="san-pham-chi-tiet.php" title="">
                                        <div class="b-card-58">
                                            <div class="b_thumb ht-ratio--135">
                                                <img src="images/sanpham/<?php echo $i ?>.jpg" alt="" class="ht-ratio__img" />
                                            </div>
                                            <div class="b_content">
                                                <div class="b_source">Mã sản phẩm: B5-05
                                                </div>
                                                <h3 class="b_title">Vật phẩm phong thủy</h3>
                                                <div class="b_price">
                                                    <span class="discount">800.000<sup>đ</sup></span>
                                                    <span class="market">2.000.000<sup>đ</sup></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="s-advise ht-mrb30">
        <div class="container">
            <div class="c-headline-12 h2 ">
                <h2 class="c_name"><a href="">Tư vấn nổi bật</a></h2>
            </div>
            <div class="row row-flex">
                <div class="col-md-5 col-12">
                    <a class="b-card-41 ">
                        <div class="b_thumb ht-ratio--120">
                            <img src="images/sanpham/18.jpg" alt="" class="ht-ratio__img" />
                        </div>
                        <div class="b_content">
                            <h3 class="b_title">Kinh Mi Tiên: "Tại sao nhập Niết bàn lại có hiện tượng phi thường?"</h3>
                            <ul class="b_source">
                                <li><span class="fa fa-clock-o">02/02/2022</span></li>
                            </ul>
                            <h4 class="b_desc">Kinh Mi Tiên Vấn đáp: "Tại sao nhập Niết bàn lại có hiện tượng phi thường?" - ĐĐ Thích Trúc Thái Minh.</h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-7 col-12" style="position: sticky; top: 0;">
                    <div class="row row-flex">
                        <?php for ( $i = 30; $i <= 35; $i++) { ?>
                        <div class="col-lg-4 col-6">
                            <a class="b-card-41 ">
                                <div class="b_thumb ht-ratio--135">
                                    <img src="images/sanpham/<?php echo $i ?>.jpg" alt="" class="ht-ratio__img" />
                                </div>
                                <div class="b_content">
                                    <h3 class="b_title">Kinh Mi Tiên: "Tại sao nhập Niết bàn lại có hiện tượng phi thường?"</h3>
                                    <ul class="b_source">
                                        <li><span class="fa fa-clock-o">02/02/2022</span></li>
                                    </ul>
                                    <h4 class="b_desc">Kinh Mi Tiên Vấn đáp: "Tại sao nhập Niết bàn lại có hiện tượng phi thường?" - ĐĐ Thích Trúc Thái Minh.</h4>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="s-why ht-mrb30">
        <div class="container">
            <div class="c-headline-14 h2 text-center">
                <h2 class="c_name">Tại sao chọn chúng tôi</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="b-card-37">
                        <div class="b_icon">
                            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                        </div>
                        <h3 class="b_title">Uy tín chất lượng</h3>
                        <div class="b_desc">Cam kết nguồn gốc sản phẩm đảm bảo chất lượng hàng đầu trên thị trường</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="b-card-37">
                        <div class="b_icon">
                            <i class="fa fa-plane" aria-hidden="true"></i>
                        </div>
                        <h3 class="b_title">Vận chuyển toàn quốc</h3>
                        <div class="b_desc">Chúng tôi nhận giao hàng trên toàn quốc nhanh chóng và an toàn</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="b-card-37">
                        <div class="b_icon">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </div>
                        <h3 class="b_title">Bảo mật thông tin</h3>
                        <div class="b_desc">Bảo mật thông tin khách hàng khi thanh toán online</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->

    <!-- BEGIN FOOTER -->
	<?php include('footer.php'); ?>
    <!-- END FOOTER -->
    <script src="js/home.js"></script>
</body>
</html>