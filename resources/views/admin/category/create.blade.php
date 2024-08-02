@extends('admin.layouts.master')
@section('content')
    <h2>Form them moi danh muc</h2>
    <form action="{{ route('category-admin.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Tên danh muc</label>
            <input type="text" class="form-control" id="name" name="name_category">
            @error('name_category')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
@endsection
