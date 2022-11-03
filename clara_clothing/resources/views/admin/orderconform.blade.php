@extends('layouts.main')

@section('content')


<h1>Orders</h1>

<br>
<br><hr>

<div class="table-responsive-sm">
    <table class="table">
        <tr>
            <th>cusid</th>
            <th>products</th>
            <th>total</th>
            <th>confirm</th>
            
        </tr>
        @foreach ($order as $o)
        
            <tr>
                <td>{{$o->cusid}}</td>
                <td>{{$o->products}}</td>
                <td>{{$o->total}}</td>
                <td>{{$o->confirm}}</td>
                <td>
                </td>
                <td>
                    <form action="{{ route('ordercon.destroy',$o->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('ordercon.edit',$o->id) }}">Edit</a>

                        @csrf
                        
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
</div>
</div>



@endsection