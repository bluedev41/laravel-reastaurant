@extends('admin.layouts.adminLayout')

@section('title', 'Admin Edit Employee')

@section('home')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('main_content')
    <!-- Navbar -->
    <div class="container">
        <p class="display-4" style="text-align:center;">Edit the information for {{$employee->name}}</p>
        <hr>
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-8 new-item">
                        {{csrf_field()}}
                        <input type="hidden" name="employee_id" value="{{$employee->id}}">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Name</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Employee Name" name="name" value="{{$employee->name}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Email</label>
                          <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Employee Email" name="email" value="{{$employee->email}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Phone</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Employee Phone" name="phone" value="{{$employee->phone}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Employee Password" name="password" value="{{$employee->password}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Address</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Employee Address" name="address" value="{{$employee->address}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Gender</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="gender">
                                <option value="Male" {{$employee->gender == 'Male' ? 'selected' : ''}}>Male</option>
                                <option value="Female" {{$employee->gender == 'Female' ? 'selected' : ''}}>Female</option>
                            </select>
                        </div>
                      <button type="submit" class="btn">Update Employee</button>
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
                    <div class="form-group">
                        <input type="file" name="employeeImage">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
