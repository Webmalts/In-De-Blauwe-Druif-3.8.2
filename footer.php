
       <footer id="footer-Section">
        <div class="footer-top-layout">
            <div class="container">
                <div class="row">
                    <div class=" col-lg-8 col-lg-offset-2">
                        <div class="col-sm-4">
                            <div class="footer-col-item">
                                <h4>Adres</h4>
                                <address>
                                      Wijnhandel "In de blauwe druif"<br>
                                      Steenbokstraat 30<br>
                                      6531 TH Nijmegen
                                  </address>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="footer-col-item">
                                <h4>Contact Gegevens</h4>
                                <div class="item-contact"> <a href="tel:630-885-9200"><span class="link-id">P</span>:<span>024 355 73 46</span></a> <a href="mailto:info@brandcatmedia.com"><span class="link-id">E</span>:<span>info@dedruif.nl</span></a> </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="footer-col-item">
                                <h4>Schrijf u in voor de nieuwsbrief!!!</h4>
                                <form class="signUpNewsletter" action="" method="get">
                                    <input name="" class="gt-email form-control" placeholder="Uw e-mail adres" type="text">
                                    <input name="" class="btn-go" value="Go" type="button">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom-layout">
            <div class="socialMedia-footer">
                <a href="#"><img src="img/socialMedia_01.png"></a>
                <a href="#"><img src="img/socialMedia_02.png"></a>
                <a href="https://www.facebook.com/Indeblauwedruif/?ref=br_rs"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                <a href="#"><img src="img/socialMedia_04.png"></a>
                <a href="#"><img src="img/socialMedia_05.png"></a>
            </div>
            <div class="copyright-tag"><p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p></div>
        </div>
    </footer>
    <?php wp_footer(); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    <script>
        window.sr = ScrollReveal();
        sr.reveal('.navbar', {
            duration: 2000,
            origin: 'bottom'
        });
        sr.reveal('.showcase-left', {
            duration: 2000,
            origin: 'left',
            distance: '300px'
        });
        sr.reveal('.showcase-right', {
            duration: 2000,
            origin: 'right',
            distance: '300px'
        });
        sr.reveal('.showcase-btn', {
            duration: 2000,
            delay: 2000,
            origin: 'bottom'
        });
        sr.reveal('.info-left', {
            duration: 2000,
            origin: 'left',
            distance: '300px',
            viewFactor: 0.2
        });
        sr.reveal('.info-right', {
            duration: 2000,
            origin: 'right',
            distance: '300px',
            viewFactor: 0.2
        });
    </script>

    <script>
        $(function() {
            // Smooth Scrolling
            $('a[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>

</body>

</html>
