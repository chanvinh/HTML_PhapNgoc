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
    <style type="text/css">
        .s-job .s-content {
            box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
            background-color: rgb(24 102 52 / .02);
            padding: 10px;
            margin-bottom: 30px;
        }
        .s-job .s-content h3 {
            font-weight: 600;
            color: #186634;
        }
        .s-job .s-content span i {
            color: #E5262B;
        }
    </style>
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
                    <h2 class="c_name">tuyển dụng</h2>
                    <div class="c_divider"><img src="images/icon.png"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="s-job">
        <div class="container">
            <div class="c-headline-5">
                <span>celadon</span>
                <span class="c-color">city</span>
            </div>
            <div class="row row-flex">
                <?php for ( $i =1; $i <=12; $i++) { ?>
                    <div class="col-12 col-md-6">
                        <div class="s-content">
                            <a href="tuyen-dung-chi-tiet.php" class="display-block">
                                <div class="row align-items--center">
                                   <div class="col-lg-7 col-6">
                                       <h3>Nhân viên bán nhang</h3>
                                   </div>
                                   <div class="col-lg-3 col-3">
                                       <span><i class="fa fa-map-marker" aria-hidden="true"></i> Hồ Chí Minh</span>
                                   </div>
                                   <div class="col-lg-2 col-3">
                                       <span><i class="fa fa-usd" aria-hidden="true"></i> 10 Triệu</span>
                                   </div>
                               </div>
                            </a>

                        </div>

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