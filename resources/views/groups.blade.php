@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="col-6">Группы</h1>
            <div class="col-6 d-flex justify-content-end">
                <div class="d-flex align-items-center">
                    <a class="btn btn-primary" href="{{ url('/group/create') }}" role="button">Создать</a>
                </div>
            </div>
        </div>

            <div class="row">
                @foreach($groups as $group)
                    <div class="col-lg-4 col-6" onclick="location.href='/group/{{$group->id}}';" style="cursor: pointer">
                        <div class="card text-dark bg-light mb-3 mx-auto" style="max-width: 18rem;">
                            <div class="card-header">
                                {{$group->name}}
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{$group->description}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

    </div>
@endsection
