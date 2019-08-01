@extends('index')
@section('title', 'Список типа задач')
@section('content')
    <table class="table">
@foreach ($tasks as $task)
                <tr>
                <td> {{ $task->id }} </td>
                <td> {{ $task->name }} </td>
                <td> {{ $task->counter }} </td>
                <td><a target="_blank" href="/tasks{{ $task->id }}/">Задание {{ $task->name }}</a></td>
                </tr>
@endforeach
    </table>


        <a href="and_work" class="label label-success">Взаять в работу</a>



@endsection
