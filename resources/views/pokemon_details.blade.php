<!DOCTYPE html>
<html lang="en">
<h@extends('layouts.app')

@section('content')
    <h1>{{ ucfirst($pokemon['name']) }}</h1>
    <img src="{{ $pokemon['sprites']['front_default'] }}" alt="{{ $pokemon['name'] }}">
    <ul>
        <li>Gewicht: {{ $pokemon['weight'] }}</li>
        <li>Größe: {{ $pokemon['height'] }}</li>
        <li>Typen:
            <ul>
                @foreach ($pokemon['types'] as $type)
                    <li>{{ $type['type']['name'] }}</li>
                @endforeach
            </ul>
        </li>
    </ul>
@endsection
