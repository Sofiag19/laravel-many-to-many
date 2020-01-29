<header>
  <h1> <a href=" {{ route('emp.index') }} ">HEADER</a> </h1>
  <h2>
    @auth
    <form action="{{ route('logout') }}" method="post">
      @csrf
      @method('POST')
      <input type="submit" name="" value="LOGOUT">
    </form>
        <a class="text-capitalize mark" href=" {{ route('user.show') }} ">{{ Auth::user()-> name }}</a>
        @if ( Auth::user() -> image )
          <img src=" {{ asset('images/'.Auth::user()-> image) }} " class="img-thumbnail" style="width: 120px">            
        @endif
    @else
        <a class="text-capitalize mark" href=" {{ route('home') }} ">LOG IN</a>
    @endauth
  </h2>
</header>