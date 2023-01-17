@extends('layouts.app')
@section('main-content')
    <div class="container">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Numero treno</th>
                    <th scope="col">Destinazione</th>
                    <th scope="col">Data e orario di partenza</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($Trains as $elem)
                        <td>{{ $elem->train_number }}</td>
                        <td>{{ $elem->destination }}</td>
                        <td>{{ $elem->departure_time }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
