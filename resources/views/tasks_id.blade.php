@extends('index')
@section('title', 'Места ')
@section('content')
    <table class="table">
        @foreach ($log as $log_one)
            <tr>
                <td> {{ $log_one->id}} </td>
                <td> {{ $log_one->task_id }} </td>
                <td> {{ $log_one->status }} </td>
                <td> {{ $log_one->created_at  }} </td>
                <td> {{ $log_one->updated_at  }} </td>
            </tr>
        @endforeach
    </table>
@endsection