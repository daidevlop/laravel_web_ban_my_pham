@extends('admin.layouts.master')
@section('content')
    <h2>Form them moi san pham</h2>
    <form action="{{ route('products-admin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Tên sản phẩm</label>
            <input type="text" class="form-control" id="name" name="name">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="img">Hình ảnh</label>
            <input type="file" class="form-control-file" id="img" name="img">
            @error('img')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Giá</label>
            <input type="text" class="form-control" id="price" name="price">
            @error('price')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="stock">Tồn kho</label>
            <input type="number" class="form-control" id="stock" name="stock">
            @error('stock')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Mô tả</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="warranty_policy">Chính sách bảo hành</label>
            <textarea class="form-control" id="warranty_policy" name="warranty_policy" rows="3"></textarea>
            @error('warranty_policy')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="discount">Giảm giá</label>
            <input type="number" class="form-control" id="discount" name="discount">
            @error('discount')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="category_id">Danh mục</label>
            <select class="form-control" id="category_id" name="category_id">
                <option value="">Chọn danh mục</option>
                @foreach ($category as $ct)
                    <option value="{{ $ct->id }}">{{ $ct->name_category }}</option>
                @endforeach
            </select>
            @error('category_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
@endsection
