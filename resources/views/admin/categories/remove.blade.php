@extends('admin.layouts.adminLayout')

@section('title', 'Admin Delete Category')

@section('home')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('main_content')
    <!-- Navbar -->
    <div class="container">
        <p class="display-4">There are items in this category. Are you sure you want to delete this category?</p>
        <p class="h4">Note: The items will not be deleted!</p>
        <hr>
        <div class="row">
            <div class="col-md-10 new-item">
                <form method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="category_id" value="{{$category->id}}">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Category Name" name="name" value="{{$category->name}}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Category Description" name="description" value="{{$category->description}}" readonly>
                  </div>
                  <button type="submit" class="btn btn-danger">Delete Category</button>
                </form>
                @if($errors->any())
                <ul>
                    @foreach($errors->all() as $err)
                      <li>{{$err}}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>
@endsection
