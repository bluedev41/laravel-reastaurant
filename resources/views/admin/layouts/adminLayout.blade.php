<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
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
              <a class="nav-link" href="{{route('admin.home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Orders</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">View Orders</a>
                  <a class="dropdown-item" href="{{route('admin.newOrder')}}">Add Order</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Employees</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{route('admin.showEmployees')}}">View Employees</a>
                  <a class="dropdown-item" href="{{route('admin.newEmployee')}}">Add Employee</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categories</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{route('admin.showCategories')}}">View Categories</a>
                  <a class="dropdown-item" href="{{route('admin.newCategory')}}">Add Category</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Items</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{route('admin.showItems')}}">View Items</a>
                  <a class="dropdown-item" href="{{route('admin.newItem')}}">Add Item</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tables</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{route('admin.showTables')}}">View Tables</a>
                  <a class="dropdown-item" href="{{route('admin.showAvailableTables')}}">Show Available Tables</a>
                  <a class="dropdown-item" href="{{route('admin.showOccupiedTables')}}">Show Occupied Tables</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{route('admin.newTable')}}">Add Table</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{route('admin.showProfile')}}">View Profile</a>
                  <a class="dropdown-item" href="{{route('admin.editProfile')}}">Edit Profile</a>
                  <a class="dropdown-item" href="{{route('admin.editPassword')}}">Change Password</a>
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
</html>
