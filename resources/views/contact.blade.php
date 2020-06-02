
@extends('layouts.app')
@section('title')Связаться с нами@endsection

@section('content')
    <form action="{{route('contact-form')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Ваше имя" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Введите тему сообщения</label>
            <input type="text" name="subject" placeholder="Тема сообщения" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Введите ваш email</label>
            <input type="text" name="email" placeholder="Ваш email" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Введите сообщение</label>
            <textarea name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection