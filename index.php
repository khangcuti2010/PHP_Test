<?php
session_start();
ob_start();
include("control/product-control.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="home.css" />
    <link rel="stylesheet" href="voucher.css" />
    <link rel="stylesheet" href="sp.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="news-event.css" />
    <link rel="stylesheet" href="footer.css" />
    <script src="https://kit.fontawesome.com/322fbc2575.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
if (isset($_SESSION['flash_message'])) {
    $flashMessage = $_SESSION['flash_message'];
    echo '<div class="flash-message">' . $flashMessage . '</div>';
    unset($_SESSION['flash_message']);
}
?>
<div class="HOME">
    <div class="overlap-group">
        <div class="overlap">
            <div class="vector-wrapper"><img class="vector" src="image/icon/Vector.png" /></div>
            <div class="text-wrapper"><input type="text" placeholder="Tìm kiếm sản phẩm "></div>
        </div>
        <img class="img" src="image/Vector.png" />
        <div class="div">Đảm Bảo Chất Lượng</div>
        <div class="text-wrapper-2">Miễn Phí Vận Chuyển</div>
        <div class="check">Mở Hàng Kiểm Tra Khi Nhận</div>
        <img class="vector-2" src="image/icon/quality.png" />
        <img class="vector-3" src="image/icon/delivery.png" />
        <img class="vector-4" src="image/icon/check.png" />
        <div class="overlap-2">
            <img class="vector-5" src="image/icon/cart.png" /> <img class="vector-6" src="image/icon/cart-qty.png" />
        </div>
        <img class="vector-7" src="image/icon/Vector1.png" />
        <img class="vector-8" src="image/icon/user.png" />
    </div>
    <div class="overlap-3">
        <div class>
        <div class="rectangle"></div>
        <div class="text-wrapper-3">TRANG CHỦ</div>
        <div class="text-wrapper-4">GIỚI THIỆU</div>
        <div class="text-wrapper-5">BLOG</div>
        <div class="text-wrapper-6">LIÊN HỆ</div>
        <div class="text-wrapper-7">DEAL THƠM</div>
        <img class="vector-9" src="img/vector-7.svg" />
        <img class="vector-10" src="img/vector-8.svg" />
        <img class="vector-11" src="img/vector-4.svg" />
        <img class="vector-12" src="img/image.svg" />
        <img class="vector-13" src="img/vector-9.svg" />
    </div>
    </div>
    <img class="slide" src="image/slide.png" />
</div>
<div class="VOUCHER">
    <div class="overlap">
        <div class="text-wrapper">Miễn Phí Vận Chuyển</div>
        <div class="div">Đơn hàng từ 300k</div>
        <p class="p">
            <span class="span">Mã: </span>
            <span class="text-wrapper-2">NUOCHOAGIFT<br /></span>
            <span class="span">HSD:</span>
            <span class="text-wrapper-2"> 07/06/2023</span>
        </p>
        <img class="vector" src="image/icon/i-icon.png" />
        <div class="overlap-group"><div class="text-wrapper-3">SAO CHÉP MÃ</div></div>
    </div>
    <div class="overlap-2">
        <div class="text-wrapper">Giảm 10% Tổng Bill</div>
        <div class="div">Đơn hàng từ 699k</div>
        <p class="p">
            <span class="span">Mã: </span>
            <span class="text-wrapper-2">NUOCHOAGIFT699<br /></span>
            <span class="span">HSD:</span>
            <span class="text-wrapper-2"> 07/06/2023</span>
        </p>
        <img class="vector" src="image/icon/i-icon.png" />
        <div class="overlap-group"><div class="text-wrapper-3">SAO CHÉP MÃ</div></div>
    </div>
    <div class="overlap-3">
        <div class="text-wrapper">Giảm 20% Tổng Bill</div>
        <div class="div">Đơn hàng từ 999k</div>
        <p class="p">
            <span class="span">Mã: </span>
            <span class="text-wrapper-2">NUOCHOAGIFT999<br /></span>
            <span class="span">HSD:</span>
            <span class="text-wrapper-2"> 07/06/2023</span>
        </p>
        <img class="vector" src="image/icon/i-icon.png" />
        <div class="overlap-group"><div class="text-wrapper-3">SAO CHÉP MÃ</div></div>
    </div>
    <div class="overlap-5">
        <div class="text-wrapper">Giảm 20%</div>
        <div class="div">Đơn hàng từ 200k</div>
        <p class="p">
            <span class="span">Mã: </span>
            <span class="text-wrapper-2">NUOCHOAGIFT20k<br /></span>
            <span class="span">HSD:</span>
            <span class="text-wrapper-2"> 07/06/2023</span>
        </p>
        <img class="vector" src="image/icon/i-icon.png" />
        <div class="overlap-group"><div class="text-wrapper-3">SAO CHÉP MÃ</div></div>
    </div>
    <div class="overlap-4">
        <div class="text-wrapper-4">Giảm 50k</div>
        <div class="text-wrapper-5">Đơn hàng từ 500k</div>
        <p class="m-HSD">
            <span class="span">Mã: </span>
            <span class="text-wrapper-2">NUOCHOAGIFT50k<br /></span>
            <span class="span">HSD:</span>
            <span class="text-wrapper-2"> 07/06/2023</span>
        </p>
        <img class="img" src="image/icon/i-icon.png" />
        <div class="div-wrapper"><div class="text-wrapper-3">SAO CHÉP MÃ</div></div>
    </div>
    <div class="text-wrapper-6">Voucher Khuyến Mãi</div>
    <img class="vector-2" src="image/icon/star.png" />
    <img class="vector-3" src="image/icon/star.png" />
</div>
<section>
    <div class="text-wrapper">
        <img src="image/icon/star.png">
        Top Sản Phẩm
        <img src="image/icon/star.png">
        <a href="index.php?page=product&action=insert">
            Thêm Sản Phẩm<i class="fa-light fa-square-plus"></i>
        </a>

    </div>
    <div class="sp">
    <div style="position: static" id="myCarousel-2" class="myCarousel carousel slide">
        <div class="carousel-inner">
            <div class="item active">
                <ul style="display: flex; flex-wrap: wrap;" class="thumbnails">
                    <?php
                    foreach ($list as $value){ ?>
                    <li class="span3">
                        <div class="product-box">
                            <span class="sale_tag"></span>
                            <div class="image-container">
                                <p><a href="">
                                    <img style="width: 270px; height: 384px" src="image/products/<?php echo $value['image'];?>" alt="" /></a>
                                </p>
                            </div>
                            <a href="" class="title">
                                <?php echo $value['name'];?></a><br/>
                            <p class="price"><?php echo $value['price'];?> đồng</p>
                            <a class="btn btn-primary btn-sm"
                               href="index.php?page=product&action=update&id=<?php echo $value['id'];?>">
                                <i class="fas fa-edit" style="color: #344379;"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="index.php?page=product&action=delete&id=<?php echo $value['id'];?>"
                               onClick="return confirm('Bạn có chắc chắn muốn xóa?');">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

</div>
</section>
<section>
    <div class="banner">
    <img class="image" src="image/image1.png" />
    <img class="image" src="image/image2.png" />
    <img class="image" src="image/image3.png" />
</div>
</section>
    <div style="position: relative" class="news-event">
<div class="text-wrapper-news-event">
    <img src="image/icon/star.png">
    Tin Tức Và Sự Kiện
    <img src="image/icon/star.png">
</div>
    <div id="myCarousel-3" class="myCarousel carousel slide">
        <div class="carousel-inner">
            <div class="item active">
                <ul style="display: flex; flex-wrap: wrap; align-content: center" class="thumbnails">
                    <li style="width: 30%" class="span3">
                        <div class="news-box">
                            <span class="sale_tag"></span>
                            <div style="width: 439px; height: 270px" class="image-container">
                                <p><a href="">
                                    <img src="image/news1.png" alt="" /></a>
                                </p>
                            </div>
                            <a href="" class="title">
                                Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả
                            </a><br/>
                            <p class="price">
                                <img class="" src="image/icon/calendar.png" />
                                17/10/2022
                            </p>
                            <p class="content">
                                Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn
                                tra.]
                            </p>
                        </div>
                    </li>
                    <li style="width: 30%" class="span3">
                        <div class="news-box">
                            <span class="sale_tag"></span>
                            <div style="width: 439px; height: 270px" class="image-container">
                                <p><a href="">
                                    <img src="image/news2.png" alt="" /></a>
                                </p>
                            </div>
                            <a href="" class="title">
                                Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả
                            </a><br/>
                            <p class="price">
                                <img class="" src="image/icon/calendar.png" />
                                17/10/2022
                            </p>
                            <p class="content">
                                Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn
                                trang phục [...]
                            </p>
                        </div>
                    </li>
                    <li style="width: 30%" class="span3">
                        <div class="news-box">
                            <span class="sale_tag"></span>
                            <div style="width: 439px; height: 270px" class="image-container">
                                <p><a href="">
                                    <img src="image/news3.png" alt="" /></a>
                                </p>
                            </div>
                            <a href="" class="title">
                                Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả
                            </a><br/>
                            <p class="price">
                                <img class="" src="image/icon/calendar.png" />
                                17/10/2022
                            </p>
                            <p class="content">
                                Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn
                                trang phục [...]
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div style="width: 1920px;height: 36px;top: 0;left: 0;background-color: #f5f5f5;"
         class="box"><div class="rectangle"></div></div>
    <div class="footer">
        <div class="logo">
            <img src="image/Vector.png">
        </div>
        <div class="contact">
            <p class="">
                Lầu 3 Tòa Nhà D-Head, 371 Nguyễn Kiệm, P.3, Gò Vấp, TP.HCM<br />0286 2707 273<br />info@vndts.vn
            </p>
        </div>
        <div class="icon-contact">
            <div style="height: 33px; width: 33px"><img class="icon-image" src="image/icon/house.png"></div>
            <div style="height: 33px; width: 33px"><img class="icon-image" src="image/icon/phone.png"></div>
            <div style="height: 33px; width: 33px"><img class="icon-image" src="image/icon/letter.png"></div>
        </div>
        <div class="policy"><p>Chính Sách</p></div>
        <div class="policy-content">
            <img class="icon-policy" src="image/icon/star.png">Chính sách đặt hàng</br>
            <img class="icon-policy" src="image/icon/star.png">Chính sách bảo mật</br>
            <img class="icon-policy" src="image/icon/star.png">Chính sách thanh toán</br>
            <img class="icon-policy" src="image/icon/star.png">Chính sách hỗ trợ</br>
           <img class="icon-policy" src="image/icon/star.png">Chính sách đổi trả
        </div>
        <div class="payment">Chấp Nhận Thanh Toán</div>
        <img class="credit-card" src="image/credit-card.png">
        <img class="bct" src="image/bct.gif">
        <img class="bct2" src="image/bct2.png">
        <div class="last"><p>Bản quyền © VNDTS - 2023. DEVELOPED BY VIET NAM DTS</p></div>
    </div>
</div>

<!-- <div class="footer">
<div class="logo">
<img src="image/Vector.png">
</div>
</div>
-->
</body>
</html>
</body>
</html>