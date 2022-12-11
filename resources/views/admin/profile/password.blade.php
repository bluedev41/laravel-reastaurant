@extends('admin.layouts.adminLayout')

@section('title', 'Admin Change Password')

@section('home')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('main_content')
    <!-- Navbar -->
    <div class="container">
        <p class="display-4" style="text-align:center;">Change Password</p>
        <hr>
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-10 new-item">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label for="exampleInputEmail1">Old Password</label>
                          <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your old Password" name="oldPass" value="">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">New Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter a new Password" name="newPass" value="">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Confirm Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Re-enter new Password" name="confirmPass" value="">
                        </div>
                      <button type="submit" class="btn">Change Password</button>
                    @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $err)
                          <li>{{$err}}</li>
                        @endforeach
                    </ul>
                    @endif
                    @if(session('message'))
  		                {{session('message')}}
                    @endif
                </div>
            </div>
        </form>
    </div>
@endsection
