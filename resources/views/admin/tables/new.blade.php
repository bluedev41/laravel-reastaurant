@extends('admin.layouts.adminLayout')

@section('title', 'Admin New Table')

@section('home')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('main_content')
    <!-- Navbar -->
    <div class="container">
        <p class="display-4" style="text-align:center;">Enter info for New Table</p>
        <hr>
        <div class="row">
            <div class="col-md-10 new-item">
                <form method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                      <input type="hidden" name="category_id">
                      <div class="form-group">
                          <label for="exampleFormControlSelect1">Status</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="status">
                              <option selected>Choose one</option>
                              <option value="Available">Available</option>
                              <option value="Occupied">Occupied</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Capacity</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Table Capacity" name="capacity">
                      </div>
                      <button type="submit" class="btn">Add Table</button>
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
