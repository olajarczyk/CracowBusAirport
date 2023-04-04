<!DOCTYPE html>
<html>
   <head>
      <title>Cracow airport - map</title>
      <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
      <meta charset="utf-8">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
   </head>
   <style>
    .controls {
  margin-top: 10px;
  border: 1px solid transparent;
  border-radius: 2px 0 0 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  height: 32px;
  outline: none;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
  }
  #pac-input {
  background-color: #fff;
  font-family: Noto Sans, sans-serif;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 300px;
  left: 40% !important;
  }
  #pac-input:focus {
  border-color: #4d90fe;
  }
  .pac-container {
   font-family: Noto Sans, sans-serif;
  }
  #type-selector {
  color: #fff;
  background-color: #4d90fe;
  padding: 5px 11px 0px 11px;
  }
  #type-selector label {
   font-family: Noto Sans, sans-serif;
  font-size: 13px;
  font-weight: 300;
  }

  .container{
   margin-left:0;
  }
  #type-selector{
   display:none;
  }

  #legend {
   font-family: Noto Sans, sans-serif;
bottom: 0% !important;
font-size: 1.5rem;
display: none;
background-image: url("{{ asset('icons/background.svg')}}");
width: 600px;
height: 500px;
background-repeat: no-repeat;
background-size: cover;
padding-top: 150px !important;
padding-left: 120px;
background-position: 5% 5%;
margin-top: 10px;
}

#local{
   border-bottom: 1px solid rgb(0 0 0 / 20%);
  padding-bottom: 20px;
  font-weight: 800;
  font-size: 22px;
  line-height: 27px;
  margin-right: 30px;
  margin-left: 20px;
}
.btn-secondary {
margin-top: 20px;
background-color: #f82249 !important;
border:none;
width: 8rem;
margin-bottom: 40px;
color: white;
}

#back{
background-color: black !important;
color: white;
margin-right: 10px;
}
#infowindow-content {
display: none;
}

#map #infowindow-content {
display: inline;
}
#local::before{
margin-right: 1rem;
content: url("{{ asset('icons/pin.svg')}}");
color:#03989e;
}

@media only screen and (max-width: 768px) {
.gm-style > div:nth-child(5) > div:nth-child(1){
display: none;
}
#pac-input{
left: 10% !important;
}
#legend {
border-top-left-radius: 0px;
border-bottom-left-radius: 0px;
}
}

   </style>
   <body>
   <!--MAP-->
      <div class="container">
         <form method="post" action="">
            <div class="row">
               <div class="col">
                  <!--<input type="text" name="name" class="form-control"><br>-->
                  <input type="hidden" name="lat" id="lat">
                  <input type="hidden" name="lng" id="lng">
                  <input type="hidden" name="location" id="location">
                  <input id="pac-input" class="controls" type="text"
                     placeholder="Podaj adres" list="station">
                     <datalist id="station">
                     <option value="Rondo Ofiar Katynia, Kraków, Polska">Rondo ofiar Katynia</option>
                      <option value="Bronowice Wiadukt, Kraków, Polska">Bronowice wiadukt</option>
                      <option value="Miasteczko Studenckie AGH, Kraków, Polska">Miasteczko Studenckie AGH</option>
                      <option value="Czarnowiejska, Kraków, Polska">Czarnowiejska</option>
                      <option value="Dworzec Autobusowy MDA Kraków, Bosacka, Kraków, Polska">Dworzec MDA</option>
                    </datalist>
                  <div id="type-selector" class="controls">
                     <input type="radio" name="type" id="changetype-all" checked="checked">
                     <!--<label for="changetype-all">All</label>-->
                  </div>
                  <div id="map" style="width: 100vw; height: 100vh; padding: 10px;"></div>
                  <div id="infowindow-content">
                    <span id="place-name" class="title"></span><br />
                    <span id="place-address"></span>
                  </div>
                  <div id="legend"><p style="font-size: 16px; padding-bottom: 30px;" id="local"></p><p style="font-weight: 600; margin-top: 30px; " id="price"></p><button id="back" type="button" class="btn btn-secondary">Wróć</button><button id="next_two" type="button" class="btn btn-secondary" style="background-color: #03989e;">Dalej</button></div>
                  <!--<input type="submit" name="submit" value="Save" class="form-control btn btn-primary">-->
               </div>
            </div>
            <!--End of row-->
         </form>
      </div>
      <script>
        function loadScript(src) {
        let script = document.createElement('script');
        script.src = src;
        script.async = false;
        document.body.append(script);
        }
        loadScript("{{ asset('js/price.js')}}");
      </script>
      <!--End of container-->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLQKgaUlozW49AcroVUkiWibqqOt401P0&libraries=places&callback=initAutocomplete" async defer></script>
    </body>
</html>