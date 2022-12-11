<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/employee.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <title>@yield('title')</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <a class="navbar-brand" href="#">Bill the Butcher's Restaurant</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse nav-holders" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('employee.home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Orders</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{route('employee.showOrders')}}">View Orders</a>
                  <a class="dropdown-item" href="{{route('employee.newOrder')}}">Add Order</a>
                  <a class="dropdown-item" href="#">Edit Order</a>
                  <a class="dropdown-item" href="#">Delete Order</a>
                </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('employee.showCategories')}}">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('employee.items.show')}}">Items</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tables</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{route('employee.availableTables')}}">View Available Tables</a>
                  <a class="dropdown-item" href="{{route('employee.occupiedTables')}}">View Occupied Tables</a>
                  <a class="dropdown-item" href="{{route('employee.tables.show')}}">View All Tables</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
                <div class="dropdown-menu">
                  {{-- <a class="dropdown-item" href="#">View Profile</a>
                  <a class="dropdown-item" href="#">Edit Profile</a>
                  <a class="dropdown-item" href="#">Change Profile Picture</a>
                  <a class="dropdown-item" href="#">Change Password</a> --}}
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                </div>
            </li>
          </ul>
        </div>
    </nav>
    @yield('main_content')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </body>
</html>
