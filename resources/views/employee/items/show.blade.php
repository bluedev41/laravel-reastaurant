@extends('employee/layouts/employeeLayout')

@section('title', 'Employee Categories')

@section('main_content')

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <p class="display-4">Showing items by Category..</p>
            </div>
            <div class="col-md-2">
                <!-- <form method="post" class="form-inline order-form">
                    <select class="input-group-text dropbar" id="inputGroupSelect01" name="searchBy">
                            <option selected>Search By...</option>
                            <option value="table_id">Table ID</option>
                            <option value="price">Price</option>
                            <option value="item">Item</option>
                    </select>
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn my-2 my-sm-0" type="submit">Search</button>
                </form> -->
                
            </div>
        </div>
        <hr>
          <div class="row">
              @foreach($categories as $category)
                @foreach($category->items as $item)
                <div class="col-md-3">
                    <div class="card" style="width: 15rem; margin-bottom: 2rem;">
                      <img class="card-img-top" src="/storage/itemImages/{{$item->item_image}}" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Category: {{$category->name}}</h5>
                        <p class="card-text">{{$item->name}}</p>
                        <span class="h5">{{$item->price}}TK</span>
                        <span class="h5" style="float:right;">QTY: {{$item->quantity}}</span>
                        <p class="text-muted">{{$item->description}}</p>
                        
                        <a href="#" class="btn" style="float: left;"><i class="fas fa-edit"></i> Add</a>
                      </div>
                    </div>
                </div>
                @endforeach
              @endforeach
          </div>
    </div>

@endsection
