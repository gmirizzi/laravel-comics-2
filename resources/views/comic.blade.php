@extends('template.layout')
@section('content')
<div id="comic">
    <div id="topbar">
        <div id="container">
            <div>
                <div>
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
                    <a href="#">VIEW GALLERY</a>
            </div>
        </div>
    </div>
    <div id="maincontent">
        <div class="container">
            <div id="info">
                <h2>{{$comic['title']}}</h2>
                <div id="price">
                    <div>
                        <span>U.S. Price: </span>{{$comic['price']}}</div>
                    <div>
                        <span>AVAILABLE</span>
                        <button>Check Availability</button>
                    </div>
                </div>
                <p>{{$comic['description']}}</p>
            </div>
            <div id="adv">
                <div>ADVERTISEMENT</div>
                <img src="{{asset('images/adv.jpg')}}" alt="adv">
            </div>
        </div>
    </div>
    <div id="bottom">
        <div class="container">
            <div id="talent">
                <h3>Talent</h3>
                <hr>
                <div class="row">
                    <div class="title">
                        Art by:
                    </div>
                    <div class="content">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="title">
                        Written by:
                    </div>
                    <div class="content">
                    </div>
                </div>
                <hr>
                <div class="row"></div>
            </div>
            <div id="specs">
                <h3>Specs</h3>
                <hr>
                <div class="row">
                    <div class="title">
                        Series:
                    </div>
                    <div class="content">
                        {{$comic['series']}}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="title">
                        U.S. Price:
                    </div>
                    <div class="content">
                        {{$comic['price']}}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="title">
                        On Sale Date:
                    </div>
                    <div class="content">
                        {{$comic['sale_date']}}
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>   
</div>
@endsection