@extends('client.layouts.master')
@section('contents')
    <h2>Thông tin thanh toán</h2>
    <form>
        <div class="form-group">
            <label for="name">Tên:</label>
            <input type="text" class="form-control" id="name" placeholder="Nhập tên của bạn" required>
        </div>
        <div class="form-group">
            <label for="phone">Số điện thoại:</label>
            <input type="tel" class="form-control" id="phone" placeholder="Nhập số điện thoại của bạn" required>
        </div>
        <div class="form-group">
            <label for="address">Địa chỉ:</label>
            <input type="text" class="form-control" id="address" placeholder="Nhập địa chỉ của bạn" required>
        </div>
        <div class="form-group">
            <label>Phương thức thanh toán:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentMethod" id="cashOnDelivery"
                    value="cashOnDelivery" required>
                <label class="form-check-label" for="cashOnDelivery">
                    Thanh toán khi nhận hàng
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentMethod" id="vnpay" value="vnpay" required>
                <label class="form-check-label" for="vnpay">
                    Thanh toán bằng VNPay
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Gửi</button>
    </form>
@endsection
