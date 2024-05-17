@extends('layout.main')

@section('content')

<h1> {{$product->titolo}} </h1>

@dump($comic);



@endsection

@section('title')
    Home
@endsection
