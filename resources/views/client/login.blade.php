@extends('client.layouts.master')
@section('contents')
    <div class="row">
        <div id="content" class="col">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2>Khách hàng mới</h2>
                            <p><strong>Đăng ký tài khoản</strong></p>
                            <p>Bằng cách tạo tài khoản, bạn sẽ có thể mua sắm nhanh hơn, cập nhật trạng thái đơn hàng và
                                theo dõi các đơn hàng bạn đã thực hiện trước đó.</p>
                            <a href="https://www.flowercorner.vn?route=account/register" class="btn btn-primary">Tiếp tục</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <form id="form-login"
                                action="https://www.flowercorner.vn?route=account/login|login&amp;login_token=c6a98ee3f130c6b5daa0cf56e7"
                                method="post" data-oc-toggle="ajax">
                                <h2>Phản hồi khách hàng</h2>
                                <p><strong>Tôi là một khách hàng cũ</strong></p>
                                <div class="mb-3">
                                    <label for="input-email" class="col-form-label">Địa chỉ email</label>
                                    <input type="text" name="email" value placeholder="Địa chỉ email"
                                        id="input-email" class="form-control" />
                                </div>
                                <div class="mb-3">
                                    <label for="input-password" class="col-form-label">Mật khẩu</label>
                                    <input type="password" name="password" value placeholder="Mật khẩu" id="input-password"
                                        class="form-control" />
                                    <a href="https://www.flowercorner.vn?route=account/forgotten">Đã quên mật khẩu</a>
                                </div>
                                <button type="submit" class="btn btn-primary">Đăng nhập</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <aside id="column-right" class="col-3 d-none d-md-block">
            <div class="list-group mb-3">
                <a href="https://www.flowercorner.vn?route=account/login" class="list-group-item">Đăng nhập</a> <a
                    href="https://www.flowercorner.vn?route=account/register" class="list-group-item">Đăng ký</a> <a
                    href="https://www.flowercorner.vn?route=account/forgotten" class="list-group-item">Đã quên mật khẩu</a>
                <a href="https://www.flowercorner.vn?route=account/account" class="list-group-item">Tài khoản của tôi</a>
                <a href="https://www.flowercorner.vn?route=account/order" class="list-group-item">Lịch sử đơn hàng</a>
            </div>
        </aside>
    </div>
    </div>
@endsection
