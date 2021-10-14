@extends('layouts.main')

@section('content')
<section class="container-small">
    <div class="row">
        <div class="col-left">
            <h1>{{ $comic->title }}</h1>
            {{-- CHANGE  --}}
            <div class="btn-change">
                <a href="{{route('comics.edit', $comic->id)}}">Change <i class="fas fa-pencil-alt"></i></a>
            </div>
            {{-- BUTTON DELETE  --}}
            <div class="btn-delete">
                <form method="POST" action="{{route('comics.destroy', $comic->id)}}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="cancel-btn">Delete</button>
                </form>
            </div>
            {{-- PRODUCT SHOW  --}}
            <div class="green-box">
                <span class="us-price">U.S. Price: </span>
                <span class="price">${{ $comic->price }}</span>
            </div>    
            <div class="description">
                <p>{{ $comic->description }}</p>
            </div> 
        </div>  
        <div class="col-right">
            <p class="adv">Advertisement</p>
            <img src="{{ asset('images/adv.jpg') }}" alt="">
        </div>
    </div>
</section>



@endsection