<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.includes.head')
<style media="screen">
a.btn:hover {
   -webkit-transform: scale(1.1);
   -moz-transform: scale(1.1);
   -o-transform: scale(1.1);
}
a.btn {
   -webkit-transform: scale(0.8);
   -moz-transform: scale(0.8);
   -o-transform: scale(0.8);
   -webkit-transition-duration: 0.5s;
   -moz-transition-duration: 0.5s;
   -o-transition-duration: 0.5s;
}
</style>
<body>
    <div id="app">
      @include('layouts.includes.nav')

        <main class="py-4">
          <div class="container">
              <div class="row justify-content-center">
                  @if (auth()->user())
                    @include('layouts.includes.sidebar')
                  @endif

                  <div class="col-md-9">
                @yield('content')
                  </div>
              </div>
          </div>

        </main>
    </div>
</body>
</html>
