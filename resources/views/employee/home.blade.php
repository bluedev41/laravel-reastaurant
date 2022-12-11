@extends('employee/layouts/employeeLayout')

@section('title', 'Employee Home')

@section('main_content')
{{--func and loops for report  --}}

{{-- variables --}}
 @php
     $countAvailable=0
 @endphp
{{-- loops --}}
    @foreach ($tables as $tb)
           @if($tb->status=='Available')
           @php
               $countAvailable+=1
           @endphp
           @endif
    @endforeach
{{--  --}}
    <div class="container">
        <p class="display-4" style="padding-top:2rem;">Today's Summary</p>
        <hr>
        <div class="row">
            <div class="col-md-12 alerts">
                <div class="alert" role="alert">
                <p>Total Tables: <span style="float:right;">{{count($tables)}}</span></p>
                </div>
                <div class="alert" role="alert">
                    <p>Patrons served today: <span style="float:right;"></span></p>
                </div>
                <div class="alert" role="alert">
                    <p>Total Revenue: <span style="float:right;"></span></p>
                </div>
                <div class="alert" role="alert">
                    <p>Available Tables: <span style="float:right;">{{$countAvailable}}</span></p>
                </div>
                <div class="alert" role="alert">
                    <p>Most Ordered Dish: <span style="float:right;"> ...  | Times: </span></p>
                </div>
                <div class="alert" role="alert">
                    <p>Least Ordered Dish: <span style="float:right;"> ...  | Times: </span></p>
                </div>
            </div>
        </div>
    </div>

@endsection
