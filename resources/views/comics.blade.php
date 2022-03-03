@extends('layout.default')

{{-- inseriamo le varie parti di section all'interno di default --}}



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
    {{-- @dump($data); --}}
    @foreach ($data as $serie)
    <div class="card">
      <div class="content-image">
        <img src="{{$serie['thumb']}}" alt="" />
      </div>
      <p>{{$serie['series']}}</p>
      <p></p>
    </div>
    
    @endforeach
    </div>

    <div class="other-series">
      <a href="#">LOAD MORE</a>
    </div>
  </div>

@endsection