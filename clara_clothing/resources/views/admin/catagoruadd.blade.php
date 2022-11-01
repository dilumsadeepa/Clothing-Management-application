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
            <form action="{{route('catagory.store')}}" method="POST">
                @csrf
                <div class="mb-3 mt-3">
                  <label for="catagoey" class="form-label">Catagory Name:</label>
                  <input type="text" class="form-control mb-2" id="catagory" placeholder="Enter Sub catagory" name="catagoryname">
                  <input type="text" class="form-control" id="catagory" placeholder="Enter Main catagory" name="main_catagoryname">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>


@endsection
