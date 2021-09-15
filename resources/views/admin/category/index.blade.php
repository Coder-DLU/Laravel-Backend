<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('partials.content-header',['name'=>'category', 'key'=>'List'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @can('category_add')
                        <a href="{{ route('categories.create') }}" class="btn btn-success float-right mr-2">add</a>
                        @endcan
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên danh mục sản phẩm</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($categories as $category)

                            <tr>
                                <th scope="row">{{$category->id}}</th>
                                <td>{{ $category->name }}</td>
                                <td>
                                    @can('category_edit')
                                    <a href="{{ route('categories.edit', ['id'=>$category->id]) }}"
                                       class="btn btn-default">Edit</a>
                                    @endcan
                                    @can('category_delete')
                                    <a href="{{ route('categories.delete', ['id'=>$category->id]) }}"
                                       class="btn btn-danger">Delete
                                    </a>@endcan
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $categories->links() }}
                    </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


