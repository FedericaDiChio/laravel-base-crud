@if($comic->exists)
    <form method="POST" action="{{route('comics.update', $comic->id)}}">
        @method('PATCH')
@else 
    <form method="POST" action="{{route('comics.store')}}">
@endif        
    @csrf
        <div>
            <label for="title">Titolo fumetto</label>
            <input type="text" id="title" name="title" value="{{ $comic->title}}">
        </div>
        <div>
            <label for="price">Prezzo</label>
            <input type="number" min="0" max="100" step="0.01" id="price" name="price" value="{{ $comic->price}}">
        </div>
        <div>
            <label for="series">Serie</label>
            <input type="text" id="series" name="series" value="{{ $comic->series}}">
        </div>
        <div>
            <label for="type">Tipologia</label>
            <select name="type" id="type">
                <option @if ($comic->type === 'Comic Book') selected @endif>Comic Book</option>
                <option @if ($comic->type === 'Graphic Novel') selected @endif>Graphic Novel</option>
            </select>
            
        </div>
        <div>
            <label for="sale_date">Data uscita</label>
            <input type="date" id="sale_date" name="sale_date" value="{{ $comic->sale_date}}">
        </div>
        <div>
            <label for="thumb">Inserisci un'immagine</label>
            <input type="text" id="thumb" name="thumb" value="{{ $comic->thumb}}">
        </div>
        <div>
            <label for="decription">Descrizione</label>
            <textarea  id="description" name="description" cols="30" rows="10">{{ $comic->description}}</textarea>
            
        </div>
        <div>
            <button type="submit">Inserisci fumetto</button>
        </div>
    </form>
</form>