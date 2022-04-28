<header>
    <div class="container">
      <img src="{{asset('images/dc-logo.png')}}" alt="Logo DC Comics" />
      <nav>
        <ul>
          <li class="{{Route::current()->getName() == 'characters' ? 'active' : null}}"><a href="{{route('characters')}}">characters</a></li>
          <li class="{{Route::current()->getName() == 'comics' ? 'active' : null}}"><a href="{{route('comics')}}">comics</a></li>
          <li><a href="">movies</a></li>
          <li><a href="">tv</a></li>
          <li><a href="">games</a></li>
          <li><a href="">collectibles</a></li>
          <li><a href="">videos</a></li>
          <li><a href="">fans</a></li>
          <li><a href="">news</a></li>
          <li><a href="">shop</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div id="jumbotron"></div>
