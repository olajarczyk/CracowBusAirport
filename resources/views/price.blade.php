@include('header')

<div class="header-dark header-site">
            <div class="container hero">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h1 class="text-center">{{ __('lang.payment') }}</h1>
                        <img src="{{ asset('images/cennik.svg')}}" alt="Airport" >
                    </div>
                </div>
            </div>
        </div>

    <main role="main">

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing" style="margin-top: 5%;">
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-12">
            <h2>{{ __('lang.pricelist_service') }}</h2>
            <p>{{ __('lang.pricelist_text') }}</p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->
<div class="row featurette">
<div class="col-md-12">
<div class="container my-4">
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      {{ __('lang.stops') }}
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table class="table table-bordered">  
          <tr>
          <th>{{ __('lang.stop') }}</th>
          <th>{{ __('lang.price') }}</th>
          </tr>
          <tr>  
          @foreach ($stops as $stop)
          <td>{{ $stop->stops }}</td>
          <td>{{ $stop->price }}</td>
          </tr> 
          @endforeach
        </table> 
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      {{ __('lang.districts') }}
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table class="table table-bordered">  
          <tr>
          <th>{{ __('lang.district') }}</th>
          <th>{{ __('lang.price') }}</th>
          </tr>
          <tr>  
          @foreach ($districts as $district)
          <td>{{ $district->districts }}</td>
          <td>{{ $district->price }}</td>
          </tr> 
          @endforeach
        </table> 
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
@include('script')
</main>

      <!-- FOOTER -->
      @include('footer')



  