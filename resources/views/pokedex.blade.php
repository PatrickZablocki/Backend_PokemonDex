@extends('layouts.app')

@section('content')
    <h1>Pokédex</h1>
    <ul>
        @foreach ($pokemons as $pokemon)
            <li>
                <a href="{{ url('pokemon', [$loop->index + 1]) }}">
                    {{ $pokemon['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
