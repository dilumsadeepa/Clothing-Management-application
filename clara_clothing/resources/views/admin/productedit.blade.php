@extends('layouts.main')

@section('content')

    <div class="row">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach
            </ul>
        </div>
        @endif

        <div class="col-sm-12">
            <form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 mt-3">
                  <label for="name" class="form-label">Product Name:</label>
                  <input type="text" class="form-control" value="{{$product->name}}" id="name" placeholder="Enter Product Name" name="name">
                </div>

                <div class="mb-3 mt-3">
                    <label for="catagoey" class="form-label">Catagory Name:</label>
                    <select class="form-select" name="catagory">
                        <option value="{{$product->catagory}}">{{$product->catagory}}"</option>
                        @foreach ($catagory as $c)
                            <option value="{{$c->catagoryname}}">{{$c->catagoryname}}</option>
                        @endforeach

                      </select>
                  </div>

                  <div class="mb-3 mt-3">
                    <label for="image" class="form-label">Select image:</label>
                    <!--input type="file" class="form-control" id="image" name="image" accept="image/*"-->
                    <input type="hidden" value="{{$product->image1}}" name="image1">
                    <input type="hidden" value="{{$product->image2}}" name="image2">
                    <input type="hidden" value="{{$product->image3}}" name="image3">
                    <img src="{{asset('uploads/'.$product->image1)}}" class="img-fluid" style="width: 50px;">
                  </div>

                  <div class="mb-3 mt-3">
                    <label for="price" class="form-label">Product Price:</label>
                    <input type="text" class="form-control" value="{{$product->price}} " id="price" placeholder="Enter Product Price" name="price">
                  </div>

                  <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Product Size:</label>
                    <select class="form-select" name="size">
                        <option value="{{$product->size}}">{{$product->size}}"</option>
                        <option value="Small">Small</option>
                        <option value="Medium">Medium</option>
                        <option value="Large">Large</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                      </select>
                  </div>

                  <div class="mb-3 mt-3">
                    <label for="code" class="form-label">Product Code:</label>
                    <input type="text" class="form-control" value="{{$product->code}}" id="code" placeholder="Enter Product Code" name="code">
                  </div>

                  <div class="mb-3 mt-3">
                    <label for="price" class="form-label">Product Description:</label>
                    <textarea class="form-control" rows="5" id="des" name="des">{{$product->des}}"</textarea>
                  </div>

                  <div class="mb-3 mt-3">
                    <label for="status" class="form-label">Product Status:</label>
                    <select class="form-select" name="status">
                        <option value="{{$product->status}}">{{$product->status}}"</option>
                        <option value="Available">Available</option>
                        <option value="Unavailable">Unavailable</option>
                      </select>
                  </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>


@endsection