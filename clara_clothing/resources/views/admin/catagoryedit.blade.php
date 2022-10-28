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
            @foreach ($cat as $c)

            <form action="{{route('catagory.update', $c->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 mt-3">
                  <label for="catagoey" class="form-label">Catagory Name:</label>
                  <input type="text" class="form-control" id="catagory" value="{{$c->id}}" placeholder="Enter catagory" name="catagoryname">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              @endforeach
        </div>
    </div>


@endsection
