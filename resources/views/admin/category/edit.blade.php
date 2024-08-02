@extends('admin.layouts.master')
@section('content')
    <h2>Form cap nhat danh muc</h2>
    <form action="{{ route('category-admin.update',$edit->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="name">Tên danh muc</label>
            <input type="text" class="form-control" id="name" name="name_category" value="{{ $edit->name_category }}">
            @error('name_category')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Cap nhat</button>
    </form>
@endsection
