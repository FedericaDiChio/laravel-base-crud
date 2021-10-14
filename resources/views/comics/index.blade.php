@extends('layouts.main')

@section('content')
    <section id="products">
        <div class="container">
            <div class="blu-square">
                <h1>Current Series</h1>
            </div>            
            {{-- PRODUCT INDEX  --}}
            <div class="container-card">
                @forelse ($comics as $comic)
                
                    <div class="card">
                        <figure>
                            <a href="{{ route('comics.show', $comic->id) }}">
                                <img src="{{ $comic->thumb }}" alt="comic-cover">
                            </a>
                        </figure>
                        <address>{{ $comic->series }}</address>
                        {{-- BUTTON DELETE  --}}
                        <div >
                            <form method="POST" action="{{route('comics.destroy', $comic->id)}}">
                                @method('DELETE')
                                @csrf
                            <button type="submit" class="cancel-btn">Delete</button>
                            </form>
                        </div>
                    </div> 
                    @empty 
                    <p>Non ho trovato fumetti @if(!empty($search)) @endif</p>   
                @endforelse
            </div>
            <div>
                
            </div>
        </div>
    </section>
@endsection