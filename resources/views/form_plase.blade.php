@extends('index')
@section('title', 'Добавить место')
@section('content')

    <form action="/places/create"  method="post">
@csrf
        <div class="name_block_" >
            <label for="name">Введети навзание места</label>
            <input class="form-control" type="text" name="name" value="{{ old('name') }}">
        </div>
        <br>
        <div class="name_block_">
            <label for="name">Введети Тип Месте</label>
            <select class="form-control" name="type">
                @foreach ($types as $type)
                    <option @if(old('type') == $type->id) selected  @endif value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="name_block_">
            <button name="otpravet" value="Добавить место" class="btn btn-primary" type="submit">Добавить место</button>
        </div>
    </form>

    <br>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif


@endsection