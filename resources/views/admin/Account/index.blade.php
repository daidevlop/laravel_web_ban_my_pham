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
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($acc as $a)
                        <tr>
                            <th scope="row">{{ $a->id }}</th>
                            <td>{{ $a->name }}</td>
                            <td>{{ $a->email }}</td>
                            <td>{{ $a->password }}</td>
                            <td>
                                @if ($a->email == 'cut0266@gmail.com')
                                    <span>Admin</span>
                                @else
                                    <span>User</span>
                                @endif
                            </td>
                            <td><a href="{{route('account-admin.edit',$a->id)}}"  class="btn btn-success">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <!-- /.container-fluid -->

    </div>
@endsection
