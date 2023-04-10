window.onload = function() {

    let from = (sessionStorage.getItem("direction")) ? sessionStorage.getItem("direction") : null;
    document.getElementById('from').innerHTML = from;

    let to = (sessionStorage.getItem("to")) ? sessionStorage.getItem("to") : null;
    document.getElementById('to').innerHTML = to;

    let when = (sessionStorage.getItem("date")) ? sessionStorage.getItem("date") : null;
    document.getElementById('when').innerHTML = when;

    let hour = (sessionStorage.getItem("time")) ? sessionStorage.getItem("time") : null;
    document.getElementById('hour').innerHTML = hour;

    let passengers = (sessionStorage.getItem("passengers")) ? sessionStorage.getItem("passengers") : null;
    document.getElementById('passengers').innerHTML = passengers;

    let child = (sessionStorage.getItem("child")) ? sessionStorage.getItem("child") : null;
    document.getElementById('child').innerHTML = child;

    let adult = (sessionStorage.getItem("adult")) ? sessionStorage.getItem("adult") : null;
    document.getElementById('adult').innerHTML = adult;

    let price = (sessionStorage.getItem("price")) ? sessionStorage.getItem("price") : null;
    document.getElementById('price').innerHTML = price+ " zł";

}