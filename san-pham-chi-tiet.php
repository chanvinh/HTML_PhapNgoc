<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Title</title>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">

    <?php // Thư viện dùng chung toàn website -- KHÔNG ĐƯỢC SỬA ?>
    <link href="css/vendor/normalize.css" rel="stylesheet" />
    <link href="css/vendor/font-awesome.css" rel="stylesheet" />
    <link href="css/hitech/ht-base.css" rel="stylesheet" />
    <script src="js/vendor/jquery-3.3.1.js" type="text/javascript"></script>
    <script src="js/hitech/ht-base.js" type="text/javascript"></script>

    <?php // Thư viện chỉ dùng cho trang này -- KHÔNG ĐƯỢC SỬA ?>
    <script src="js/hitech/HTSlide.js"></script>
    <link rel="stylesheet" type="text/css" href="js/vendor/slick/slick.css">
    <script src="js/vendor/slick/slick.js"></script>
    <script src="js/hitech/HTValidate.js"></script>

    <?php // CSS & JS dùng chung toàn website ?>
    <link href="css/style.css" rel="stylesheet" />
    <script src="js/style.js" type="text/javascript"></script>

    <?php // CSS, JS chỉ dùng cho trang này ?>
    <link rel="stylesheet" type="text/css" href="css/san-pham-chi-tiet.css">
    <script src="js/san-pham-chi-tiet.js"></script>
</head>
<body>
    <!-- BEGIN HEADER -->
	<?php include('header.php'); ?>
    <!-- END HEADER -->

    <!-- BEGIN CONTENT -->
    <div class="s_title">
        <div class="p_header">
            <div class="container">
                <div class="c-headline-2 h2">
                    <h2 class="c_name">Chi tiết sản phẩm</h2>
                    <div class="c_divider"><img src="images/icon.png"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="s-main">
        <div class="container-fluid">
            <div class="row row-flex">
                <div class="col-sm-9 col-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="b-slide-1">
                                <div class="b_thumb ht-ratio--100">
                                    <span class="ht-ratio__img"><img src="images/sanpham/9.jpg" alt=""></span>
                                    <div class="b_discount">50% OFF%</div>
                                </div>
                                <div class="b_nav">
                                    <ul>
                                        <?php for ( $i =9; $i <= 20; $i++) { ?>
                                        <li><a href="javascript:;" data-image="images/sanpham/<?php echo $i ?>.jpg"><img src="images/sanpham/<?php echo $i ?>.jpg" alt="" /></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p_content">
                                <h1 class="title">Pháp phục nữ màu tối</h1>
                                <div class="price">
                                    <span class="discount">10.000.000<sup>đ</sup></span>
                                    <span class="market">20.000.000<sup>đ</sup></span>
                                </div>
                                <ul class="info">
                                    <li class="ht-hover"><span>Thương hiệu:</span class="text-bold">Pháp Ngọc</li>
                                    <li><span>Mã sản phẩm:</span><span>12H4-A2</span></li>
                                    <li><span>Xuất xứ:</span><span>Việt Nam</span></li>
                                    <li><span>Sơ lược về sản phẩm:</span><span>Nội dung bài viết doanh nghiệp. Nội dung bài viết doanh nghiệp. Nội dung bài viết doanh nghiệp. Nội dung bài viết doanh nghiệp. Nội dung bài viết doanh nghiệp. Nội dung bài viết doanh nghiệp. Nội dung bài viết doanh nghiệp. Nội dung bài viết doanh nghiệp. </span></li>
                                    <!-- <li class="align-items">
                                        <span class="width">Màu sắc:</span>
                                        <ul class="slider-nav">
                                            <li><div style="background-color: red">&nbsp;</div></li>
                                            <li><div style="background-color: violet">&nbsp;</div></li>
                                            <li><div style="background-color: black">&nbsp;</div></li>
                                            <li><div style="background-color: gray">&nbsp;</div></li>
                                            <li><div style="background-color: pink">&nbsp;</div></li>
                                        </ul>
                                    </li> -->
                                    <!-- <div class="size">
                                        <span>Chọn size: </span>
                                        <ul>
                                            <li class="is-select">S</li>
                                            <li>M</li>
                                            <li>L</li>
                                            <li>XL</li>
                                            <li>XXL</li>
                                            <li>XXXL</li>
                                        </ul>
                                        <a href="javascript:;" ht-trigger="c-modal" ht-target="#chooseSize">Hướng dẫn chọn size</a>
                                    </div> -->
                                    <!-- <li class="quality align-items row-flex">
                                        <span>Số lượng:</span>
                                        <div class="clearfix">
                                            <span ht-trigger="s-cart" ht-type="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                            <input ht-trigger="s-cart" ht-type="blur" type="text" name="quantity" value="1">
                                            <span ht-trigger="s-cart" ht-type="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        </div>
                                        <a href="gio-hang.php" class="c-btn c-btn--primary">Thêm vào giỏ</a>
                                    </li> -->
                                </ul>
                                <a href="gio-hang.php" class="c-button-8">Thêm vào giỏ hàng</a>
                                <a href="javascript:;" class="c-button-8" ht-trigger="c-modal" ht-target="#s-form-3">Đặt hàng nhanh</a>
                                <!-- <div class="desc">
                                    <b>Thông tin sơ lược:</b>
                                Mô tả tóm tắt sản phẩm của doanh nghiệp. Mô tả tóm tắt sản phẩm của doanh nghiệp. Mô tả tóm tắt sản phẩm của doanh nghiệp. Mô tả tóm tắt sản phẩm của doanh nghiệp. Mô tả tóm tắt sản phẩm của doanh nghiệp.</div> -->
                                <!-- <div class="social align-items">
                                    <a href="" rel="nofollow" class="align-items"><span class="c-icon--fb"><i class="fa fa-facebook" aria-hidden="true"></i></span>Facebook</a>
                                    <a href="" rel="nofollow" class="align-items"><span class="c-icon-img" style="background-image: url('images/icons/zalo-b.png');"></span>Zalo</a>
                                </div> -->
                                <div class="gift">
                                    <label>Ưu đãi trong tuần này:</label>
                                    <ul>
                                        <li>Giảm 50% cho khách hàng mua lần đầu</li>
                                        <li>Hỗ trợ giao hàng trong toàn thành phố</li>
                                        <li>Giá ưu đãi cực cao cho khách mua sỉ</li>
                                        <li>Đổi trả trong vòng 3 ngày nếu sản phẩm lỗi kỹ thuật</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-12">
                    <div class="s-other">
                        <div class="c-headline-12 h2 ">
                            <h2 class="c_name"><a>Sản phẩm tương tự</a></h2>
                        </div>
                        <div class="s-home-2-1">
                            <div class="b-sslide-default">
                                <div class="slick-slider">
                                    <?php for ( $i = 1; $i <= 12; $i++) { ?>
                                    <div class="item">
                                        <div class="b-card-58">
                                            <a href="">
                                                <div class="b_thumb ht-ratio--135">
                                                    <img src="images/sanpham/<?php echo $i ?>.jpg" alt="" class="ht-ratio__img" />
                                                </div>
                                            </a>
                                            <div class="b_content">
                                                <div class="b_source">
                                                    <a href="">Mã sản phẩm: A2-03</a>
                                                </div>
                                                <a href="">
                                                    <h3 class="b_title">Pháp phục</h3>
                                                </a>
                                                <div class="b_price">
                                                    <span class="discount">800.000<sup>đ</sup></span>
                                                    <span class="market">2.000.000<sup>đ</sup></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <fieldset>
                <legend>Chi tiết sản phẩm</legend>
                <p>Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp.</p>
                <p>Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp.</p>
                <p class="text-center"><img src="images/sanpham/10.jpg" alt=""></p>
                <p>Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp.</p>
                <p>Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp.</p>
                <p class="text-center"><img src="images/sanpham/16.jpg" alt=""></p>
                 <p>Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp.</p>
            </fieldset>
        </div>
    </div>
    <div id="s-form-3" class="c-modal s-form-3">
    <div class="c-modal-box">
        <div class="c-modal-group" ht-skip="parent">
            <div class="c_close text--white" ht-close="c-modal"><i class="fa fa-times" aria-hidden="true"></i></div>
            <div class="c_header">Đặt hàng nhanh</div>
            <div class="c_body">
                <form id="form_dathangnhanh" action="" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                    <input type="hidden" name="product_meta" value="">
                    <input type="hidden" name="total_price" value="">
                    <div class="s-cart-1">
                        <table class="s_table">
                            <tbody>
                                <tr>
                                    <td class="td-image"><b>Ảnh</b></td>
                                    <td class="td-name text-left"><b>Thông tin sản phẩm</b></td>
                                    <td class="td-price"><b>Giá</b></td>
                                    <td class="td-quantity"><b>Số lượng</b></td>
                                    <td class="td-sum"><b>Thành tiền</b></td>
                                </tr>
                                <tr>
                                    <td class="td-image"><img src="images/cards/card-6.jpg" alt=""></td>
                                    <td class="td-name text-left"><strong>Tên sản phẩm</strong></td>
                                    <td class="td-price"><span>10.000.000</span><sup>đ</sup></td>
                                    <td class="td-quantity">
                                        <span ht-trigger="s-cart" ht-type="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <input ht-trigger="s-cart" ht-type="blur" type="text" name="quantity" value="1" />
                                        <span ht-trigger="s-cart" ht-type="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </td>
                                    <td class="td-sum"><strong><span>10.000.000</span><sup>đ</sup></strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="s-form__info">
                        <div class="c-headline-3 h2">
                            <h2 class="c_name"><i class="fa fa-info-circle" aria-hidden="true"></i><span>Thông tin đặt hàng</span></h2>
                        </div>
                        <div class="form-group c-form c-form--icon">
                            <span class="c_icon"><i class="fa fa-user text--icon" aria-hidden="true"></i></span>
                            <input type="text" name="fullname" value="" class="c_input" placeholder="Họ và tên (*)" />
                        </div>
                        <div class="form-group c-form c-form--icon">
                            <span class="c_icon"><i class="fa fa-phone-square text--icon" aria-hidden="true"></i></span>
                            <input type="text" name="phone" value="" class="c_input" placeholder="Điện thoại (*)" />
                        </div>
                        <div class="form-group c-form c-form--icon">
                            <span class="c_icon"><i class="fa fa-envelope text--icon" aria-hidden="true"></i></span>
                            <input type="text" name="email" value="" class="c_input" placeholder="Email (*)" />
                        </div>
                        <div class="form-group c-form c-form--icon">
                            <span class="c_icon"><i class="fa fa-map-marker text--icon" aria-hidden="true"></i></span>
                            <input type="text" name="address" value="" class="c_input" placeholder="Địa chỉ" />
                        </div>
                        <div class="form-group c-form c-form--icon">
                            <span class="c_icon"><i class="fa fa-info-circle text--icon" aria-hidden="true"></i></span>
                            <textarea name="comment" class="c_input" rows="2" placeholder="Ghi chú"></textarea>
                        </div>
                        <div class="form-group text-center"><button class="c-button-8 c-btn--sm">Đặt hàng</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <!-- END CONTENT -->

    <!-- BEGIN FOOTER -->
	<?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>