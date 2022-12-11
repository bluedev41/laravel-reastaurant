@extends('admin.layouts.adminLayout')

@section('title', 'Admin New Item')

@section('home')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('main_content')
    <!-- Navbar -->
    <div class="container">
        <p class="display-4" style="text-align:center;">Enter the information for new Item</p>
        <hr>
        <div class="row">
            <div class="col-md-10 new-item">
                <form method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Item Name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Item Description" name="description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Item Price" name="price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Quantity</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Item Quantity" name="quantity">
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Category</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="category">
                          <option value="" selected>Choose one</option>
                          @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                        <input type="file" name="itemImage">
                    </div>
                  <button type="submit" class="btn">Add Item</button>
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
