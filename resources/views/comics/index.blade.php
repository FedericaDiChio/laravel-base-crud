@extends('layouts.main')

@section('content')
    <section id="products">
        <div class="container">
            <div class="blu-square">
                <h1>Current Series</h1>
            </div>            
            <div class="container-card">
                @foreach ($comics as $comic)
                    <div class="card">
                        <figure>
                            <a href="{{ route('comics.show', $comic->id) }}">
                                <img src="{{ $comic->thumb }}" alt="">
                            </a>
                        </figure>
                        <address>{{ $comic->series }}</address>
                    </div>  
                @endforeach
            </div>
        </div>
    </section>
@endsection