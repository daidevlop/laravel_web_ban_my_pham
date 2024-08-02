@extends('admin.layouts.master')
@section('content')
    <h2>Form them moi san pham</h2>
    <form action="{{ route('products-admin.update',$edit->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="name">Tên sản phẩm</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $edit->name }}">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="img">Hình ảnh</label>
            <input type="file" class="form-control-file" id="img" name="img">
            <img src="{{ Storage::url($edit->img) }}" width="120" alt="">
            @error('img')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Giá</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $edit->price }}">
            @error('price')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="stock">Tồn kho</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ $edit->stock }}">
            @error('stock')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Mô tả</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $edit->description }}</textarea>
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="warranty_policy">Chính sách bảo hành</label>
            <textarea class="form-control" id="warranty_policy" name="warranty_policy" rows="3">{{ $edit->warranty_policy }}</textarea>
            @error('warranty_policy')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="discount">Giảm giá</label>
            <input type="text" class="form-control" id="discount" name="discount" value="{{ $edit->discount }}">
            @error('discount')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="category_id">Danh mục</label>
            <select class="form-control" id="category_id" name="category_id">
                <option value="">Chọn danh mục</option>
                @foreach ($category as $ct)
                    <option {{ $edit->category_id == $ct->id ? 'selected' : '' }} value="{{ $ct->id }}">
                        {{ $ct->name_category }}</option>
                @endforeach
            </select>
            @error('category_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Cap nhat</button>
    </form>
@endsection
