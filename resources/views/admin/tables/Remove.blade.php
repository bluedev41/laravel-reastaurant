@extends('admin.layouts.adminLayout')

@section('title', 'Admin Remove Table')

@section('home')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('main_content')
    <!-- Navbar -->
    <div class="container">
        <p class="display-4" style="text-align:center;">Remove Table?</p>
        <hr>
        <div class="row">
            <div class="col-md-10 new-item">
                <form method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="table_id" value="{{$table->id}}" readonly>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Category Name" name="status" value="{{$table->status}}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Capacity</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Category Description" name="capacity" value="{{$table->capacity}}" readonly>
                  </div>
                  <button type="submit" class="btn">Remove Table</button>
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
