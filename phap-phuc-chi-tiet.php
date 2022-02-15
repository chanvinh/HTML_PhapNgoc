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
    <script src="js/hitech/HTValidate.js" type="text/javascript"></script>

    <?php // Thư viện chỉ dùng cho trang này -- KHÔNG ĐƯỢC SỬA ?>
    <link rel="stylesheet" href="js/vendor/slick/slick.css">
    <script type="text/javascript" src="js/vendor/slick/slick.js"></script>
    <script type="text/javascript" src="js/hitech/HTValidate.js"></script>

    <?php // CSS & JS dùng chung toàn website ?>
    <link href="css/style.css" rel="stylesheet" />
    <script src="js/style.js" type="text/javascript"></script>

    <?php // CSS, JS chỉ dùng cho trang này ?>
    <link rel="stylesheet" type="text/css" href="css/bo-loc.css">
    <link href="css/phap-phuc-chi-tiet.css" rel="stylesheet" />
    <script src="js/phap-phuc-chi-tiet.js" type="text/javascript"></script>
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
                    <h2 class="c_name">Chi tiết pháp phục</h2>
                    <div class="c_divider"><img src="images/icon.png"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-detail-2">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="b-sslide-default p_thumb">
                        <div class="slick-slider slider-for">
                        <?php for ($i = 9; $i <= 20; $i++){ ?> <!--492x738-->
                        <img src="images/sanpham/<?php echo $i ?>.jpg" alt="" />
                        <?php } ?>

                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="p_content">
                        <h2 class="title">Pháp phục nữ màu vàng đất form ôm</h2>
                        <div class="price">
                            <span class="width">Giá bán:</span><span class="discount">1.000.000<sup>đ</sup></span><span class="market">3.000.000<sup>đ</sup></span>
                        </div>
                        <ul class="info">
                            <li><span class="width">Mã sản phẩm:</span><span>A3-04</span></li>
                            <li><span class="width">Tình trạng:</span><span class="status">Còn hàng</span></li>
                            <li><span class="width">Chất liệu:</span><span>Vải lụa</span></li>
                            <li class="align-items">
                                <span class="width">Màu sắc:</span>
                                <ul class="slider-nav">
                                    <li><div style="background-color: #05a"></div></li>
                                    <li><div style="background-color: #111"></div></li>
                                    <li><div style="background-color: #E71226"></div></li>
                                    <li><div style="background-color: #f60"></div></li>
                                    <li><div style="background-color: #gray"></div></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="size">
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
                        </div>
                        <div id="chooseSize" class="c-modal" ht-close="c-modal"> <!-- Thay đổi tên id -->
                            <div class="c-modal-box">
                                <div class="c-modal-group" ht-skip="parent">
                                    <div class="c_close text--white" ht-close="c-modal"><i class="fa fa-times" aria-hidden="true"></i></div>
                                    <div class="c_header">Hướng dẫn chọn size</div>
                                    <div class="c_body">
                                        <div class="ht-format-detail">
                                            <p>Size S: dưới 50kg, Cao dưới 1m50</p>
                                            <p>Size M: dưới 55kg, Cao dưới 1m60</p>
                                            <p>Size L: từ 56-65kg , Cao 1m61 - 1m70</p>
                                            <p>Size XL: từ 66-75 kg, Cao : 1m71 - 1m80</p>
                                            <p>Size XXL: từ 75-90 kg, Cao : 1m80 trở lên</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Chúng tôi cam kết: </p>
                        <div class="desc ht-format-detail">
                            <p>Xuất xứ: Việt Nam</p>
                            <p>Kích thước: 1.6m</p>
                            <p>Kiểu dáng: sang trọng</p>
                            <p>Đường may kỹ đẹp, trên áo có gắn tem size</p>
                            <p>Nam Nữ đều mặc được</p>
                            <p>Hàng lấy tận xưởng, không trung gian</p>
                        </div>
                        <div class="button">
                            <a href="gio-hang.php" class="c-button-8"><span>ThÊM VÀO GIỎ HÀNG</span></a>
                            <a href="javascript:;" class="c-button-8" ht-trigger="c-modal" ht-target="#s-form-3"><span>ĐẶT HÀNG NHANH</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p_detail">
                <div class="c-headline-2 h2"><div class="c_name c_divider">Chi tiết sản phẩm</div></div>
                <div class="ht-format-detail">
                    <p>Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp.</p>
                    <p style="text-align:center"><img src="images/product/product-5.png" alt="" /></p>
                    <p>Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp.</p>
                    <p>Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp. Thông tin chi tiết sản phẩm của doanh nghiệp.</p>
                </div>
            </div>
            <div class="p_social">
                <a href="" class="c-icon-bg--fb"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="" class="c-icon-img c-icon-bg--zalo" style="background-image: url('images/icons/zalo-w.png');"></a>
            </div>
            <div class="p_other">
                <div class="s-product-highlight ht-mrb30">
                    <div class="c-headline-14 h2 text-center">
                        <h2 class="c_name">Sản phẩm tương tự</h2>
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
            </div>
        </div>
    </div>

    <div id="s-form-3" class="c-modal s-form-3">
        <div class="c-modal-box">
            <div class="c-modal-group" ht-skip="parent">
                <div class="c_close text--white" ht-close="c-modal"><i class="fa fa-times" aria-hidden="true"></i></div>
                <div class="c_header">Đặt hàng nhanh</div>
                <div class="c_body">
                    <form id="form_s-form-3" action="" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                        <input type="hidden" name="product_meta" value="">
                        <input type="hidden" name="total_price" value="">
                        <input type="hidden" name="sum_price" value="10000000">
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
                                        <td class="td-image"><img src="images/sanpham/10.jpg" alt=""></td>
                                        <td class="td-name text-left"><strong>Bộ pháp phục nam vải lụa</strong></td>
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
                                <h2 class="c_name"><span>Thông tin đặt hàng</span></h2>
                            </div>
                            <div class="form-group c-form c-form--icon">
                                <span class="c_icon"><i class="fa fa-user text--icon" aria-hidden="true"></i></span>
                                <input type="text" name="fullname" value="" class="c_input" placeholder="Họ và tên (*)" />
                            </div>
                            <div class="form-group c-form c-form--icon">
                                <span class="c_icon"><i class="fa fa-phone-square text--icon" aria-hidden="true"></i></span>
                                <input type="text" name="phone" value="" class="c_input" placeholder="Điện thoại (*)" />
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group c-form c-form--icon">
                                        <span class="c_icon"><i class="fa fa-map-marker text--icon" aria-hidden="true"></i></span>
                                        <input type="text" name="address" value="" class="c_input" placeholder="Địa chỉ" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group c-form c-form-ship c-form--icon" style="display: flex;">
                                    <span class="c_icon"><i class="fa fa-map-marker text--icon" aria-hidden="true"></i></span>&nbsp;
                                    <div class="c-select c-form-border" >
                                        <div class="c_input text--icon" data-ht-trigger="c-select">Chọn Tỉnh / Thành Phố</div>
                                        <span class="c-icons"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        <div class="c_list">
                                            <?php $location = [
                                                [name=>'Sài Gòn - 20k'],
                                                [name=>'Hà Nội - 30k'],
                                                [name=>'Đà Nẵng - 40k'],
                                                [name=>'Nha Trang - 50k'],
                                                [name=>'Huế - 60k'],
                                            ] ?>
                                            <?php $tien = array ("", "20000", "30000", "400000", "50000", "60000") ?>
                                            <?php for ($i = 1; $i <= 5; $i++){ ?>
                                                <div class="c-radio">
                                                    <label><input type="radio" name="district" value="<?php echo $tien[$i] ?>"><span><?php echo $location[$i-1]['name'] ?></span></label>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="form-group c-form c-form--icon">
                                <span class="c_icon"><i class="fa fa-envelope text--icon" aria-hidden="true"></i></span>
                                <input type="text" name="email" value="" class="c_input" placeholder="Email (*)" />
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
    <style type="text/css">
        .c-select>.c_input {
            padding-left: 0;
        }
        .c-form-border:hover {
            box-shadow: none;
        }
        .c-form-border {
            border: none;
            background-color: transparent;
            width: 680px;
        }
    </style>
</body>
</html>