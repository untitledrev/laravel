@extends('index')
@section('title', 'Места ')
@section('content')
    <table class="table">
        @foreach ($plases as $plase)
        <tr>
            <td> {{ $plase->name }} </td>
            <td> {{ $plase->name_type }} </td>
            <td><a href="/places/{{ $plase->id}}">Посмотреть фото места</a></td>
        </tr>
        @endforeach
    </table>
    <a href="places/create" class="label label-success">Добавить новое место</a>
@endsection