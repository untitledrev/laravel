@extends('index')
@section('title', 'Места')
@section('content')
    <h1><b>Название место:</b> {!! $place->name !!}</h1>
    <p><b>Тип:</b> {!! $place->name_type !!}</p>
    <h2>Фото проекта</h2>
    <div></div>
    <a href="/places" class="label label-success">Все местра</a>
    <a href="/places/{!! $place->id !!}/photos/add" class="label label-success">Добавить фото в проект</a>


    @foreach ($photos as $photo)

        <img style="display: block;width: 50%;    margin: 0 auto;" src="{{  $photo->file }}" alt="">

    @endforeach


@endsection