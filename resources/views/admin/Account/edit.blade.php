@extends('admin.layouts.master')
@section('content')
    <h2>Cap nhat tai khoanc</h2>
    <form action="{{ route('account-admin.update', $acc->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Tên tai khoan</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $acc->name }}">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $acc->email }}">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="role">
                <option selected>Chon phan quyen</option>
                <option value="1">Admin</option>
                <option value="0">User</option>
            </select>
            @error('role')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Cap nhat</button>
    </form>
@endsection
