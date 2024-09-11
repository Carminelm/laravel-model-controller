{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')
    <div>HERO HOME</div>
@endsection

@section('content')
<div class="container my-5">
    <h1>Home </h1>
    
    <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur totam magni consectetur voluptatem earum, cumque sint dolores non culpa, doloremque nostrum obcaecati iste repellat natus molestias, aperiam ullam eveniet odit.
    </p>
</div>

@endsection


@section('titlePage')
    home
@endsection
