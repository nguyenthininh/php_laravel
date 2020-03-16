@extends("admin.layout")
@section("top_content")
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Danh mục sản phẩm</h2>
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
                <th>category_name</th>
                <th>created at</th>
                <th>updated at</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @forelse($categories as $c)
                <tr  scope="row">
                    <td>{{$c->id}}</td>
                    <td>{{$c->category_name}}</td>
                    <td>{{$c->created_at}}</td>
                    <td>{{$c->updated_at}}</td>
                    <td>
                        <div class="table-data-feature">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </button>
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                            </button>
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
