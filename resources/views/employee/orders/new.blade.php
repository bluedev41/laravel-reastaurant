@extends('employee/layouts/employeeLayout')

@section('title', 'Employee Orders')

@section('main_content')

    <div class="container">
        <form method="post">
            <div class="row">
                <div class="col-md-4 order-form">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Table ID</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </div>
                  </div>
                  <div class="col-md-8">
                      <button type="button" class="btn btn-lg cart-button" data-toggle="modal" data-target="#cartModal">
                          <i class="fas fa-shopping-cart"></i>
                          View Cart
                      </button>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-3">
                      <div class="card" style="width: 15rem; margin-bottom: 2rem;">
                        <img class="card-img-top" src="/images/pizza.png" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Pizza</h5>
                          <p class="card-text">Mashroom and pepparoni topings with added mozzarella</p>
                          <button class="btn" style="float: right;"><i class="fas fa-plus"></i> Add to Order</button>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="card" style="width: 15rem; margin-bottom: 2rem;">
                        <img class="card-img-top" src="/images/pizza.png" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Pizza</h5>
                          <p class="card-text">Mashroom and pepparoni topings with added mozzarella</p>
                          <a href="#" class="btn"><i class="fas fa-plus"></i></a>
                          <a href="#" class="btn" style="float: right;"><i class="fas fa-minus"></i></a>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="card" style="width: 15rem; margin-bottom: 2rem;">
                        <img class="card-img-top" src="/images/pizza.png" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Pizza</h5>
                          <p class="card-text">Mashroom and pepparoni topings with added mozzarella</p>
                          <a href="#" class="btn"><i class="fas fa-plus"></i></a>
                          <a href="#" class="btn" style="float: right;"><i class="fas fa-minus"></i></a>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="card" style="width: 15rem; margin-bottom: 2rem;">
                        <img class="card-img-top" src="/images/pizza.png" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Pizza</h5>
                          <p class="card-text">Mashroom and pepparoni topings with added mozzarella</p>
                          <a href="#" class="btn"><i class="fas fa-plus"></i></a>
                          <a href="#" class="btn" style="float: right;"><i class="fas fa-minus"></i></a>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="card" style="width: 15rem; margin-bottom: 2rem;">
                        <img class="card-img-top" src="/images/pizza.png" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Pizza</h5>
                          <p class="card-text">Mashroom and pepparoni topings with added mozzarella</p>
                          <a href="#" class="btn"><i class="fas fa-plus"></i></a>
                          <a href="#" class="btn" style="float: right;"><i class="fas fa-minus"></i></a>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="card" style="width: 15rem; margin-bottom: 2rem;">
                        <img class="card-img-top" src="/images/pizza.png" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Pizza</h5>
                          <p class="card-text">Mashroom and pepparoni topings with added mozzarella</p>
                          <a href="#" class="btn"><i class="fas fa-plus"></i></a>
                          <a href="#" class="btn" style="float: right;"><i class="fas fa-minus"></i></a>
                        </div>
                      </div>
                  </div>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      ...
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
          </form>
    </div>

@endsection
