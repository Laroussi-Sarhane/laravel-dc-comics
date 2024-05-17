@extends('layout.main')

@section('content')

<h1>elenco</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">id</th>
        <th scope="col">titolo</th>
        <th scope="col">description</th>
        <th scope="col">series</th>
        <th scope="col"> date</th>
        <th scope="col">type</th>
        <th scope="col">writers</th>

      </tr>
    </thead>
    <tbody>
        @forelse ($products  as $product)
        <tr>
          <th scope="row">1</th>
          <td> {{$product->id}} </td>
          <td> {{$product->title}} </td>
          <td> {{$product->description}} </td>
          <td> {{$product->series}} </td>
          <td> {{$product->sale_date}} </td>
          <td> {{$product->type}} </td>
          <td> {{$product->writers}} </td>

          <td>

            <a href=" {{ route('comics.show',$product->id) }} " class="btn btn-warning "> scopri di piu </a>
          </td>




        </tr>

        @empty
        <h2>non ci sono fumetti di questo genere</h2>
        @endforelse

    </tbody>
  </table>

@endsection
