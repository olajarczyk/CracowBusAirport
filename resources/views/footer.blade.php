

<footer class="main-footer">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="logo-widget footer-widget">
                            <figure class="logo-box"><a href="#"><img src="{{ asset('logo/logo-color.svg') }}" width="200px"></a></figure>
                            <div class="text">
                                <p>{{ __('lang.footer_text') }}</p>
                            </div>
                            <ul class="footer-social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 offset-lg-2 footer-column">
                        <div class="service-widget footer-widget">
                            <div class="footer-title">{{ __('lang.fast_links') }}</div>
                            <ul class="list">
                                <li><a href="#">{{ __('lang.reservation') }}</a></li>
                                <li><a href="#">{{ __('lang.pricelist') }}</a></li>
                                <li><a href="#">{{ __('lang.faq') }}</a></li>
                                <li><a href="#">{{ __('lang.contact') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-widget">
                        <div class="contact-widget footer-widget">
                            <div class="footer-title">{{ __('lang.contact') }}</div>
                            <div class="text">
                                <p>{{ __('lang.footer_contact') }}</p>
                                <p>kontakt@aleksandrajrczyk.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 column">
                    <div class="copyright"><a href="#">Aleksandra Jarczyk</a> &copy; 2023 </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 column">
                    <ul class="footer-nav">
                        <li><a href="#">{{ __('lang.regulations') }}</a></li>
                        <li><a href="#">{{ __('lang.policy') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</footer>

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
</body>
<script type="text/javascript">  

    var url = "{{route('changeLang')}}";
    $(".Langchange").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
        sessionStorage.setItem("lang",  $(this).val());
    }); 
    let from = (sessionStorage.getItem("direction")) ? sessionStorage.getItem("direction") : null;
    let passengers = (sessionStorage.getItem("passengers")) ? sessionStorage.getItem("passengers") : null;
    let adult = (sessionStorage.getItem("adult")) ? sessionStorage.getItem("adult") : null;
    let child = (sessionStorage.getItem("children")) ? sessionStorage.getItem("children") : null;
    let to = (sessionStorage.getItem("to")) ? sessionStorage.getItem("to") : null;
    let date = (sessionStorage.getItem("date")) ? sessionStorage.getItem("date") : null;
    let hour = (sessionStorage.getItem("time")) ? sessionStorage.getItem("time") : null;
    let price = (sessionStorage.getItem("price")) ? sessionStorage.getItem("price") : null;

    
    $.ajaxSetup({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"').attr('content')
        }
    })

    $(function() {
        $('#next_checkout').click(function(e) {

            e.preventDefault();

            let user_id = $( "#user_id" ).val();
            let name = $( "#name" ).val();
            let surname = $( "#surname" ).val();
            let email = $( "#email" ).val();
            let phone = $( "#phone" ).val();


             $.ajax({
            
                 url: "{{ route('orderDetails') }}",
                 data: {
                  user_id:user_id,
                  from:from,
                  passengers:passengers,
                  adult:adult,
                  child:child,
                  to: to,
                  date: date, 
                  hour:hour,
                  price:price,
                  name:name,
                  surname:surname,
                  email:email,
                  phone:phone,
                },
                 type: 'POST',
                 success:function(data){
                    if($.isEmptyObject(data.error)){
                        alert(data.success);
                        location.reload();
                    }else{
                        printErrorMsg(data.error);
                    }
                }
          });

         });
        });

        function printErrorMsg (msg) {
            console.log(msg);
        }

        //Header loggin
        $("#button").click(function() {  
            $("#box form").toggle("slow");
            return false;
        });
</script>

</html>