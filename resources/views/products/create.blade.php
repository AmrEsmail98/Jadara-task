@extends('layouts.app')

@section('pageName') Create @endsection

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{route('products.store')}}" class="mt-5">
    @csrf

    <div class="form-group">
      <label  style="margin-left: 20vh">Title</label>
      <input style="width: 90vh; margin-left: 20vh" name="Title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
      <label style="margin-left: 20vh ; margin-top: 3vh;" for="exampleInputPassword1">Description</label>
      <textarea style="margin-left: 20vh;width: 90vh" name="Description" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label style="margin-left: 20vh; margin-top: 3vh;" for="exampleInputPassword1">Price</label>
        <input style="margin-left: 20vh;width: 90vh" name="Price" class="form-control">

        </select>
      </div>

    <button style="margin-left: 90vh;margin-top: 10vh" type="submit" class="btn btn-success">Submit</button>
  </form>
@endsection
