@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @for ($i = 0; $i < 100; $i++)
                <br>
                The current value is {{ $i }}
            @endfor
            <div class="col-md-8">
                <h1>Главная</h1>
            </div>
        </div>
    </div>
@endsection
