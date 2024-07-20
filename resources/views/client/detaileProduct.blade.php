@extends('client.layouts.master')
@section('contents')
<div id="product-info" class="container  mt-4">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="https://www.flowercorner.vn?route=common/home"><i
                    class="fas fa-home"> </i></a></li>
        <li class="breadcrumb-item"><a href="amour.html">Amour</a></li>
    </ul>
    <div class="row">
        <div id="content" class="col">
            <div class="row mb-3">
                <div class="col-sm">
                    <div class="image magnific-popup">
                        <a href="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/products/August 2022/Amour.jpg.webp"
                            title="Amour"><img
                                src="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/products/August 2022/Amour.jpg.webp"
                                title="Amour" alt="Amour" class="img-thumbnail mb-3" /></a>
                    </div>
                </div>
                <div class="col-sm po-relative">
                    <h1 class="product-name">Amour</h1>
                    <ul class="list-unstyled price-box">
                        <li>
                            <h3><span class="price-new">920,000VND</span></h3>
                        </li>
                    </ul>
                    <div class="coupon_box">
                        <div class="coupon_slider"></div>
                        <div class="coupon_box_detail"></div>
                    </div>
                    <div class="call_us_box">
                        Gọi ngay: <span class="call-us">1900 633 045</span>
                    </div>
                    <div id="product">
                        <form id="form-product">
                            <div class="mb-3">
                                <p class="mb-0"><label for="input-quantity" class="form-label">Qty</label>
                                </p>
                                <input type="text" name="quantity" value="1" size="2"
                                    id="input-quantity" class="form-control" /> <input type="hidden"
                                    name="product_id" value="7609" id="input-product-id" />
                                <button type="submit" id="button-cart"
                                    class="btn btn-primary btn-lg btn-block">Đặt hàng</button>
                                <button type="button" id="dat-nhanh" rel="7609"
                                    class="btn btn-primary btn-lg btn-block">Đặt nhanh</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a href="#tab-description" data-bs-toggle="tab"
                        class="nav-link active">Mô tả sản phẩm</a></li>
            </ul>
            <div class="tab-content">
                <div id="tab-description" class="tab-pane fade show active mb-4">
                    <p style="text-align:justify"><span style="font-size:14px">Được thiết kế với hoa hồng đỏ
                            kết hợp cẩm chướng trắng và lá bạc, lẵng hoa Amour là lựa chọn thích hợp để làm quà
                            tặng vào mọi dịp đặc biệt.</span></p>
                    <p style="text-align:justify"><strong><span style="font-size:14px">Giỏ
                                hoa&nbsp;</span>Amour<span style="font-size:14px">&nbsp;được thiết kế
                                từ:</span></strong></p>
                    <ul>
                        <li><span style="font-size:14px">Hoa hồng đỏ rednaomi Premium : 18 cành</span></li>
                        <li><span style="font-size:14px">Hoa cẩm chướng chùm trắng: 15 cành</span></li>
                        <li><span style="font-size:14px">Các loại hoa lá phụ khác Lá bạc, cỏ lan chi</span>
                        </li>
                    </ul>
                    <p><span style="font-size:14px"><strong>Lưu ý:</strong></span></p>
                    <p><span style="font-size:14px"><span
                                style="font-family:Arial,Helvetica,sans-serif"><em>**Do được làm thủ công, nên
                                    sản phẩm ngoài thực tế sẽ có đôi chút khác biệt so với hình ảnh trên
                                    website. Tuy nhiên, Flowercorner cam kết hoa sẽ giống khoảng 80% so với hình
                                    ảnh.</em></span></span></p>
                    <p><span style="font-size:14px"><span
                                style="font-family:Arial,Helvetica,sans-serif"><em>**Vì các loài hoa thay đổi
                                    theo mùa nên shop đảm bảo các loại hoa chính, còn các loại hoa lá phụ sẽ
                                    thay đổi phù hợp giá cả và thiết kế sản phẩm.</em></span></span></p>
                </div>
            </div>
        </div>
        <h3>Sản phẩm liên quan</h3>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4">
            <div class="col">
                <form method="post" data-oc-toggle="ajax"
                    data-oc-load="https://www.flowercorner.vn?route=common/cart|info"
                    data-oc-target="#header-cart">
                    <div class="product-thumb po-relative">
                        <div class="image p-relative">
                            <a href="ke-hoa-4139.html">
                                <img src="../image/catalog/1px.webp" width="261" height="326"
                                    data-src="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/products/August%202023/hoa-khai-truong-phat-tai.jpg.webp"
                                    alt="Kệ Hoa Khai Trương Phát Tài" title="Kệ Hoa Khai Trương Phát Tài"
                                    class="img-fluid lozad" />
                            </a>
                        </div>
                        <div class="content">
                            <div class="description">
                                <h3><a class="product-item-title" href="ke-hoa-4139.html">Kệ Hoa Khai Trương
                                        Phát Tài</a></h3>
                                <div class="price">
                                    <span class="price-new">2,070,000VND</span>
                                </div>
                            </div>
                            <div class="buynow-button text-center">
                                <a href="ke-hoa-4139.html">ĐẶT HÀNG</a>
                            </div>
                        </div>
                        <input type="hidden" name="product_id" value="4139" />
                        <input type="hidden" name="quantity" value="1" />
                    </div>
                </form>
            </div>
            <div class="col">
                <form method="post" data-oc-toggle="ajax"
                    data-oc-load="https://www.flowercorner.vn?route=common/cart|info"
                    data-oc-target="#header-cart">
                    <div class="product-thumb po-relative">
                        <div class="image p-relative">
                            <a href="lang-hoa-4290.html">
                                <img src="../image/catalog/1px.webp" width="261" height="326"
                                    data-src="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/products/August%202023/hoa-chuc-mung-ruc-ro%20(1).jpg.webp"
                                    alt="Hoa Chúc Mừng Rực Rỡ" title="Hoa Chúc Mừng Rực Rỡ"
                                    class="img-fluid lozad" />
                            </a>
                        </div>
                        <div class="content">
                            <div class="description">
                                <h3><a class="product-item-title" href="lang-hoa-4290.html">Hoa Chúc Mừng
                                        Rực Rỡ</a></h3>
                                <div class="price">
                                    <span class="price-new">1,110,000VND</span>
                                </div>
                            </div>
                            <div class="buynow-button text-center">
                                <a href="lang-hoa-4290.html">ĐẶT HÀNG</a>
                            </div>
                        </div>
                        <input type="hidden" name="product_id" value="4290" />
                        <input type="hidden" name="quantity" value="1" />
                    </div>
                </form>
            </div>
            <div class="col">
                <form method="post" data-oc-toggle="ajax"
                    data-oc-load="https://www.flowercorner.vn?route=common/cart|info"
                    data-oc-target="#header-cart">
                    <div class="product-thumb po-relative">
                        <div class="image p-relative">
                            <a href="gio-hoa-cuc-trang-6228.html">
                                <img src="../image/catalog/1px.webp" width="261" height="326"
                                    data-src="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/products/August%202023/gio-hoa-cuc-trang.jpg.webp"
                                    alt="Giỏ Hoa Cúc Trắng" title="Giỏ Hoa Cúc Trắng"
                                    class="img-fluid lozad" />
                            </a>
                        </div>
                        <div class="content">
                            <div class="description">
                                <h3><a class="product-item-title" href="gio-hoa-cuc-trang-6228.html">Giỏ Hoa
                                        Cúc Trắng</a></h3>
                                <div class="price">
                                    <span class="price-new">580,000VND</span> <span
                                        class="price-old">730,000VND</span>
                                </div>
                            </div>
                            <div class="buynow-button text-center">
                                <a href="gio-hoa-cuc-trang-6228.html">ĐẶT HÀNG</a>
                            </div>
                        </div>
                        <input type="hidden" name="product_id" value="6228" />
                        <input type="hidden" name="quantity" value="1" />
                    </div>
                </form>
            </div>
            <div class="col">
                <form method="post" data-oc-toggle="ajax"
                    data-oc-load="https://www.flowercorner.vn?route=common/cart|info"
                    data-oc-target="#header-cart">
                    <div class="product-thumb po-relative">
                        <div class="image p-relative">
                            <a href="sweet-as-you-7233.html">
                                <img src="../image/catalog/1px.webp" width="261" height="326"
                                    data-src="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/products/August%202023/Sweet-as-You.jpg.webp"
                                    alt="Sweet as You" title="Sweet as You" class="img-fluid lozad" />
                            </a>
                        </div>
                        <div class="content">
                            <div class="description">
                                <h3><a class="product-item-title" href="sweet-as-you-7233.html">Sweet as
                                        You</a></h3>
                                <div class="price">
                                    <span class="price-new">1,510,000VND</span>
                                </div>
                            </div>
                            <div class="buynow-button text-center">
                                <a href="sweet-as-you-7233.html">ĐẶT HÀNG</a>
                            </div>
                        </div>
                        <input type="hidden" name="product_id" value="7233" />
                        <input type="hidden" name="quantity" value="1" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<div id="quickOrder" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">ĐẶT HOA NHANH</h4>
            </div>
            <form id="quickOrderForm" novalidate>
                <div class="modal-body">
                    <div>
                        Quý khách vui lòng điền thông tin bên dưới và bấm nút đặt hàng, nhân viên chúng tôi sẽ
                        gọi quý khách trong ít phút để hỗ trợ đặt hàng:
                    </div>
                    <div class="row">
                        <div class="col-md-12 order-md-1">
                            <input type="hidden" class="form-control" id="product-name-model"
                                value="Amour - Mã sản phẩm: ARRANG-43979">
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <div class="mb-3">
                                        <label for="sender">Họ tên</label>
                                        <input type="text" class="form-control" id="sender" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <div class="mb-3">
                                        <label for="senderphone">Số điện thoại</label>
                                        <input type="text" class="form-control" id="senderphone"
                                            placeholder value required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-6">
                                    <div class="g-recaptcha"
                                        data-sitekey="6LeQyycpAAAAAMghgRAuDG-4q6XWEeVxnJtIgY1Y"></div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12 mb-6">
                                    * Đặt hoa nhanh từ 7:00-20:00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm"
                        data-bs-dismiss="modal">HUỶ</button>
                    <button class="btn btn-primary btn-lg btn-block btn-sm" type="submit">GỬI ĐƠN
                        HÀNG</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="fb-customer-chat" class="fb-customerchat"></div>
<div id="myModalx" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" style="max-width: 600px;" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <span type="button" style="position: absolute; right: 22px; top: 20px;" class="close"
                data-bs-dismiss="modal"><i class="fa-solid fa-2x fa-circle-xmark"></i></span>
            <a href="#"><img src /></a>
        </div>
    </div>
</div>
</div>
<div id="inquirySubmit" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header text-center" style="display:block">
            <h4 class="modal-title">BẠN CẦN ĐẶT HOA CHO DỊP NÀO?</h4>
        </div>
        <form id="inquirySubmitForm" novalidate>
            <div class="modal-body">
                <div>
                    Quý khách vui lòng để lại số điện thoại, nhân viên của chúng tôi sẽ gọi lại để hỗ trợ!
                </div>
                <div class="row">
                    <div class="col-md-12 order-md-1">
                        <div class="row mt-3">
                            <div class="col-md-6 mb-6">
                                <div class="mb-3">
                                    <label for="phone">Số điện thoại</label>
                                    <input type="text" class="form-control" id="phone" placeholder
                                        value required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-6">
                                <div class="mb-3">
                                    <label for="occasion">Đặt hoa cho dịp</label>
                                    <select class="form-select" id="occasion" required>
                                        <option value="Khai trương">Khai trương</option>
                                        <option value="Sinh nhật">Sinh nhật</option>
                                        <option value="Chia buồn">Chia buồn</option>
                                        <option value="Dịp khác">Dịp khác</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal">HUỶ</button>
                <button class="btn btn-primary btn-lg btn-block btn-sm" type="submit">GỬI YÊU CẦU</button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
