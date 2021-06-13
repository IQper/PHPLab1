@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="col-10">Создание группы</h1>
        </div>

        <div class="container">
            <form method="post" action={{url('group/create/check')}}>
                @csrf
                <div class="row">
                    <h4 class="col-2">Название</h4>
                    <input type="text" name="name" id="name" autocomplete="off" class="form-control col-3">
                    @if($errors -> any())
                        <div class="col-4 d-flex align-items-center text-danger">
                            <div>
                                Поле пустое или содежит менее трех символов
                            </div>
                        </div>
                    @endif
                </div>
                <br>
                <div class="row">
                    <h4 class="col-2">Описание</h4>
                    <textarea type="text" name="description" id="description" rows="3" style="resize: none" class="form-control col-3"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-success">Создать</button>
            </form>
        </div>
    </div>
@endsection
