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

@section('other')
<div class="container">
  <div class="footer-info">
    <div class="box">
      <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="" />
      <p>DIGITAL COMICS</p>
    </div>
    <div class="box">
      <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="" />
      <p>DC MERCHANDISE</p>
    </div>
    <div class="box">
      <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="" />
      <p>SUBSCRIPTION</p>
    </div>
    <div class="box">
      <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="" />
      <p>COMIC SHOP LOCATOR</p>
    </div>
    <div class="box">
      <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="" />
      <p>DC POWER VISA</p>
    </div>
  </div>
</div>


@endsection

@section('footer-link')
<div class="container-jumbo">
  <div class="footer-link container">
    <div class="box-link">
      <ul class="title">
        <li class="mini-title">DC COMICS</li>
        <li>Characters</li>
        <li>comics</li>
        <li>Movies</li>
        <li>TV</li>
        <li>Games</li>
        <li>Videos</li>
        <li>News</li>
        <li class="mini-title">Shop</li>
        <li>Shop DC</li>
        <li>Shop DC Collectibles</li>
      </ul>
      <ul>
        <li class="mini-title">DC</li>
        <li>Terms Of Use</li>
        <li>Privacy policy (New)</li>
        <li>Add Choices</li>
        <li>Advertising</li>
        <li>Jobs</li>
        <li>Subscriptions</li>
        <li>Talent Workshops</li>
        <li>CPSC Certificates</li>
        <li>Ratings</li>
        <li>Shop Help</li>
        <li>Contact Us</li>
      </ul>
      <ul>
        <li class="mini-title">SITES</li>
        <li>DC</li>
        <li>MAD Magazines</li>
        <li>DC Kids</li>
        <li>DC Universe</li>
        <li>DC Power Visa</li>
      </ul>
    </div>

    <div class="box-image">
      <img src="{{asset('img/dc-logo-bg.png')}}" alt="" />
    </div>
  </div>
</div>
@endsection

@section('footer-social')
<div class="footer-social">
  <div class="container-social">
    <a class="sign-up" href="#">SIGN-UP NOW!</a>

    <div class="follow-us">
      <p>FOLLOW US</p>
      <img src="{{asset('img/footer-facebook.png')}}" alt="" />
      <img src="{{asset('img/footer-twitter.png')}}" alt="" />
      <img src="{{asset('img/footer-youtube.png')}}" alt="" />
      <img src="{{asset('img/footer-pinterest.png')}}" alt="" />
      <img src="{{asset('img/footer-periscope.png')}}" alt="" />
    </div>
  </div>
</div>
@endsection
