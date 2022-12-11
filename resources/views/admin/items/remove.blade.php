@extends('admin.layouts.adminLayout')

@section('title', 'Admin Delete Item')

@section('home')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('main_content')
    <!-- Navbar -->
    <div class="container">
        <p class="display-4" style="text-align:center;">Confirm Delete?</p>
        <hr>
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-8 new-item">
                        {{csrf_field()}}
                        <input type="hidden" name="item_id" value="{{$item->id}}">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Item Name" name="name" value="{{$item->name}}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Item Description" name="description" value="{{$item->description}}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Item Price" name="price" value="{{$item->price}}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Quantity</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Item Quantity" name="quantity" value="{{$item->quantity}}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Category</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Item Quantity" name="quantity" value="{{$item->category->name}}" readonly>
                      </div>
                      <button type="submit" class="btn btn-danger">Delete</button>
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
                </div>
            </div>
        </form>
    </div>
@endsection
