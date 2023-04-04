@include('header')

<div class="header-dark header-site">
            <div class="container hero">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h1 class="text-center">Szybka i intuicyjna rezerwacja.</h1>
                        <img src="{{ asset('images/rezerwacja.svg')}}" alt="Airport" >
                    </div>
                </div>
            </div>
        </div>

<main role="main">
<div class="container marketing">
<div class="row featurette">
<div class="col-md-12">
        <!-- Example row of columns -->
        <div class="row index-page">
          <div class="col-md-4">
          <div id="form">
                <h1>Kierunek przejazdu</h1>
                <div class="form-group">
                  <select id="from" class="form-control" name="from">
                    <option>Wybierz kierunek</option>
                    <option value="na">Na lotnisko</option>
                    <option value="z">Z lotniska</option>
                  </select>
                </div>
                <div class="form-group">
                    <label class="user-icon" for="passengers">Ilość pasażerów</label>
                      <button id="passengers" class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <span id="result">1</span><span id="adult_result">Dorosły</span><span id="child_result"></span><span id="children_result">Dziecko</span>
                      </button>
                    <div class="collapse" id="collapseExample">
                      <div class="card card-body">
                        <div class="counter_conatiner">
                          <div class = "counter_p">
                          Dorośli<button id="subtract">-</button><span id="output">0</span><button id="add">+</button></div>
                          <div class = "counter_p">
                          Dzieci<button id="subtract_two">-</button><span id="output_two">0</span><button id="add_two">+</button></div>
                        </div>
                      </div>
                    </div>                
                </div>
                <div class="form-group">
                    <label class="flight-icon" for="flight">Data</label><br>
                    <input type="date" id="date" name="date" value="DD/MM/YYYY">
                    <div id="hidden_div"></div>
                </div>
                <div class="form-group">
                  <label class="flight-icon" for="flight">Godzina</label><br>
                  <input type="time" id="time" name="time" >
              </div>
              <a href="{{url('/map')}}" class="btn btn-primary btn-lg active center" id="next">Dalej</a>
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



  