@extends("admin.layout")
@section("top_content")
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">danh mục</h2>
            <a class="au-btn au-btn-icon au-btn--blue" href="{{url('admin/product/create')}}">
                <i class="zmdi zmdi-plus"></i>Thêm product</a>
        </div>
    </div>
@endsection

@section("main_content")
    <div class="table-responsive table table-bordered">
        <div class="card-body" style="background: #ffffff">
            <h5 class="card-title">Product table</h5>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>product_desc</th>
                    <th>thumbnail</th>
                    <th>gallery</th>
                    <th>category_name</th>
                    <th>brand_name</th>
                    <th>price</th>
                    <th>quantity</th>
                    <th>created at</th>
                    <th>updated at</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($products as $p)
                    <tr  scope="row">
                        <td>{{$p->id}}</td>
                        <td>{{$p->product_name}}</td>
                        <td>{{$p->product_desc}}</td>
                        <td>{{$p->thumbnail}}</td>
                        <td>{{$p->gallery}}</td>
                        <td>{{\App\Category::find($p->category_id)->category_name }}</td>
                        <td>{{\App\Brand::find($p->brand_id)->brand_name }}</td>
                        <td>{{$p->price}}</td>
                        <td>{{$p->quantity}}</td>
                        <td>{{$p->created_at}}</td>
                        <td>{{$p->updated_at}}</td>
                        <td>
                            <div class="table-data-feature">
                                <a href="{{url("admin/product/edit",['id'=>$p->id])}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    Edit
                                </a>
                                <a href="{{url("admin/product/delete",['id'=>$p->id])}}" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    <tr class="spacer"></tr>

                @empty($products)
                    <p>Không có danh mục nào</p>
                @endempty
                </tbody>
            </table>
        </div>
    </div>
@endsection
