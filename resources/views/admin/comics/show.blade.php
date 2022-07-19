@extends('admin.templates.base')

@section('mainContent')
    {{--nocili --}}
    <h1>Bellissimo fumetto con id {{$comic->id}}</h1>

    <table>
        <thead>
            <th>
                <tr>
                    <th>Campo</th>
                    <th>Valore</th>
                </tr>
            </th>
        </thead>
        <tbody>
            @foreach ($comic->toArray() as $key=>$value)
            <tr>
                <td>{{ $key }}</td>
                <td>{{ $value }}</td>               
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection