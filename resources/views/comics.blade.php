@extends('template.layout')
@section('content')
    <div id="comics">
      <div class="container">
        <div id="etichetta">CURRENT SERIES</div>
        @foreach ($fumetti as $item)
        <div class="card">
          <img src="{{ $item['thumb'] }}" alt="" />
          <div class="serie">{{ $item['series'] }}</div>
        </div>
        @endforeach
      </div>
      <button>LOAD MORE</button>
    </div>
    
    <div id="bluebar">
      <div class="container">
        <div class="item">
          <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="" />
          DIGITAL COMICS
        </div>
        <div class="item">
          <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="" />
          DC MERCHANDISE
        </div>
        <div class="item">
          <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="" />
          SUBSCRIPTION
        </div>
        <div class="item">
          <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="" />
          COMIC SHOP LOCATOR
        </div>
        <div class="item">
          <svg
            version="1.1"
            id="Layer_2_1_"
            xmlns="http://www.w3.org/2000/svg"
            x="0"
            y="0"
            viewBox="0 0 79.5 50.9"
            xml:space="preserve"
          >
            <path
              class="st0"
              d="M73.9 49.6H5.3c-2.1 0-3.8-1.7-3.8-3.8V5.4c0-2.1 1.7-3.8 3.8-3.8h68.6c2.1 0 3.8 1.7 3.8 3.8v40.3c0 2.1-1.7 3.9-3.8 3.9zM1.5 15.4h76.2"
            />
            <path
              fill="#fff"
              stroke="#fff"
              stroke-width=".998"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-miterlimit="10"
              d="M50.1 22.1l-9.7 1.4 5.1-16.4L29 30.2l9.3-1.3L34.4 44z"
            />
          </svg>
          DC POWER VISA
        </div>
      </div>
    </div>
@endsection