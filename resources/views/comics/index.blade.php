@extends('layouts.main')

@section('content')
    <section id="products">
        <div class="container">
            <div class="blu-square">
                <h1>Current Series</h1>
            </div>            
            <div class="container-card">
                @forelse ($comics as $comic)
                    <div class="card">
                        <figure>
                            <a href=""></a>
                                <img src="{{ $comic->thumb }}" alt="">
                            </a>
                        </figure>
                        <address>{{ $comic->series }}</address>
                    </div>  
                @endforelse
            </div>
            @empty
                <p>Non ci sono fumetti!</p>
            @endempty
        </div>
    </section>
@endsection