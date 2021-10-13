<form method="GET">
    @csrf
    <div>
        <label for="title">Titolo fumetto</label>
        <input type="text" id="title" name="title">
    </div>
    <div>
        <label for="price">Prezzo</label>
        <input type="number" min="0" max="100" step="0.01" id="price" name="price">
    </div>
    <div>
        <label for="series">Serie</label>
        <input type="text" id="series" name="series">
    </div>
    <div>
        <label for="type">Tipologia</label>
        <select name="type" id="type">
            <option value="">Comic Book</option>
            <option value="">Graphic Novel</option>
        </select>
        
    </div>
    <div>
        <label for="sale_date">Data uscita</label>
        <input type="date" id="sale_date" name="sale_date">
    </div>
    <div>
        <label for="title">Descrizione</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>
    <div>
        <button type="submit">Inserisci fumetto</button>
    </div>
</form>