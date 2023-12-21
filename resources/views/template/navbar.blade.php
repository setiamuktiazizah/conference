<nav id="navbar" class="navbar">
    <div class="container">
      <div class="row justify-content-center">
      <div class="col-1"><a href="/" class="{{ Request::path() === '/' ? 'active' : '' }}">Home</a></div>
      <div class="col-2"><a href="/submitpaper" class="{{ Request::path() === 'submitpaper' ? 'active' : '' }}">Submit Paper</a></div>
      <div class="col-2"><a href="/paperinfo" class="{{ Request::path() === 'paperinfo' ? 'active' : '' }}">Paper Info</a></div>
      <div class="col-3"><img src="{{asset('images\Webdemia Logo.png')}}" alt="Webdemia" style="width: 180px; height: 60px"></div>
      <div class="col-2"><a href="/schedule" class="{{ Request::path() === 'schedule' ? 'active' : '' }}">Schedule</a></div>
      <div class="col-1"><a href="/help" class="{{ Request::path() === 'help' ? 'active' : '' }}">Help</a></div>
      <div class="col-1"><a href="/login"><img src="{{asset('images\profile.png')}}" alt="Profile" style="width: 40px; height: 40px"></a></div>
      </div>  
    </div>
  </nav><!-- .navbar -->