@extends('layouts.app')
@section('title-block')Записаться@endsection
@section('content')
<h1>Хочешь так же?</h1>
    @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
            </div>
    @endif
        <form method="post" action="/contact/check">
        @csrf
        <input name="name" id="name" class="form-control" placeholder="Введите имя"> <br>
        <input  name="phone" id="phone" placeholder="Введите номер телефона" class="form-control" > <br>
        <button type="submit" class="btn btn-success"> <b> Записаться</b>
        </button>
    </form>
<h1>Как нас найти?</h1>
@include('inc.cart')
@endsection
