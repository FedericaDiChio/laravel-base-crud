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
                            <a href="{{ route('comics.show', $comic->id) }}">
                                <img src="{{ $comic->thumb }}" alt="comic-cover">
                            </a>
                        </figure>
                        <address>{{ $comic->series }}</address>
                    </div> 
                    @empty 
                    <p>Non ho trovato fumetti @if(!empty($search)) @endif</p>   
                @endforelse
            </div>
        </div>
    </section>
@endsection