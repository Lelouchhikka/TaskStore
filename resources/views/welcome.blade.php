@extends('layouts.app')

@section('content')
        <div class="relative flex items-top justify-center min-h-screen  sm:items-center py-4 sm:pt-0">


            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

                @foreach($data as $d)
                    <div class="card w">
                        <div class="card-header">
                            {{$d->task_title}}
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{$d->task_description}}</p>
                            <a href="{{route("details",$d->task_id)}}" class="btn btn-primary">Go somewhere</a>
                            <a href="/details/{{$d->task_id}}?q=1">smth</a>
                        </div>
                    </div>

                @endforeach





                </div>
            </div>
        </div>
    </body>
</html>
@endsection
