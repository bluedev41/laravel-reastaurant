@extends('employee/layouts/employeeLayout')

@section('title', 'Employee Categories')

@section('main_content')

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <p class="display-4">Showing Categories</p>
            </div>
            <div class="col-md-2">
                <div class="new-item">
                    
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12">
                  <table class="table table-striped">
                        <thead>
                          <tr class="table-header table-row">
                            <th scope="col">Category Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Total Items</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)

                              <tr class="table-row">
                                <td>{{$category->name}}</th>
                                <td>{{$category->description}}</td>
                                <td>{{count($category->items)}}</td>
                                <td>
                                    
                                    <a href="#" type="button" class="btn btn-danger">
                                        Add
                                    </a>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection
