@extends('client.layouts.master')
@section('contents')
    <div class="row">
        <div id="content" class="col">
            <h1>Đăng ký tài khoản</h1>
            <p>Nếu bạn đã có tài khoản với chúng tôi, vui lòng đăng nhập tại <a href="{{ route('login') }}"> trang đăng nhập
                </a>.</p>
            <form action="{{ route('postRegister') }}" method="post">
                @csrf
                <fieldset id="account">
                    <legend>Thông tin cá nhân của bạn</legend>
                    <div class="row mb-3 required">
                        <label for="input-firstname" class="col-sm-2 col-form-label">Họ tên</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value placeholder="Họ tên" id="input-firstname" class="form-control" />
                            <div>
                                @error('name')
                                    {{$message}} 
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 required">
                        <label for="input-email" class="col-sm-2 col-form-label">E-mail</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" placeholder="E-mail" id="input-email"
                                class="form-control" />
                            <div>@error('email')
                                {{$message}}
                            @enderror</div>
                        </div>
                    </div>
                    <div class="row mb-3 required">
                        <label for="input-telephone" class="col-sm-2 col-form-label">Điện thoại</label>
                        <div class="col-sm-10">
                            <input type="tel" value placeholder="Điện thoại" id="input-telephone"
                                class="form-control" />
                            <div></div>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Mật khẩu của bạn</legend>
                    <div class="row mb-3 required">
                        <label for="input-password" class="col-sm-2 col-form-label">Mật khẩu</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" placeholder="Mật khẩu" id="input-password"
                                class="form-control" />
                            <div>
                                @error('password')
                                    {{$message}} 
                                @enderror
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="d-inline-block pt-2 pd-2 w-100">
                    <div class="float-end text-right">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">Tôi đã đọc và đồng ý với <a href="" class="modal-link">
                                    <b>
                                        Điều khoản &amp; Điều kiện </b> </a></label> <input type="checkbox" name="agree"
                                value="1" class="form-check-input" />
                        </div>
                        <button type="submit" class="btn btn-primary">Tiếp tục</button>
                    </div>
                </div>
            </form>
        </div>
    @endsection
