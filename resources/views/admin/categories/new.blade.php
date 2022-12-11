@extends('admin.layouts.adminLayout')

@section('title', 'Admin New Category')

@section('home')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('main_content')
    <!-- Navbar -->
    <div class="container">
        <p class="display-4" style="text-align:center;">Enter the information for new Category</p>
        <hr>
        <div class="row">
            <div class="col-md-10 new-item">
                <form method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Category Name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Category Description" name="description">
                  </div>
                  <button type="submit" class="btn">Create Category</button>
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
