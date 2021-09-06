@extends('layouts.app')

@section('content')
    <div class="relative flex items-top justify-center min-h-screen  sm:items-center py-4 sm:pt-0">

        <div class="card text-center">
            <div class="card-header">
                Статус задания
            @if($data->status==1)
                <h3>Еще не начато</h3>
                @endif
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$data->task_title}}</h5>
                <p class="card-text">{{$data->task_description}}</p>
                <p>У вас {{$data->time_checking/60}} минут после начало задания до проверки</p>
            </div>
            <div class="card-footer text-muted">
                2 days ago

                <a href="#" class="btn btn-primary">Начать задание</a>
            </div>
        </div>
    </div>
@endsection
