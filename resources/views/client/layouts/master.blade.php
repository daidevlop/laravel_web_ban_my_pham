@extends('client.layouts.partials.1header')
<main>
    <div id="alert" class="toast-container position-fixed top-0 end-0 p-3"></div>
    <nav id="top">
        <div class="container">
            <div class="nav float-start">
                <ul class="list-inline">
                    <li class="list-inline-item">HOTLINE: <a href="">TRẦN ĐỨC ĐẠI</a> | <a
                            href="tel:0865 160 360">0865 160 360</a></li>
                </ul>
            </div>
            <div class="nav float-end">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <div class="dropdown">
                            <a href class="dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-solid fa-user"></i>
                                <span class="d-none d-md-inline">Tài khoản</span> <i
                                    class="fa-solid fa-caret-down"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="{{route('register')}}"
                                        class="dropdown-item">Đăng ký</a></li>
                                <li><a href="{{route('login')}}" class="dropdown-item">Đăng
                                        nhập</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-inline-item"><a href="https://www.flowercorner.vn?route=checkout/cart"
                            title="Giỏ hàng"><i class="fa-solid fa-bag-shopping"></i> <span
                                class="d-none d-md-inline">Giỏ hàng</span></a></li>
                    <li class="list-inline-item"><a href="https://www.flowercorner.vn?route=checkout/checkout"
                            title="Thanh toán"><i class="fa-solid fa-share"></i> <span class="d-none d-md-inline">Thanh
                                toán</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container stk-menu">
        <nav id="menu" class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#narbar-menu"><i
                    class="fa-solid fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="narbar-menu">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown"><a href="hoa-chuc-mung-sinh-nhat.html"
                            class="nav-link dropdown-toggle">Hoa
                            Sinh Nhật</a>
                        <div class="dropdown-menu">
                            <div class="dropdown-inner">
                                <ul class="list-unstyled">
                                    <li><a href="hoa-sinh-nhat-sang-trong.html" class="nav-link">Hoa Sinh Nhật Sang
                                            Trọng</a></li>
                                    <li><a href="hoa-sinh-nhat-gia-re.html" class="nav-link">Hoa Sinh Nhật Giá Rẻ</a>
                                    </li>
                                    <li><a href="hoa-tang-sinh-nhat-nguoi-yeu.html" class="nav-link">Hoa Tặng Sinh Nhật
                                            Người Yêu</a>
                                    </li>
                                    <li><a href="hoa-tang-sinh-nhat-me.html" class="nav-link">Hoa Tặng Sinh Nhật Mẹ</a>
                                    </li>
                                    <li><a href="hoa-tang-sinh-nhat-ban.html" class="nav-link">Hoa Tặng Sinh Nhật
                                            Bạn</a></li>
                                    <li><a href="lang-hoa-dep-tang-sinh-nhat.html" class="nav-link">Lẵng Hoa Tặng Sinh
                                            Nhật</a></li>
                                    <li><a href="hoa-hong-tang-sinh-nhat.html" class="nav-link">Hoa Hồng Tặng Sinh
                                            Nhật</a></li>
                                    <li><a href="gio-hoa-sinh-nhat.html" class="nav-link">Giỏ hoa sinh nhật</a></li>
                                </ul>
                            </div>
                            <a href="hoa-chuc-mung-sinh-nhat.html" class="see-all">Hiển thị tất cả Hoa Sinh Nhật</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a href="hoa-khai-truong.html" class="nav-link dropdown-toggle">Hoa
                            Khai
                            Trương</a>
                        <div class="dropdown-menu">
                            <div class="dropdown-inner">
                                <ul class="list-unstyled">
                                    <li><a href="lang-hoa-khai-truong-de-ban.html" class="nav-link">Hoa Khai Trương Để
                                            Bàn</a></li>
                                    <li><a href="ke-hoa-khai-truong.html" class="nav-link">Kệ Hoa Khai Trương</a></li>
                                    <li><a href="ke-hoa-khai-truong-hien-dai.html" class="nav-link">Kệ Hoa Khai Trương
                                            Hiện Đại</a></li>
                                    <li><a href="hoa-khai-truong-gia-re.html" class="nav-link">Hoa Khai Trương Giá
                                            Rẻ</a></li>
                                    <li><a href="lang-hoa-2-tang-mung-khai-truong.html" class="nav-link">Lẵng hoa 2 tầng
                                            mừng khai
                                            trương</a></li>
                                </ul>
                            </div>
                            <a href="hoa-khai-truong.html" class="see-all">Hiển thị tất cả Hoa Khai Trương</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a href="hoa-lan-ho-diep.html" class="nav-link dropdown-toggle">LAN HỒ
                            ĐIỆP</a>
                        <div class="dropdown-menu">
                            <div class="dropdown-inner">
                                <ul class="list-unstyled">
                                    <li><a href="hoa-lan-ho-diep-mini.html" class="nav-link">Lan Hồ Điệp Mini</a></li>
                                    <li><a href="hoa-lan-ho-diep-vang.html" class="nav-link">Lan Hồ Điệp Vàng</a></li>
                                    <li><a href="hoa-lan-ho-diep-trang.html" class="nav-link">Lan Hồ Điệp Trắng</a></li>
                                    <li><a href="hoa-lan-ho-diep-tim.html" class="nav-link">Lan Hồ Điệp Tím</a></li>
                                    <li><a href="chau-lan-ho-diep-3-canh.html" class="nav-link">Chậu Lan Hồ Điệp 3
                                            Cành</a></li>
                                    <li><a href="chau-lan-ho-diep-5-canh.html" class="nav-link">Chậu Lan Hồ Điệp 5
                                            Cành</a></li>
                                    <li><a href="chau-lan-ho-diep-10-canh.html" class="nav-link">Chậu Lan Hồ Điệp 10
                                            Cành</a></li>
                                </ul>
                            </div>
                            <a href="hoa-lan-ho-diep.html" class="see-all">Hiển thị tất cả LAN HỒ ĐIỆP</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle">Chủ Đề</a>
                        <div class="dropdown-menu">
                            <div class="dropdown-inner">
                                <ul class="list-unstyled">
                                    <li><a href="hoa-chuc-mung.html" class="nav-link">Hoa Chúc Mừng</a></li>
                                    <li><a href="hoa-cuoi-cam-tay.html" class="nav-link">Hoa Cưới Cầm Tay</a></li>
                                    <li><a href="hoa-tang-le.html" class="nav-link">Hoa tang lễ - Hoa Chia Buồn</a>
                                    </li>
                                    <li><a href="hoa-tinh-yeu.html" class="nav-link">Hoa tình yêu</a></li>
                                    <li><a href="hoa-valentine.html" class="nav-link">Hoa Valentine</a></li>
                                    <li><a href="hoa-ky-niem-ngay-cuoi.html" class="nav-link">Hoa Kỷ Niệm Ngày
                                            Cưới</a>
                                    </li>
                                    <li><a href="ngay-cua-me.html" class="nav-link">Ngày của mẹ</a></li>
                                    <li><a href="hoa-chuc-mung-8-3.html" class="nav-link">Hoa Chúc Mừng 8-3</a></li>
                                    <li><a href="hoa-chuc-mung-20-10.html" class="nav-link">Hoa Chúc Mừng 20-10</a>
                                    </li>
                                    <li><a href="hoa-chuc-mung-ngay-nha-giao-viet-nam-20-11.html"
                                            class="nav-link">Ngày
                                            nhà giáo VN</a>
                                    </li>
                                    <li><a href="le-giang-sinh.html" class="nav-link">Giáng sinh</a></li>
                                    <li><a href="tet-am-lich.html" class="nav-link">Tết âm lịch</a></li>
                                    <li><a href="hoa-tang-tot-nghiep.html" class="nav-link">Hoa Tốt Nghiệp</a></li>
                                    <li><a href="hoa-dinh-ky.html" class="nav-link">Hoa Định Kỳ</a></li>
                                </ul>
                            </div>
                            <a href="#" class="see-all">Hiển thị tất cả Chủ Đề</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle">Thiết kế</a>
                        <div class="dropdown-menu">
                            <div class="dropdown-inner">
                                <ul class="list-unstyled">
                                    <li><a href="bo-hoa.html" class="nav-link">Bó hoa</a></li>
                                    <li><a href="lang-hoa.html" class="nav-link">Lẵng hoa</a></li>
                                    <li><a href="gio-hoa-dep.html" class="nav-link">Giỏ Hoa</a></li>
                                    <li><a href="ke-hoa-khai-truong.html" class="nav-link">Kệ hoa</a></li>
                                    <li><a href="binh-hoa.html" class="nav-link">Bình hoa</a></li>
                                    <li><a href="hop-hoa.html" class="nav-link">Hộp hoa</a></li>
                                </ul>
                            </div>
                            <a href="#" class="see-all">Hiển thị tất cả Thiết kế</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle">HOA TƯƠI</a>
                        <div class="dropdown-menu">
                            <div class="dropdown-inner">
                                <ul class="list-unstyled">
                                    <li><a href="hoa-hong.html" class="nav-link">Hoa hồng</a></li>
                                    <li><a href="hoa-baby.html" class="nav-link">Hoa Baby</a></li>
                                    <li><a href="hoa-huong-duong.html" class="nav-link">Hoa hướng dương</a></li>
                                    <li><a href="hoa-lan-ho-diep.html" class="nav-link">Hoa Lan Hồ Điệp</a></li>
                                    <li><a href="hoa-tulip.html" class="nav-link">Hoa tulip</a></li>
                                    <li><a href="hoa-cuc-tana.html" class="nav-link">Hoa cúc Tana</a></li>
                                    <li><a href="hoa-thach-thao.html" class="nav-link">Hoa thạch thảo</a></li>
                                    <li><a href="hoa-mau-don.html" class="nav-link">Hoa mẫu đơn</a></li>
                                    <li><a href="cuc-mau-don.html" class="nav-link">Cúc mẫu đơn</a></li>
                                    <li><a href="hoa-cam-tu-cau.html" class="nav-link">Hoa cẩm tú cầu</a></li>
                                    <li><a href="hoa-ly.html" class="nav-link">Hoa ly</a></li>
                                    <li><a href="hoa-sen.html" class="nav-link">Hoa sen</a></li>
                                    <li><a href="hoa-dong-tien.html" class="nav-link">Hoa đồng tiền</a></li>
                                    <li><a href="hoa-cam-chuong.html" class="nav-link">Hoa cẩm chướng</a></li>
                                    <li><a href="hoa-cuc-hoa-mi.html" class="nav-link">Hoa cúc họa mi</a></li>
                                </ul>
                            </div>
                            <a href="#" class="see-all">Hiển thị tất cả HOA TƯƠI</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="khuyen-mai.html" class="nav-link">Hoa Tươi Giảm 30%</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="col-sm-12">
        <p class="header-notice">ĐẶT HOA ONLINE - GIAO MIỄN PHÍ TP HCM &amp; HÀ NỘI - GỌI NGAY 1900 633 045 HOẶC 0865
            160
            360</p>
    </div>
    <div id="common-home" class="container">
        <div class="row">
            <div id="content" class="col">
                @yield('contents')
                <h3 class="text-center mt-5 mb-5">KHÁCH HÀNG TIÊU BIỂU</h3>
                <div id="carousel-banner-0" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <div class="col-2 num-items-5 text-center">
                                    <img src="image/catalog/1px.webp"
                                        data-src="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/common/partner/1-130x130.png.webp"
                                        width="130" height="130" alt="Campo" class="img-fluid lozad" />
                                </div>
                                <div class="col-2 num-items-5 text-center">
                                    <img src="image/catalog/1px.webp"
                                        data-src="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/common/partner/2-130x130.png.webp"
                                        width="130" height="130" alt="Acis" class="img-fluid lozad" />
                                </div>
                                <div class="col-2 num-items-5 text-center">
                                    <img src="image/catalog/1px.webp"
                                        data-src="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/common/partner/3-130x130.png.webp"
                                        width="130" height="130" alt="Seniart" class="img-fluid lozad" />
                                </div>
                                <div class="col-2 num-items-5 text-center">
                                    <img src="image/catalog/1px.webp"
                                        data-src="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/common/partner/4-130x130.png.webp"
                                        width="130" height="130" alt="Matxi" class="img-fluid lozad" />
                                </div>
                                <div class="col-2 num-items-5 text-center">
                                    <img src="image/catalog/1px.webp"
                                        data-src="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/common/partner/5-130x130.png.webp"
                                        width="130" height="130" alt="Generali" class="img-fluid lozad" />
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-2 num-items-5 text-center">
                                    <img src="image/catalog/1px.webp"
                                        data-src="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/common/partner/6-130x130.png.webp"
                                        width="130" height="130" alt="China SA" class="img-fluid lozad" />
                                </div>
                                <div class="col-2 num-items-5 text-center">
                                    <img src="image/catalog/1px.webp"
                                        data-src="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/common/partner/7-130x130.png.webp"
                                        width="130" height="130" alt="GFK" class="img-fluid lozad" />
                                </div>
                                <div class="col-2 num-items-5 text-center">
                                    <img src="image/catalog/1px.webp"
                                        data-src="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/common/partner/8-130x130.png.webp"
                                        width="130" height="130" alt="Yeah 1" class="img-fluid lozad" />
                                </div>
                                <div class="col-2 num-items-5 text-center">
                                    <img src="image/catalog/1px.webp"
                                        data-src="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/common/partner/9-130x130.png.webp"
                                        width="130" height="130" alt="Nestle" class="img-fluid lozad" />
                                </div>
                                <div class="col-2 num-items-5 text-center">
                                    <img src="image/catalog/1px.webp"
                                        data-src="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/common/partner/10-130x130.png.webp"
                                        width="130" height="130" alt="125R" class="img-fluid lozad" />
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-2 num-items-5 text-center">
                                    <img src="image/catalog/1px.webp"
                                        data-src="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/common/partner/11-130x130.png.webp"
                                        width="130" height="130" alt="Tekcom" class="img-fluid lozad" />
                                </div>
                                <div class="col-2 num-items-5 text-center">
                                    <img src="image/catalog/1px.webp"
                                        data-src="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/common/partner/12-130x130.png.webp"
                                        width="130" height="130" alt="Interline" class="img-fluid lozad" />
                                </div>
                                <div class="col-2 num-items-5 text-center">
                                    <img src="image/catalog/1px.webp"
                                        data-src="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/common/partner/13-130x130.png.webp"
                                        width="130" height="130" alt="Samsung" class="img-fluid lozad" />
                                </div>
                                <div class="col-2 num-items-5 text-center">
                                    <img src="image/catalog/1px.webp"
                                        data-src="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/common/partner/14-130x130.png.webp"
                                        width="130" height="130" alt="Schneider" class="img-fluid lozad" />
                                </div>
                                <div class="col-2 num-items-5 text-center">
                                    <img src="image/catalog/1px.webp"
                                        data-src="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/common/partner/15-130x130.png.webp"
                                        width="130" height="130" alt="KOVA" class="img-fluid lozad" />
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-2 num-items-5 text-center">
                                    <img src="image/catalog/1px.webp"
                                        data-src="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/common/partner/16-130x130.png.webp"
                                        width="130" height="130" alt="Midea" class="img-fluid lozad" />
                                </div>
                                <div class="col-2 num-items-5 text-center">
                                    <img src="image/catalog/1px.webp"
                                        data-src="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/common/partner/17-130x130.png.webp"
                                        width="130" height="130" alt="Good Yeah" class="img-fluid lozad" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    < !-
                    $(document).ready(function() {
                        new bootstrap.Carousel(document.querySelector('#carousel-banner-0'), {
                            ride: 'carousel',
                            interval: 5000,
                            wrap: true
                        });
                    });
                    //-->
                </script>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="text-center mb-3">Shop Hoa Tươi FlowerCorner.vn</h1>
                            </div>
                            <div class="col-md-6">
                                <h2 class="mb-3">Giới Thiệu Về FlowerCorner.vn</h2>
                                <strong>shop hoa tươi</strong> FlowerCorner.vn là một trong những tiệm hoa tươi uy tín
                                nhất tại TP
                                HCM, Việt Nam. FlowerCorner.vn cung cấp dịch vụ đặt hoa online giao tận nơi tại TP HCM,
                                Hà Nội và trên
                                tất cả các tỉnh – thành phố tại Việt Nam. Với hệ thống cửa hàng hoa tươi liên kết rộng
                                khắp tất cả các
                                tỉnh – thành phố trên toàn quốc, FlowerCorner.vn có thể giúp bạn gửi tặng hoa tươi cho
                                người thân ở
                                bất cứ nơi đâu tại Việt Nam. FlowerCorner cam kết mang đến cho bạn những sản phẩm hoa
                                tươi chất lượng
                                cao, với mức giá tốt nhất và dịch chuyên nghiệp nhất khi sử dụng dịch vụ đặt hoa tươi
                                online giao tận
                                nơi tại Flowercorner.vn.<br>
                                <br>
                                <center><iframe class="lozad" data-src="//www.youtube.com/embed/slv6L1Bzk14"
                                        width="560" height="315" frameborder="0"></iframe></center>
                                <br>
                            </div>
                            <div class="col-md-6">
                                <br><br>Shop hoa tươi FlowerCorner Được thành lập từ năm 2017 với mục tiêu mang đến cho
                                khách hàng
                                trải nghiệm tuyệt vời về một dịch vụ <strong>đặt hoa online</strong> chuyên nghiệp. Sau
                                hơn 5 năm hoạt
                                động, cửa hàng hoa tươi FlowerCorner đã giúp hàng chục ngàn khách hàng gửi tặng những bó
                                hoa tươi đẹp
                                và đầy ý nghĩa đến những người thân yêu trong tất cả những dịp đặc biệt trong năm.
                                <br>
                                <h2 class="mt-3 mb-3">Đặt hoa online giá tốt – Giao nhanh trong 90p</h2>
                                Nếu bạn đang tìm kiếm một trang website đặt hoa online giao tận nơi thì flowercorner.vn
                                là một sự lựa
                                chọn tuyệt vời dành cho bạn. Tại <a href="index.html"><strong>shop hoa
                                        tươi</strong></a> FlowerCorner,
                                bạn có thể dễ dàng lựa chọn một mẫu hoa đẹp, ý nghĩa giữa hàng trăm mẫu hoa được thiết
                                kế sẵn để gửi
                                tặng người thân, bạn bè, đối tác trong tất cả các dịp đặc biệt trong năm hay trong những
                                sự kiện như:
                                khai trương, sinh nhật, lễ cưới, lễ tang…<br>
                                <br>Ngoài những mẫu hoa có sẵn trên website, shop hoa tươi Flower Corner cũng nhận thiết
                                kế hoa tươi
                                theo yêu cầu với mọi mức giá để đáp ứng mọi nhu cầu của khách hàng. Nhờ thế, việc đặt
                                hoa online tại
                                Flower Corner trở nên nhanh chóng, dễ dàng và đơn giản hơn.<br>
                                <br>Đặc biệt, với dịch vụ giao hoa nhanh trong 90 phút, shop hoa tươi FlowerCorner sẽ
                                giúp bạn kịp
                                thời gửi tặng một bó hoa tới người thân, bạn bè nếu như bạn cần đặt gấp trong ngày.<br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="mb-3">Đặt Hoa Online – Ưu Đãi Hấp Dẫn</h2>
                                <img title="đặt hoa online tại shop hoa tươi flower corner" class="lozad"
                                    data-src="https://8384f55340.vws.vegacdn.vn/image/catalog/New_Dec/dat-hoa-online-tai-shop-hoa-tuoi-flowercorner.jpg"
                                    width="500" height="335"
                                    alt="đặt hoa online tại shop hoa tươi flower corner">
                                <br><br>Khi đặt hoa online tại shop hoa tươi FlowerCorner, bạn không chỉ được miễn phí
                                giao hàng trong
                                khu vực nội thành TP HCM, tặng kèm thiệp chúc mừng, mà còn được giảm đến 50k cho đơn
                                hàng đầu tiên.
                                Bên cạnh đó, vào mỗi thứ 6 hàng tuần, bạn cũng sẽ được giảm ngay 10% tối đa lên đến 100k
                                với chương
                                trình ưu đãi Thứ 6 vui vẻ. Đặc biệt, những khách hàng cũ cũng sẽ được giảm giá lên đến
                                10% cho các đơn
                                hàng tiếp theo.<br>
                                <h2 class="mt-3 mb-3">Đặt Hoa Online mọi lúc, mọi nơi</h2>
                                Ưu điểm của tiệm hoa FlowerCorner đó là cho phép bạn đặt hoa tươi gửi tặng người thân dù
                                bạn đang ở
                                bất cứ nơi đâu, vào bất cứ thời điểm nào chỉ với vài thao tác đơn giản ngay trên website
                                <a href="index.html"><strong>flowercorne.vn</strong></a> hoặc trên ứng dụng Flower
                                Corner.<br>
                                <br>Nếu bạn đang phân vân không biết nên lựa chọn loài hoa nào để phù hợp cho từng sự
                                kiện, bạn có thể
                                chat ngay với các nhân viên tư vấn của Flower Corner để được tư vấn lựa chọn mẫu hoa phù
                                hợp nhất.<br>
                                <h2 class="mt-3 mb-3">Đặt hoa đơn giản, thanh toán dễ dàng</h2>
                                Với shop hoa tươi Flower Corner, thay vì mất hàng giờ chạy xe lòng vòng qua các shop hoa
                                tươi gần đây,
                                thì bạn chỉ cần ngồi một chỗ và thực hiện vài thao tác đơn giản trên ứng dụng hoặc
                                website là đã có
                                ngay một mẫu hoa thật đẹp để tặng vợ, bạn gái, người thân hay đối tác. Nếu vẫn cảm thấy
                                chưa yên tâm
                                về chất lượng hoa, bạn có thể yêu cầu nhân viên của FlowerCorner chụp và gửi hình hoa để
                                duyệt trước
                                khi giao.<br>
                                <br>Shop hoa FlowerCorner cung cấp cho bạn nhiều lựa chọn về phương thức thanh toán từ:
                                COD, chuyển
                                khoản ngân hàng, thanh toán qua thẻ visa, master card, Paypal… để bạn có thể dễ dàng đặt
                                hoa mà không
                                gặp phải bất cứ trở ngại nào.<br>
                            </div>
                            <div class="col-md-6">
                                <h2 class="mb-3">Danh mục sản phẩm của FlowerCorner</h2>
                                Đến với cửa hàng hoa FlowerCorner, bạn có thể thoải mái lựa chọn giữa hơn 500+ mẫu hoa
                                tươi được thiết
                                kế sẵn theo các chủ đề như:<br>
                                <ul>
                                    <li><a href="hoa-chuc-mung-sinh-nhat.html"><strong>Hoa sinh nhật</strong></a>: Hoa
                                        tặng sinh nhật
                                        vợ, bạn gái, ba mẹ, anh chị, bạn bè, đối tác hay đồng nghiệp.</li>
                                    <li><a href="hoa-khai-truong.html"><strong>Hoa khai trương</strong></a>: hoa chúc
                                        mừng khai trương
                                        cửa hàng, công ty.</li>
                                    <li><strong><a href="hoa-cuoi-cam-tay.html">Hoa cưới</a></strong>: hoa cầm tay cô
                                        dâu, hoa cài áo
                                        chú rể..</li>
                                    <li><a href="hoa-tang-tot-nghiep.html"><strong>Hoa tốt nghiệp</strong></a>: hoa
                                        tặng bạn bè, người
                                        thân trong lễ tốt nghiệp.</li>
                                    <li><a href="hoa-tang-le.html"><strong>Hoa tang lễ</strong></a>: hoa chia buồn để
                                        gửi tới các đám
                                        tang.</li>
                                    <li><a href="hoa-chuc-mung.html"><strong>Hoa chúc mừng</strong></a> các dịp đặc
                                        biệt: Valentine,
                                        ngày của mẹ, ngày của cha, ngày quốc tế phụ nữ 8-3, ngày nhà giáo Việt Nam
                                        20/11….</li>
                                </ul>
                                <br>Đặc biệt, ngoài những mẫu hoa được thiết kế từ các loài hoa trong nước, <i>shop hoa
                                    tươi</i>
                                FlowerCorner cũng cung cấp các mẫu hoa nhập khẩu cao cấp, sang trọng.
                                <br>
                                <h3 class="mt-3 mb-3">Tại sao nên chọn shop hoa FlowerCorner</h3>
                                Không khó để bạn tìm được một cửa hàng hoa cung cấp dịch vụ đặt hoa online giao tận nơi.
                                Vậy tại sao
                                bạn nên sử dụng dịch vụ điện hoa (Flower Delivery) của shop hoa tươi Flower Corner?
                                <ul>
                                    <li>Hoa đẹp, thiết kế đa dạng phù hợp với tất cả sự kiện.</li>
                                    <li>Thiết kế theo yêu cầu của khách hàng.</li>
                                    <li>Gửi hình hoa trước khi giao.</li>
                                    <li>Đội ngũ florists chuyên nghiệp với nhiều năm kinh nghiệm.</li>
                                </ul>
                                <h3 class="mt-3 mb-3">Cam kết từ shop hoa tươi Flower Corner</h3>
                                Flower Corner hiểu rằng, hoa tươi dù không mang nhiều giá trị về mặt vật chất, nhưng lại
                                có ý nghĩa
                                rất lớn về mặt tinh thần. Mỗi một bó hoa gửi đi gửi gắm rất nhiều tình cảm, thông điệp
                                yêu thương mà
                                bạn muốn gửi đến những người thân. Chính vì thế, Flower Corner luôn nỗ lực nâng cao chất
                                lượng sản
                                phẩm và dịch vụ để mang đến bạn những trải nghiệm tuyệt vời nhất khi sử dụng dịch vụ của
                                Flower
                                Corner. Shop hoa tươi Flower Corner cam kết:
                                <ul>
                                    <li>Chỉ sử dụng hoa tươi mới nhập về trong ngày.</li>
                                    <li>Hoa đẹp và 90% giống như hình.</li>
                                    <li>Giao hoa nhanh, đúng giờ.</li>
                                </ul>
                                Nếu bạn đang cần đặt hoa để gửi tặng người thân trong những dịp đặc biệt, gọi ngay 1900
                                633 045 để
                                được tư vấn hoặc đặt hoa giao nhanh với shop hoa tươi FlowerCorner!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@extends('client.layouts.partials.footer')
