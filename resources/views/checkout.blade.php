@include('header')

<div class="header-dark header-site">
            <div class="container hero">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h1 class="text-center">Podsumowanie Twojej rezerwacji.</h1>
                        <img src="{{ asset('images/checkout.svg')}}" alt="Airport" >
                    </div>
                </div>
            </div>
        </div>

<main role="main">
<div class="container marketing">
<div class="row featurette">
<div class="col-md-12">
        <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Twoja podróż</span>
            </h4>
            <ul class="list-group mb-3 sticky-top">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Skąd?</h6>
                        <small id="from" class="text-muted">-</small>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Liczba pasażerów</h6>
                        <small id="passengers" class="text-muted">-</small>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Dzieci</h6>
                        <small id="child" class="text-muted">-</small>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Dorośli</h6>
                        <small id="adult" class="text-muted">-</small>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Do</h6>
                        <small id="to" class="text-muted">-</small>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Kiedy?</h6>
                        <small id="when" class="text-muted">-</small>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Godzina odbioru</h6>
                        <small id="hour" class="text-muted">-</small>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Suma</span>
                    <small id="price" class="text-muted">- zł</small>
                </li>
            </ul>
        </div>
        <div class="col-md-8 order-md-1">
            <h2 class="mb-3">Dane kontaktowe</h2>
            @csrf
            @php
            $id = Auth::user() -> id;
            @endphp
                <div class="row">
                <div class="col-md-6 mb-3" style="display:none;">
                        <label>User id</label>
                        <input type="text" class="form-control" id="user_id"  name="order[0][user_id]" value={{$id}}>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Imię</label>
                        <input type="text" class="form-control" id="name"  name="order[0][name]">
                        <div class="invalid-feedback"> Valid first name is required. </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Nazwisko</label>
                        <input type="text" class="form-control" id="surname"  name="order[0][surname]">
                        <div class="invalid-feedback"> Valid last name is required. </div>
                    </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" class="form-control" id="email"  name="order[0][email]">
                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                </div>
                <div class="mb-3">
                    <label>Telefon</label>
                    <input type="text" class="form-control" id="phone" name="order[0][phone]">
                    <div class="invalid-feedback"> Please enter your shipping address. </div>
                </div>
                <button id="next_checkout" type="submit" class="btn btn-success btn-order">Dalej</button>
            </div>
        </div>
    </div>
          </div>
        </div>
</div>
</div>
</div>
@include('script')
<script src="{{ asset('js/checkout.js')}}"></script>
</main>

      <!-- FOOTER -->
      @include('footer')



  