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
                        <th scope="col">Name User</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($oder as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->product_name }}</td>
                            <td>{{ $item->user_name }}</td>
                            <td>{{ $item->discount }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>
                                @if ($item->status == 1)
                                    <span style="color: chartreuse">Da giao hang</span>
                                @endif
                                @if ($item->status == 0)
                                   <span style="color: red">Chua giao hang</span> 
                                @endif
                                @if ($item->status == 2)
                                   <span style="color: pink">Dang su ly</span> 
                                @endif
                                @if ($item->status == 3)
                                   <span style="color: cyan">Huy bo</span> 
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('oder.edit',$item->id) }}">Update don hang</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <!-- /.container-fluid -->

    </div>
@endsection
