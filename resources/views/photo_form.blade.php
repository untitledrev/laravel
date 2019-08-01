@extends('index')
@section('title', 'Добавить место')
@section('content')
<h1>Добавить фото</h1>
    <form action="/places/{!! $id !!}/photos/add"  method="post" enctype='multipart/form-data'>
        @csrf
        <div class="name_block_" >
            <label for="name">Выбирите фото для загрузки</label>
            <input class="form-control" type="file" name="file" value="" >
        </div>

        <br>
        <div class="name_block_">
            <button name="otpravet" value="Добавить место" class="btn btn-primary" type="submit">Добавить фото</button>
        </div>
    </form>


@endsection