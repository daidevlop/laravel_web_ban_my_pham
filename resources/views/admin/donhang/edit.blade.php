@extends('admin.layouts.master')
@section('content')
    <div id="content">
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            <h2 class="mb-4">Cap nhat don hang</h2>
            <form action="{{ route('oder.update', $edit->id) }}" method="POST">
                @csrf
                @method('PUT')
                <!-- Tên Sản Phẩm -->
                <div class="form-group">
                    <label for="productName">Tên Sản Phẩm</label>
                    <input type="text" name="product_name" class="form-control" id="productName"
                        placeholder="Nhập tên sản phẩm" value="{{ $edit->product_name }}">
                </div>

                <!-- Tên Người Dùng -->
                <div class="form-group">
                    <label for="userName">Tên Người Dùng</label>
                    <input type="text" name="user_name" class="form-control" id="userName"
                        placeholder="Nhập tên người dùng" value="{{ $edit->user_name }}">
                </div>

                {{-- <!-- Số Lượng --> --}}
                <div class="form-group">
                    <label for="quantity">Số Lượng</label>
                    <input type="number" name="quatity" value="{{ $edit->quantity }}" class="form-control" id="quantity"
                        placeholder="Nhập số lượng">
                </div>

                <!-- Giá -->
                <div class="form-group">
                    <label for="price">Giá</label>
                    <input type="text" name="discount" value="{{ $edit->discount }}" class="form-control" id="price"
                        placeholder="Nhập giá">
                </div>

                <!-- Trạng Thái -->
                <div class="form-group">
                    <label for="status">Trạng Thái</label>
                    <select class="form-control" id="status" name="status">
                        <option value="0">Chưa xử lý</option>
                        <option value="2">Đang xử lý</option>
                        <option value="1">Da giao</option>
                        <option value="3">Hủy bỏ</option>
                    </select>
                </div>

                <!-- Nút Submit -->
                <button type="submit" class="btn btn-primary">Gửi</button>

        </div>
        <!-- /.container-fluid -->

    </div>
@endsection
