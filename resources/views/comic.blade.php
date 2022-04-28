@extends('template.layout')
@section('content')
<div id="comic">
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