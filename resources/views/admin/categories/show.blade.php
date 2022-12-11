@extends('admin.layouts.adminLayout')

@section('title', 'Admin Show Categories')

@section('main_content')

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <p class="display-4">Showing Categories</p>
            </div>
            <div class="col-md-2">
                <div class="new-item">
                    <a href="{{route('admin.newCategory')}}" class="btn my-2 my-sm-0 btn-lg" style="float:right;" type="submit"><i class="fa fa-plus"></i> New Category</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12">
                  <table class="table table-striped">
                        <thead>
                          <tr class="table-header table-row">
                            <th scope="col">Category Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Total Items</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)

                              <tr class="table-row">
                                <td>{{$category->name}}</th>
                                <td>{{$category->description}}</td>
                                <td>{{count($category->items)}}</td>
                                <td>
                                    <a href="{{route('admin.editCategory', ['id'=>$category->id])}}" type="button" class="btn btn-info">
                                        Edit
                                    </a>
                                    <a href="{{route('admin.removeCategory', ['id'=>$category->id])}}" type="button" class="btn btn-danger">
                                        Delete
                                    </a>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection
