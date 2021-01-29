<header>
  <div class="top-banner">
  </div>
  <div class="container">
      <div class="row">
          <div class="col-2 header-left">
              <a href="/"><img src="images/logo.png" alt="logo"></a>
          </div>
          <div class="col-10 header-right text-right">
              <ul class="decor-none d-block">

                  @foreach (config('main.routes') as $route)

                      <li class={{ Route::currentRouteName() == $route['pathId'] ? 'active' : '' }}>
                          <a href="{{ route($route['pathId']) }}">{{ $route['displayText'] }}</a>
                      </li>

                  @endforeach

                  <li>
                      <a href="#" class="boolean-btn">Candidati ora</a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
</header>