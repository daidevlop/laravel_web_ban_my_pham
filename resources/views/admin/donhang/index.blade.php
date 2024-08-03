@extends('admin.layouts.master')
@section('content')
    <div id="content">
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($oder as $item)
                    <tr>
                        <td></td>
                        <td>Update</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        <!-- /.container-fluid -->

    </div>
@endsection
