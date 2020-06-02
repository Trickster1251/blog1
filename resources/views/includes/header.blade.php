@section('header')
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Company</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="{{route('home')}}">Главная</a>
        <a class="p-2 text-dark" href="{{route('about')}}">О нас</a>
        <a class="p-2 text-dark" href="{{route('soon')}}">Скоро</a>
        <a class="p-2 text-dark" href="{{route('contact')}}">Связаться</a>
    </nav>
    <a class="btn btn-outline-primary" href="#">Войти</a>
</div>