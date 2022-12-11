@extends('admin.layouts.adminLayout')

@section('title', 'Admin Show Items')

@section('main_content')

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <p class="display-4">Choose a table and add order..</p>
            </div>
            <div class="col-md-2">
                <div class="new-item">
                    <a href="{{route('admin.newItem')}}" class="btn my-2 my-sm-0 btn-lg" style="float:right;" type="submit"><i class="fas fa-shopping-cart"></i> View Orders</a>
                </div>
            </div>
        </div>
        <hr>
        <form method="post">
            {{csrf_field()}}
            <div class="form-group col-md-5">
              <label for="exampleFormControlSelect1">Select from available tables..</label>
              <select class="form-control" id="exampleFormControlSelect1" name="table_id">
                  @foreach($tables as $table)
                    <option value="{{$table->id}}">{{$table->id}}</option>
                  @endforeach
              </select>
            </div>
          <div class="row">
                  @foreach($categories as $category)
                    @foreach($category->items as $item)
                        <div class="col-md-3">
                            <div class="card">
                              <img class="card-img-top" src="/storage/itemImages/{{$item->item_image}}" alt="Card image cap">
                              <div class="card-body">
                                  <input type="hidden" name="item_id" value="{{$item->id}}">
                                <h5 class="card-title">Category: {{$category->name}}</h5>
                                <p class="card-text">{{$item->name}}</p>
                                <span class="h5">{{$item->price}}TK</span>
                                <span class="h5" style="float:right;">QTY: {{$item->quantity}}</span>
                                <p class="text-muted">{{$item->description}}</p>
                                <button type="submit" class="btn" style="float:right;"><i class="fa fa-plus"></i> Add to Order</button>
                              </div>
                            </div>
                        </div>
                    @endforeach
                  @endforeach
          </div>
      </form>
    </div>

@endsection
