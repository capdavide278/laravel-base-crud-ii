@extends('admin.templates.base')

@section('mainContent')
    <h1>Insert new comic</h1>

    <form action="{{route('comics.store')}}" method="post">
        @csrf

        <div>
            <label for="autore">autore</label>
            <input type="text" name="autore" id="autore">
        </div>

        <div>
            <label for="descrizione">descrizione</label>
            <input type="text" name="descrizione" id="descrizione">
        </div>

        <div>
            <label for="genere">genere</label>
            <input type="text" name="genere" id="genere">
        </div>

        <div>
            <label for="price">price</label>
            <input type="price" name="price" id="price">
        </div>

        <button>Save</button>
    </form>
@endsection