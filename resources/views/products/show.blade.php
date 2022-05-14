@extends('layouts.app')

@section('content')


      <div class="card mt-2  ml-5" style="width: 50vh ; margin-left:50vh" >
        <div class="card-header">
         <h4> Product Info</h4>
        </div>
        <div class="card-body " style="width: 50vh">
            <h5 class="card-title">ID : {{ $product->id}}</h5>
          <h5 class="card-title">Title : {{ $product->Title}}</h5>
          <h5 class="card-title">Description : {{ $product->Description}}</h5>
          <h5 class="card-title">Price : {{ $product->Price}}</h5>

        </div>
      </div>
      <div class="pull-right" style="margin-left:50vh">
        <a class="btn btn-dark mt-5 ml-5" href="{{ route('home') }}"> Back</a>
    </div>
@endsection


@section('pageName') This Is The New Page Name @endsection
