@extends('layout.default')

{{-- inseriamo le varie parti di section all'interno di default --}}

{{-- contenuto di header --}}
@section('header-content')
    <div class="up-header">
        <div class="container">
            <span>DC POWER VISA</span>
            <span>ADDITIONAL DC SITES</span>

        </div>
    </div>
    <nav class="container">
        <div class="logo">
            <img src="{{asset('img/dc-logo.png')}}" alt="">
        </div>
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

        <div class="search">
            <input type="text" placeholder="Search">
        </div>
    </nav>
@endsection

@section('jumbo')
<div class="container">
    <div class="current-series">
      <p>CURRENT SERIES</p>
    </div>
  </div>
</div>
@endsection

@section('mainSeries')
<div class="box-card">
    <div class="container">
    {{-- aggiungo un forEach per ciclare le card --}}
    @dump($data);
      <div class="card">
        <div class="content-image">
          <img src="card.thumb" alt="" />
        </div>
        <p></p>
        <p></p>
      </div>
    </div>

    <div class="other-series">
      <a href="#">LOAD MORE</a>
    </div>
  </div>

@endsection