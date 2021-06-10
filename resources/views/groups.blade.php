@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="col-10">Группы</h1>
            <div class="d-flex align-items-center">
                <a class="btn btn-primary" href="{{ url('/group/create') }}" role="button">Создать</a>
            </div>
        </div>
    </div>
@endsection
