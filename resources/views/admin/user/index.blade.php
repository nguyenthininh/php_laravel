@extends("admin.layout")
@section("top_content")
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Danh mục user</h2>
            <a class="au-btn au-btn-icon au-btn--blue" href="{{url('admin/category/create')}}">
                <i class="zmdi zmdi-plus"></i>Thêm danh mục</a>
        </div>
    </div>
@endsection

@section("main_content")
    <div class="table-responsive table table-bordered">
        <div class="card-body" style="background: #ffffff">
            <h5 class="card-title">Simple table</h5>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>email</th>
                    <th>password</th>
                    <th>role</th>
                </tr>
                </thead>
                <tbody>
                @forelse($users as $u)
                    <tr  scope="row">
                        <td>{{$u->id}}</td>
                        <td>{{$u->name}}</td>
                        <td>{{$u->email}}</td>
                        <td>{{$u->password}}</td>
                        <td>{{$u->role}}</td>
                        <td>
                            <div class="table-data-feature">
                                <a href="{{url('admin/user/update/'.$u->id)}}" class="item" data-toggle="tooltip"
                                   data-placement="top" title="Edit" onclick="return confirm('are u sure?')">Edit
                                    {{--                                <i class="fa fa-pencil"></i>--}}
                                </a>
                                <a href="{{url('admin/user/delete/'.$u->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    Delete
                                    {{--                                <i class="fa fa-trash-o"></i>--}}
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="spacer"></tr>
                @empty
                    <p>Không có danh mục nào</p>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
