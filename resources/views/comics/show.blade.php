@extends('layouts.main')

@section('content')
<section class="container">
    <h1>{{ $comic->title }}</h1>
    <div>{{ $comic->price }}</div>
    <p>{{ $comic->description }}</p>

    </section>



@endsection