
@extends('client.layouts.master')

@section('content')
<div class="container">
    <h2>Thanh toán thành công</h2>
    <p>Mã giao dịch: {{ $inputData['vnp_TxnRef'] }}</p>
    <p>Số tiền: {{ number_format($inputData['vnp_Amount'] / 100) }} VND</p>
    <p>Thời gian: {{ $inputData['vnp_PayDate'] }}</p>
</div>
@endsection
