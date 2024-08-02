@extends('admin.layouts.master')
@section('content')
    <div id="content">
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Danh Sach San Pham</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Stock</th>
                                    <th>Description</th>
                                    <th>Warranty Policy</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                @foreach ($productAdmin as $v)
                                    <tr>
                                        <td>{{ $v->id }}</td>
                                        <td>{{ $v->name }}</td>
                                        <td><img src="{{ Storage::url($v->img) }}" width="50" alt="">
                                        </td>
                                        <td>{{ $v->price }} VND</td>
                                        <td>{{ $v->discount }} VND</td>
                                        <td>{{ $v->stock }}</td>
                                        <td>{{ $v->description }}</td>
                                        <td>{{ $v->warranty_policy }}</td>
                                        <td>{{ $v->category_id }}</td>
                                        <td class="d-flex">
                                            <a class="btn btn-success"
                                                href="{{ route('products-admin.edit', $v->id) }}">Edit</a>
                                            <form action="{{ route('products-admin.destroy', $v->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return confirm('Ban co muon xoa khong?')" type="submit"
                                                    class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                        </table>
                        {{ $productAdmin->links() }}
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
@endsection
