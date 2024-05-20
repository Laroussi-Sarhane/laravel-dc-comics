@extends('layout.main')

@section('content')

<h1> {{$comic->titolo}} </h1>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>{{$comic->titolo}}</h1>
            <p>{{$comic->description}}</p>
            <p>{{$comic->price}}</p>
            <p>{{$comic->series}}</p>




        </div>

    </div>

</div>





@endsection
