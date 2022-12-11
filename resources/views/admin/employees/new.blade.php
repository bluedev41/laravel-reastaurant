@extends('admin.layouts.adminLayout')

@section('title', 'Admin Create Employee')

@section('home')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('main_content')
    <!-- Navbar -->
    <div class="container">
        <p class="display-4" style="text-align:center;">Enter the information for new Employee</p>
        <hr>
        <div class="row">
            <div class="col-md-10 new-item">
                <form method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Employee Name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Employee Email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Employee Phone" name="phone">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Employee Password" name="password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Employee Address" name="address">
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Gender</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="gender">
                          <option selected>Choose one</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                      </select>
                  </div>
                    <div class="form-group">
                        <input type="file" name="employeeImage">
                    </div>
                  <button type="submit" class="btn">Create Employee</button>
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
