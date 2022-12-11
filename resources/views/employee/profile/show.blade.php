@extends('employee.layouts.employeeLayout')

@section('title', 'Employee Profile')

@section('home')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('main_content')
    <!-- Navbar -->
    <div class="container">
        <p class="display-4" style="text-align:center;">Your Profile</p>
        <hr>
        <!-- <form method="post" enctype="multipart/form-data"> -->
            <div class="row">
                <div class="col-md-8 new-item">
                        {{csrf_field()}}
                        <input type="hidden" name="employee_id" value="{{$employee->id}}">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Name</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Employee Name" name="name" value="{{$employee->name}}" readonly>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Email</label>
                          <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Employee Email" name="email" value="{{$employee->email}}" readonly>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Phone</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Employee Phone" name="phone" value="{{$employee->phone}}" readonly>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Address</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Employee Address" name="address" value="{{$employee->address}}" readonly>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Gender</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Gender" name="address" value="{{$employee->gender}}" readonly>
                        </div>
                      <a href="{{route('admin.editProfile')}}" type="button" class="btn">Edit Profile</a>
                    @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $err)
                          <li>{{$err}}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class="col-md-4 item-pic">
                    <img src="/storage/employeeImages/{{$employee->employee_image}}" alt="" style="width:100%;">
                </div>
            </div>
        <!-- </form> -->
    </div>
@endsection
