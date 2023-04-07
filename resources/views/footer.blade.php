

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

</script>

</html>