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
                    <h2 class="c_name">Trang tư vấn</h2>
                    <div class="c_divider"><img src="images/icon.png"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="s-advise ht-mrt30">
        <div class="container">
            <div class="row row-flex">
                <?php for ( $i = 1; $i <= 12; $i++) { ?>
                <div class="col-md-4 col-12">
                    <a class="b-card-41 " href="tu-van-chi-tiet.php">
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
            <ul class="s-pagination-1 text-center">
                <li><a href="javascript:;">«</a></li>
                <li><a href="javascript:;">1</a></li>
                <li><a href="javascript:;">2</a></li>
                <li class="active"><a href="javascript:;">3</a></li>
                <li><a href="javascript:;">4</a></li>
                <li><a href="javascript:;">5</a></li>
                <li><a href="javascript:;">»</a></li>
            </ul>
        </div>
    </div>
    <!-- END CONTENT -->

    <!-- BEGIN FOOTER -->
    <?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>