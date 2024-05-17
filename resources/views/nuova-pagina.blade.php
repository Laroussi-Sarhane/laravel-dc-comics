@extends('layout.main')

@section('content')

<h1>Nuova Pagina</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($products as $product )

        <tr>
          <th scope="row">1</th>
          <td> {{ $product->id}} </td>
          <td> {{ $product->title}} </td>
          <td> {{ $product->description}} </td>
          <td> {{ $product->series}} </td>
          <td> {{ $product->sale_date}} </td>
          <td> {{ $product->type}} </td>
          <td> {{ $product->writers}} </td>
        </tr>
        @empty

        @endforelse
    </tbody>
    </table>

@endsection

@section('title')
Nuova pagina





@endsection
