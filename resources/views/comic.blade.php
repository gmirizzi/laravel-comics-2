@extends('template.layout')
@section('content')
<div id="comic">
    <div id="topbar">
        <div id="container">
            <div>
                <img src="{{$comic['thumb']}}" alt="">
                <div>
                    <a href="">VIEW GALLERY</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="info">
            <h2>{{$comic['title']}}</h2>
            <div id="price">
                <div>U.S. Price: {{$comic['price']}}</div>
                <div>
                    <span>AVAILABLE</span>
                    <button>Check Availability</button>
                </div>
            </div>
            <p>{{$comic['description']}}</p>
        </div>
        <div id="adv">

        </div>
    </div>    
</div>
@endsection