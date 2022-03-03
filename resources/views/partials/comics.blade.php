@extends('layout.default')

{{-- inseriamo le varie parti di section all'interno di default --}}

{{-- contenuto di header --}}
@section('header-content')
    <div class="up-header container">
        <span>DC POWER VISA</span>
        <span>ADDITIONAL DC SITES</span>
    </div>
    <nav class="container">
        <div class="logo">
            <img src="{{asset('img/dc-logo.png')}}" alt="">
        </div>
        <div class="link">
            <ul>
                <li>characters</li>
                <li>comics</li>
                <li>movies</li>
                <li>tv</li>
                <li>games</li>
                <li>collectibles</li>
                <li>videos</li>
                <li>fans</li>
                <li>news</li>
                <li>shop</li>
            </ul>
        </div>

        <div class="search">
            <input type="text" placeholder="Search">
        </div>
    </nav>
@endsection