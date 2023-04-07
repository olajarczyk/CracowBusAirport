@include('header')

<div class="header-dark header-site">
            <div class="container hero">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h1 class="text-center">{{ __('lang.constant_contact') }}</h1>
                        <img src="{{ asset('images/kontakt.svg')}}" alt="Airport" >
                    </div>
                </div>
            </div>
        </div>

<main role="main">

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">
<div class="row featurette justify-content-center">
    <div class="col-md-12">
      <h1 class="mb-3">{{ __('lang.contact_text') }}</h1>
      <form>
        <div class="row g-3">
          <div class="col-md-6">
            <label for="your-name" class="form-label">{{ __('lang.name') }}</label>
            <input type="text" class="form-control" id="your-name" name="your-name" required>
          </div>
          <div class="col-md-6">
            <label for="your-surname" class="form-label">{{ __('lang.surname') }}</label>
            <input type="text" class="form-control" id="your-surname" name="your-surname" required>
          </div>
          <div class="col-md-6">
            <label for="your-email" class="form-label">{{ __('lang.email') }}</label>
            <input type="email" class="form-control" id="your-email" name="your-email" required>
          </div>
          <div class="col-md-6">
            <label for="your-subject" class="form-label">{{ __('lang.title_email') }}</label>
            <input type="text" class="form-control" id="your-subject" name="your-subject">
          </div>
          <div class="col-12">
            <label for="your-message" class="form-label">{{ __('lang.message') }}</label>
            <textarea class="form-control" id="your-message" name="your-message" rows="5" required></textarea>
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-md-6">
                <button type="submit" class="btn btn-dark w-100 fw-bold" >{{ __('lang.send') }}</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-12 map">
    <div style="width: 100%"><iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Krak%C3%B3w%20Airport%20im.%20Jana%20Paw%C5%82a%20II+(Cracow%20airport%20bus)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure acres/hectares on map</a></iframe></div>
    </div>

</div>
</div>
@include('script')
</main>

      <!-- FOOTER -->
      @include('footer')



  