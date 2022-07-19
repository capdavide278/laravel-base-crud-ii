@extends('admin.templates.base')

@section('mainContent')
    <main>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>autore</th>
                    <th>descrizione</th>
                    <th>genere</th>
                    <th>price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->autore }}</td>
                        <td>{{ $comic->descrizione }}</td>
                        <td>{{ $comic->genere }}</td>
                        <td>{{ $comic->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection