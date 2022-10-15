
@extends('layouts.app')
@section('title-block')Отзывы@endsection
@section('content')
    <h1>Оставить отзыв</h1>
        <form method="post" action="/review/check">
        @csrf
        <input type="email" name="email" id="email" placeholder="Введите email" class="form-control" > <br>
        <input name="message" id="message" class="form-control" placeholder="Введите отзыв"> <br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
    <br>
    <h1>Все отзывы</h1>
    @foreach ($reviews as $el)
        <div class="alert alert-dark">
            <h5>{{$el -> email}}</h5>
            <p>{{$el -> message}}</p>
            <p style="text-align:right;">{{$el->time }}</p>
        </div>
    @endforeach

    <div>
    {{$reviews->links('pagination::bootstrap-4')}}</div>
@endsection
