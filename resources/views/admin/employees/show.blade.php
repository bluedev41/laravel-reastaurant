@extends('admin.layouts.adminLayout')

@section('title', 'Admin Show Employees')

@section('main_content')

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <p class="display-4">Employees..</p>
            </div>
            <div class="col-md-5">
                <form method="post" class="form-inline order-form">
                    {{csrf_field()}}
                    <select class="input-group-text dropbar" id="inputGroupSelect01" name="searchBy">
                            <option selected>Search By...</option>
                            <option value="name">Name</option>
                            <option value="email">Email</option>
                            <option value="phone">Phone</option>
                            <option value="address">Address</option>
                            <option value="gender">Gender</option>
                            <option value="created_at">Date Joined</option>
                    </select>
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="word">
                    <button class="btn my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div class="new-item">
                    <a href="{{route('admin.newEmployee')}}" class="btn my-2 my-sm-0 btn-lg" style="float:right;" type="submit"><i class="fa fa-plus"></i> New Employee</a>
                </div>
            </div>
        </div>
        <hr>
          <div class="row">
              <div class="col-md-12">
                  <table class="table table-striped">
                        <thead>
                          <tr class="table-header table-row">
                            <th scope="col">Employee Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Date Joined</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                                <tr class="table-row">
                                    @if($employee->is_admin)
                                        <?php continue; ?>
                                    @endif
                                    <td>{{$employee->name}}</td>
                                    <td>{{$employee->email}}</td>
                                    <td>{{$employee->phone}}</td>
                                    <td>{{$employee->address}}</td>
                                    <td>{{$employee->gender}}</td>
                                    <td>{{$employee->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin.editEmployee', ['id' => $employee->id])}}" type="button" class="btn btn-info">Edit</a>
                                        <a href="{{route('admin.removeEmployee', ['id' => $employee->id])}}" type="button" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                  </table>
              </div>
          </div>
    </div>

@endsection
