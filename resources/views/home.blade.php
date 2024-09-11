{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')
    <div>HERO HOME</div>
@endsection

@section('content')
<table class="table">
@foreach ($movies as $movie)
  <tbody>
    <tr>
      <td>{{$movie->id}}</td>
      <td>{{$movie->title}}<</td>
      <td>{{$movie->original_title}}</td>
      <td>{{$movie->nationality}}</td>
      <td>{{$movie->date}}</td>
      <td>{{$movie->vote}}</td>
    </tr>
@endforeach
  </tbody>
</table>

@endsection


