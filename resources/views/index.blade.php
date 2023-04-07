@include('header')

<div class="header-dark header-site">
            <div class="container hero">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h1 class="text-center">{{ __('lang.directions') }}</h1>
                        <img src="{{ asset('images/airport.png')}}" alt="Airport" >
                    </div>
                </div>
            </div>
        </div>

<main role="main">

<div class="col-md-12 order-button">
        <!-- Example row of columns -->
        <a href="{{url('/rezerwacja')}}" class="btn btn-primary btn-lg active center" role="button" aria-pressed="true">{{ __('lang.transport') }}</a>
</div>

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">
<div class="row featurette">
<div class="col-md-12">
        <!-- Example row of columns -->
        <div class="row index-page">
          <div class="col-md-4">
            <h2>{{ __('lang.reservation') }}</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          </div>
          <div class="col-md-4">
            <h2>{{ __('lang.transport_title') }}</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          </div>
          <div class="col-md-4">
            <h2>{{ __('lang.contact') }}</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          </div>
        </div>
</div>
</div>
</div>
@include('script')
</main>

      <!-- FOOTER -->
      @include('footer')



  