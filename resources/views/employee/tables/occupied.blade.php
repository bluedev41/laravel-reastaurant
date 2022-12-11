@extends('employee/layouts/employeeLayout')

@section('title', 'Occupied Tables')

@section('main_content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="display-4">
                    Listing Occupied Tables..
                </p>
            </div>
            <div class="col-md-6 new-item">
                <a href="{{route('employee.availableTables')}}" type="button" class="btn btn-lg btn-success" style="float:right; margin-left:1rem;"><i class="fas fa-check"></i> Show Available Tables</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                      <thead>
                        <tr class="table-header table-row">
                          <th scope="col">Table ID</th>
                          <th scope="col">Status</th>
                          <th scope="col">Capacity</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($tables as $table)
                            <tr class="table-row">
                              <th scope="row">{{$table->id}}</th>
                              <td><span class="badge badge-pill {{$table->status == 'Available' ? 'badge-success' : 'badge-danger'}}">{{$table->status}}</span></td>
                              <td scope="row">{{$table->capacity}}</td>
                              <td>
                                  <form method="post">
                                      {{csrf_field()}}
                                      <input type="hidden" name="table_id" value="{{$table->id}}">
                                      <button type="submit" class="btn btn-light">
                                          Toggle Status
                                      </button>
                                      {{-- <a href="{{route('admin.removeTable', ['id' => $table->id])}}" type="submit" class="btn btn-danger">
                                          Remove Table
                                      </a> --}}
                                  </form>
                              </td>
                            </tr>
                            @endforeach
                      </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
