<footer>
  <div id="top-footer">
    <div class="container d-flex flex-wrap justify-content-center align-items-center">
      @foreach ( $footerCards as $card )
      <a class="d-flex justify-content-center align-items-center" href="{{ $card['url'] }}">
    <div class="icon d-flex justify-content-center align-items-center">
      <img
        class="img-fluid h-100"
        src="/images/{{ $card['img'] }}"
        alt="Immagine link a {{ $card['title'] }}"
      />
    </div>
    <span class="text-uppercase">{{ $card['title'] }}</span>
  </a>
      @endforeach
    </div>
  </div>

  <div id="middle-footer">
    <div class="container">
      <div class="row">
        <div class="col-1">
          <ul>
            <h5 class="text-uppercase">Dc comics</h5>
            @foreach ($footerDcComics as $menu)
        <li>
        <a href="{{ $menu['url'] }}">{{ $menu['name'] }}</a>
        </li>
      @endforeach
          </ul>
          <ul>
            <h5 class="text-uppercase">Shop</h5>
            @foreach ($footerShop as $menu)
        <li>
        <a href="{{ $menu['url'] }}">{{ $menu['name'] }}</a>
        </li>
      @endforeach
          </ul>
        </div>
        <div class="col-1">
          <ul>
            <h5 class="text-uppercase">Dc</h5>
            @foreach ($footerDc as $menu)
        <li>
        <a href="{{ $menu['url'] }}">{{ $menu['name'] }}</a>
        </li>
      @endforeach
          </ul>
        </div>
        <div class="col-1">
          <ul>
            <h5 class="text-uppercase">sites</h5>
            @foreach ($footerSites as $menu)
        <li>
        <a href="{{ $menu['url'] }}">{{ $menu['name'] }}</a>
        </li>
      @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div id="bottom-footer">
    <div class="container d-flex justify-content-between align-items-center">
      <a id="call-to-action" class="text-uppercase" href="#">Sign-up now!</a>
      <div class="social-icons d-flex align-items-center">
        <span class="text-uppercase">follow us</span>
        @foreach ($footerSocialIcons as $item)
      <div class="icon">
      <a href="{{ $item['url'] }}">
        <img src="/images/{{ $item['img'] }}" alt="Icona di {{ $item['name'] }}" />
      </a>
      </div>
    @endforeach        
      </div>
    </div>
  </div>
</footer>