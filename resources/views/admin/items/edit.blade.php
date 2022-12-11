@extends('admin.layouts.adminLayout')

@section('title', 'Admin Edit Item')

@section('home')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('main_content')
    <!-- Navbar -->
    <div class="container">
        <p class="display-4" style="text-align:center;">Enter the information for new Item</p>
        <hr>
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-8 new-item">
                        {{csrf_field()}}
                        <input type="hidden" name="item_id" value="{{$item->id}}">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Item Name" name="name" value="{{$item->name}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Item Description" name="description" value="{{$item->description}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Item Price" name="price" value="{{$item->price}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Quantity</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Item Quantity" name="quantity" value="{{$item->quantity}}">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlSelect1">Category</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="category">
                              @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$item->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                              @endforeach
                          </select>
                        </div>
                      <button type="submit" class="btn">Update Item</button>
                    @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $err)
                          <li>{{$err}}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class="col-md-4 item-pic">
                    <img src="/storage/itemImages/{{$item->item_image}}" alt="" style="width:100%;">
                    <div class="form-group">
                        <input type="file" name="itemImage">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
