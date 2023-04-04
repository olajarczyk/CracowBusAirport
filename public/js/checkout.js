window.onload = function() {

    let from = (sessionStorage.getItem("direction")) ? sessionStorage.getItem("direction") : null;
    document.getElementById('from').innerHTML = from;

    let to = (sessionStorage.getItem("to")) ? sessionStorage.getItem("to") : null;
    document.getElementById('to').innerHTML = to;

    let when = (sessionStorage.getItem("date")) ? sessionStorage.getItem("date") : null;
    document.getElementById('when').innerHTML = when;

    let hour = (sessionStorage.getItem("time")) ? sessionStorage.getItem("time") : null;
    document.getElementById('hour').innerHTML = hour;

    let price = (sessionStorage.getItem("price")) ? sessionStorage.getItem("price") : null;
    document.getElementById('price').innerHTML = price+ " zł";

}