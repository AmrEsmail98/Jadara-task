@extends('layouts.app')

@section('content')
<form method="POST" action="{{route('products.update',$Product->id)}} " class="mt-5">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label style="margin-left: 20vh" for="exampleInputEmail1">Title</label>
      <input  style="margin-left: 20vh;;width: 90vh" value={{$Product->Title}} name="Title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
      <label style="margin-left: 20vh" for="exampleInputPassword1">Description</label>
      <textarea  style="margin-left: 20vh;;width: 90vh" name="Description" class="form-control">{{$Product->Description}}</textarea>

    </div>

    <div class="form-group">
        <label style="margin-left: 20vh" for="exampleInputPassword1">Price</label>
        <input style="margin-left: 20vh;;width: 90vh" name="Price" value="{{$Product->Price}}" class="form-control">


      </div>

    <button  style="margin-left: 50vh"type="submit" class="btn btn-dark">Updata</button>
  </form>
@endsection
