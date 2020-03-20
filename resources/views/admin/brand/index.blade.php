@extends("admin.layout")
@section("top_content")
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Danh mục brand</h2>
            <a class="au-btn au-btn-icon au-btn--blue" href="{{url('admin/brand/create')}}">
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
                    <th>brand_name</th>
                    <th>created at</th>
                    <th>updated at</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @forelse($brands as $b)
                    <tr  scope="row">
                        <td>{{$b->id}}</td>
                        <td>{{$b->brand_name}}</td>
                        <td>{{$b->created_at}}</td>
                        <td>{{$b->updated_at}}</td>
                        <td>
                            <div class="table-data-feature">
                                <a href="{{url("admin/brand/edit",['id'=>$b->id])}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                   Edit
                                </a>
                                <a href="{{url("admin/brand/delete",['id'=>$b->id])}}" class="item"
                                   data-toggle="tooltip" data-placement="top" title="Delete"> Delete
{{--                                    <i class="zmdi zmdi-delete"></i>--}}
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
