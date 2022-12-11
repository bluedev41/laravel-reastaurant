@extends('employee/layouts/employeeLayout')

@section('title', 'Employee Orders')

@section('main_content')

    <div class="container orders">
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-lg add-button"><i class="fas fa-plus"></i> New Order</button>
                <p class="display-4">Orders..</p>
                <form class="form-inline">
                    <select class="input-group-text dropbar" id="inputGroupSelect01" name="searchBy">
                            <option selected>Search By...</option>
                            <option value="table_id">Table ID</option>
                            <option value="price">Price</option>
                            <option value="item">Item</option>
                    </select>
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                      <thead>
                        <tr class="table-header table-row">
                          <th scope="col">Table ID</th>
                          <th scope="col">Price</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="table-row">
                          <th scope="row">1</th>
                          <td>300</td>
                          <td>
                              <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                                  Show Details
                              </button>
                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                  Edit
                              </button>
                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                  Delete
                              </button>
                          </td>
                        </tr>
                        <tr class="table-row">
                          <th scope="row">2</th>
                          <td>300</td>
                          <td>
                              <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                                  Show Details
                              </button>
                          </td>
                        </tr>
                        <tr class="table-row">
                          <th scope="row">3</th>
                          <td>300</td>
                          <td>
                              <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                                  Show Details
                              </button>
                          </td>
                        </tr>
                        <tr class="table-row">
                          <th scope="row">4</th>
                          <td>300</td>
                          <td>
                              <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                                  Show Details
                              </button>
                          </td>
                        </tr>
                        <tr class="table-row">
                          <th scope="row">5</th>
                          <td>300</td>
                          <td>
                              <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                                  Show Details
                              </button>
                          </td>
                        </tr>
                      </tbody>
                </table>
            </div>
        </div>

                <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Order Details</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p class="h5">Items <span style="margin-left:12rem;">Unit Price</span><span style="float:right;">Quantity</span></p>
                <p>Perry Perry Chicken<span style="margin-left:12rem;">300</span> <span style="float:right;">4</span></p>
                <p>Double cheese burger <span style="margin-left:12rem;">600</span><span style="float:right;">2</span></p>
                <p>Margharitta pizza <span style="margin-left:12rem;">1300</span><span style="float:right;">1</span></p>
                <p>Coca-cola <span style="margin-left:12rem;">35</span><span style="float:right;">4</span></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
    </div>

@endsection
