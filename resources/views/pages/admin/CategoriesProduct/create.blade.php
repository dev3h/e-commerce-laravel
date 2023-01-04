@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">Thêm danh mục sản phẩm</header>
            <div class="panel-body">
                 @php
                    $message = session()->get('message');
                    if($message) {
                        echo '<span class="text-alert">'.$message.'</span>';
                        session()->put('message', null);
                    }
                @endphp
                <div class="position-center">
                    <form role="form" method="post" action="{{route('category_product.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục sản phẩm</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="tên danh mục sản phẩm" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục sản phẩm</label>
                            <textarea name="description" style="resize: none" rows="8" class="form-control" id="exampleInputPassword1" placeholder="mô tả danh mục sản phẩm"></textarea>
                        </div>
                        <div class="form-group">
                             <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="status" class="form-control input-sm m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info">Thêm</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
