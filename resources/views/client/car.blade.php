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
                            @foreach ($data as $listcar)
                                <tr>
                                    <input type="hidden" class="cart-product-id" />
                                    <td class="text-center"> <a href=""><img width="50"
                                                src="{{ Storage::url($listcar->product_img) }}" /></a> </td>
                                    <td class="text-start text-wrap"><a class="cart-item-name"
                                            href="">{{ $listcar->product_name }}</a> </td>
                                    <td class="text-start">{{ $listcar->id }}</td>
                                    <td class="text-start">
                                        <form method="post" data-oc-target="#shopping-cart">
                                            <div class="input-group">
                                                <input type="text" name="quantity" value="{{ $listcar->quantity }}"
                                                    class="form-control"> <input type="hidden" name="key"
                                                    value="27929">
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
                                    <td class="text-end cart-item-price">{{ $listcar->discount }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot id="checkout-total">
                            <tr>
                                <td colspan="5" class="text-end"><strong>Tổng phụ</strong></td>

                            </tr>
                            <tr>
                                <td colspan="5" class="text-end"><strong>Tổng cộng</strong></td>
                                <td>{{ $total }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="d-inline-block pt-2 pd-2 w-100">
                <div class="float-start"><a href="{{ route('products-client.index') }}" class="btn btn-light">Tiếp
                        tục mua sắm</a></div>
                <div class="float-end"><a href="{{ route('thanh-toan.index') }}" class="btn btn-primary">Thanh toán</a>
                <div class="float-end"><a href="{{ route('vnpay.create') }}" class="btn btn-primary">Thanh toán Online</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
