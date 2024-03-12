@extends('layouts.layout')

@section('main')
<main class="p-3">
    <ol>
        @foreach($users as $element)
        <li>Mi chiamo: {{ $element['first-name']}} {{ $element['last-name'] }}</li>
        @endforeach
    </ol>

</main>
@endsection