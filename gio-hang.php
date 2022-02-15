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
    <script src="js/hitech/HTValidate.js" type="text/javascript"></script>

    <?php // CSS & JS dùng chung toàn website ?>
    <link href="css/style.css" rel="stylesheet" />
    <script src="js/style.js" type="text/javascript"></script>

    <?php // CSS, JS chỉ dùng cho trang này ?>

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
                    <h2 class="c_name">Giỏ hàng của bạn</h2>
                    <div class="c_divider"><img src="images/icon.png"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="s-cart-1 ht-mrt30 ht-mrb30" style="position: relative;">
        <div class="container">
            <table class="s_table">
                <tbody>
                    <tr>
                        <td class="td-image"><b>Ảnh</b></td>
                        <td class="td-name text-left"><b>Thông tin sản phẩm</b></td>
                        <td class="td-price"><b>Giá</b></td>
                        <td class="td-quantity"><b>Số lượng</b></td>
                        <td class="td-sum"><b>Thành tiền</b></td>
                        <td class="td-remove"></td>
                    </tr>

                    <tr>
                        <td class="td-image"><img src="images/cards/card-11.jpg" alt=""></td>
                        <td class="td-name text-left"><strong><a href="">Tên sản phẩm</a></strong></td>
                        <td class="td-price"><span>10.000.000</span><sup>đ</sup></td>
                        <td class="td-quantity">
                            <span ht-trigger="s-cart" ht-type="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
                            <input ht-trigger="s-cart" ht-type="blur" type="text" name="quantity" value="1" />
                            <span ht-trigger="s-cart" ht-type="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
                        </td>
                        <td class="td-sum"><span>10.000.000</span><sup>đ</sup></td>
                        <td class="td-remove"><i ht-trigger="s-cart" ht-type="delete" class="fa fa-times-circle-o" aria-hidden="true"></i></td>
                    </tr>

                    <tr>
                        <td class="td-image"><img src="images/cards/card-11.jpg" alt=""></td>
                        <td class="td-name text-left"><strong><a href="">Tên sản phẩm</a></strong></td>
                        <td class="td-price"><span>10.000.000</span><sup>đ</sup></td>
                        <td class="td-quantity">
                            <span ht-trigger="s-cart" ht-type="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
                            <input ht-trigger="s-cart" ht-type="blur" type="text" name="quantity" value="1" />
                            <span ht-trigger="s-cart" ht-type="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
                        </td>
                        <td class="td-sum"><span>10.000.000</span><sup>đ</sup></td>
                        <td class="td-remove">
                            <a href="javascript:;" class="text--secondary" ht-trigger="s-cart" ht-type="delete"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td class="td-image"></td>
                        <td class="td-name"></td>
                        <td class="td-price"></td>
                        <td class="td-sum">Tổng cộng</td>
                        <td class="td-total"><strong><span>20.000.000</span><sup>đ</sup></strong></td>
                    </tr>
                </tbody>
            </table>
            <div class="s_footer clearfix">
                <a href="phap-phuc.php" class="c-button-8 c-btn--sm pull-left">Tiếp tục mua hàng</a>
                <a href="dat-hang.php" class="c-button-8 c-btn--sm pull-right" style="background-color: #8A0000">Đặt hàng</a>
            </div>
        </div>
    </div>
    <style type="text/css" media="screen">
        /* Style chung S-CART */
        [class*="s-cart-"] .s_table {
            font-size: 14px;
            width: 100%;
            border-spacing: 0;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        [class*="s-cart-"] .s_table tr td {
            border-bottom: 1px solid #ccc;
            padding: 0.5em 0.215em 0.5em 0.215em;
        }
        [class*="s-cart-"] .s_table tr td:first-child {
            padding-left: 0;
        }
        [class*="s-cart-"] .s_table tr td:last-child {
            padding-right: 0;
        }
        [class*="s-cart-"] .s_table tr:last-child td {
            border: none;
        }

        /* BEGIN s-cart-1 */
        .s-cart-1 table {
            text-align: center;
        }
        .s-cart-1 .td-image {
            width: 60px;
            line-height: 0;
        }
        .s-cart-1 .td-quantity {
            width: 85px;
            font-size: 12px;
        }
        .s-cart-1 .td-quantity span {
            display: block;
            color: #fff;
            cursor: pointer;
            min-width: 1.667em;
            width: 1.667em;
            height: 1.667em;
            line-height: 1.667em;
            margin: 0 auto;
            text-align: center;
            background-color: #8A0000;
        }
        .s-cart-1 .td-quantity input {
            display: block;
            text-align: center;
            border: 1px solid #8A0000;
            margin: 0 auto;
            font-weight: bold;
            min-width: 1.667em;
            width: 1.667em;
            height: 1.667em;
        }
        .s-cart-1 .td-quantity input:focus {
            outline: none;
        }
        .s-cart-1 .td-price, .s-cart-1 .td-sum, .s-cart-1 .td-total {
            width: 100px;
        }
        .s-cart-1 .td-remove {
            width: 20px;
        }
        .s-cart-1 .td-remove i {
            width: auto !important;
            cursor: pointer;
            color: #f60;
        }
        @media (max-width: 575px) {
            .s-cart-1 {
                font-size: 90%;
            }
            .s-cart-1 .td-image {
                display: none;
            }
            .s-cart-1 .td-name {
                width: 100%;
            }
        }
        /* END s-cart-1 */
    </style>
    <script>
        /* BEGIN s-cart-1 */
        $(document).ready(function() {
            textWidth($('.s-cart-1 input[name="quantity"]').parent());
            $('.s-cart-1 [ht-trigger="s-cart"]').on('click keyup blur', function(event) {
                var quantity = $(this).parent().find('input').val(),
                    price = _HTHelper.number($(this).closest('tr').find('.td-price span').text()),
                    sum = _HTHelper.number($(this).closest('tr').find('.td-sum span').text()),
                    total = _HTHelper.number($(this).closest('table').find('.td-total span').text()),
                    type = (event.type != 'keyup') ? $(this).attr('ht-type') : null;
                textWidth($(this).parent());
                if (type) {
                    switch(type) {
                        case 'blur': if (quantity.match(/^[1-9][0-9]*$/) == null) { quantity = 1; } break;
                        case 'plus': quantity++; break;
                        case 'minus': if (quantity > 1) { quantity--; } break;
                        case 'delete':
                            total = total - sum;
                            var num = $('[ht-cart="bage"]').text() - 1;
                            if (num === 0) { $('.s-cart-1 .s_footer a:nth-child(2)').addClass('hidden'); }
                            $(this).closest('tr').hide(700);
                            $('[ht-cart="bage"]').text(num);
                        break;
                    }
                    if (quantity !== undefined) {
                        total = total - sum;
                        sum = price * quantity;
                        total = total + sum;
                    }
                    // Xuất dữ liệu ra màng hình
                    $(this).parent().find('input').val(quantity);
                    $(this).closest('tr').find('.td-sum span').text(_HTHelper.money(sum));
                    $(this).closest('table').find('.td-total span').text(_HTHelper.money(total));
                    textWidth($(this).parent());
                }
            });

            function textWidth(node) { // Thiết lập lại width cho input[name="quantity"]
                node.each(function(index, el) {
                    var span = document.createElement('span');
                    span.appendChild(document.createTextNode($(el).find('input').val()));
                    span.style.position = "fixed";
                    span.style['z-index'] = "-1";
                    document.body.appendChild(span);
                    $(el).children().css('width', (span.offsetWidth + 2));
                    span.remove();
                });
            }
        });
        /* END s-cart-1 */
    </script>
    <!-- END CONTENT -->

    <!-- BEGIN FOOTER -->
	<?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>