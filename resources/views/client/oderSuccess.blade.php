@extends('client.layouts.master')
@section('contents')
    <div id="common-success" class="container mt-4">
        <div class="row">
            <div id="content" class="col text-center">
                <h3>Đặt hàng thành công</h3>
                <p class="mt-4 mb-4"><i class="fa-solid fa-circle-check fa-beat fa-2xl" style="color: #43a800;"></i></p>
                <p>Nhân viên CSKH của chúng tôi sẽ gọi đến quý khách trong 5 phút nữa để xác nhận đơn hàng. <br />
                    Xin lưu ý, đơn hàng sẽ chỉ được thực hiện sau khi việc xác nhận được hoàn tất. <br /> <br />
                    Flower Corner xin cảm ơn.</p>
                <div class="d-inline-block pt-2 pd-2 w-100 ">
                    <div class="text-center"><a href="{{route('products-client.index')}}" class="btn btn-primary">Tiếp tục</a></div>
                </div>
            </div>
        </div>
    @endsection
