@extends('client.layouts.master')
@section('contents')
    <div class="row">
        <div id="content" class="col mt-5">
            <div id="shopping-cart">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td class="text-center">Hình ảnh</td>
                                <td class="text-start">Tên sản phẩm</td>
                                <td class="text-start">Mã sản phẩm</td>
                                <td class="text-start">Số lượng</td>
                                <td class="text-end">Đơn giá</td>
                                <td class="text-end">Tổng cộng</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <input type="hidden" class="cart-product-id" value="7655" />
                                <td class="text-center"> <a href="https://www.flowercorner.vn/san-pham/DreamLand"><img
                                            src="https://8384f55340.vws.vegacdn.vn/image/cache/catalog/products/Autumn_2024/NEWBOUQUET_064.jpg.webp"
                                            alt="DreamLand" title="DreamLand" class="img-thumbnail" /></a> </td>
                                <td class="text-start text-wrap"><a class="cart-item-name"
                                        href="https://www.flowercorner.vn/san-pham/DreamLand">DreamLand</a> </td>
                                <td class="text-start">NEWBOUQUET_064</td>
                                <td class="text-start">
                                    <form method="post" data-oc-target="#shopping-cart">
                                        <div class="input-group">
                                            <input type="text" name="quantity" value="1" size="1"
                                                class="form-control"> <input type="hidden" name="key" value="27929">
                                            {{-- <button type="submit"
                                                formaction="https://www.flowercorner.vn?route=checkout/cart|edit"
                                                data-bs-toggle="tooltip" title="Cập nhật" class="btn btn-success"><i
                                                    class="fa-solid fa-rotate"></i></button>
                                            <button type="submit"
                                                formaction="https://www.flowercorner.vn?route=checkout/cart|remove"
                                                data-bs-toggle="tooltip" title="Loại bỏ" class="btn btn-danger"><i
                                                    class="fa-solid fa-circle-xmark"></i></button> --}}
                                        </div>
                                    </form>
                                </td>
                                <td class="text-end cart-item-price">1,990,000VND</td>
                                <td class="text-end">1,990,000VND</td>
                            </tr>
                        </tbody>
                        <tfoot id="checkout-total">
                            <tr>
                                <td colspan="5" class="text-end"><strong>Tổng phụ</strong></td>
                                <td class="text-end">1,990,000VND</td>
                            </tr>
                            <tr>
                                <td colspan="5" class="text-end"><strong>Tổng cộng</strong></td>
                                <td class="text-end">1,990,000VND</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="d-inline-block pt-2 pd-2 w-100">
                <div class="float-start"><a href="https://www.flowercorner.vn?route=common/home" class="btn btn-light">Tiếp
                        tục mua sắm</a></div>
                <div class="float-end"><a href="https://www.flowercorner.vn?route=checkout/checkout"
                        class="btn btn-primary">Thanh toán</a></div>
            </div>
        </div>
    </div>
    </div>
@endsection
