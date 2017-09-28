<?php get_header(); ?>


<style>
    .featured--blok1 {
        background-image: url(<?php echo get_theme_mod('box1_image', get_bloginfo('template_url').'/img/venice-2578238_1920-4.jpg'); ?>) !important;
    }

    .featured--blok2 {
        background-image: url(https://homestock.nl/wp-content/uploads/2016/06/HOME-STOCK-ELAINE-BANK-550x275.jpg) !important;
    }

    .featured--blok3 {
        background-image: url(http://localhost/wp-content/themes/In%20De%20Blauwe%20Druif/img/speciaalbier.jpg) !important;
    }

    .featured--blok4 {
        background-image: url(https://homestock.nl/wp-content/uploads/2016/06/HOMESTOCK-INTERIEUR-STYLING-EETTAFEL-GEDEKT-SERVIES-KLEVERING-550x550.jpg)!important;
    }

    .featured--blok5 {
        background-image: url(http://localhost/wp-content/themes/In%20De%20Blauwe%20Druif/img/i-muri-768x1024.jpg) !important;
    }

    .featured--blok6 {
        background-image: url(http://localhost/wp-content/themes/In%20De%20Blauwe%20Druif/img/tapverhuur-600x600.jpg) !important;
    }

    .featured--blok7 {
        background-image: url(http://localhost/wp-content/themes/In%20De%20Blauwe%20Druif/img/wijnproevers-bg-8.jpg) !important;
    }

</style>



<section id="blokken">
    <div class="wrapper wrapper-mobile">
        <div class="box box1 featured--blok1 blok--item cover">
          <div class="blok--item-inner">
              <h2><a href="http://wijnproevers.nl/wijnwijzer/"><?php echo get_theme_mod('box1_heading', 'Wijnwijzer'); ?></a></h2>
          </div>
        </div>
        <div class="box box2 featured--blok2 blok--item cover">
          <div class="blok--item-inner">
              <h2 class="inner"><a href="http://localhost/index.php/relatiegeschenken/">Geschenken</a></h2>
          </div>
        </div>
        <div class="box box3 featured--blok3 blok--item cover">
          <div class="blok--item-inner">
              <h2><a href="http://localhost/index.php/aanbiedingen/bier/">SpeciaalBier</a></h2>
          </div>
        </div>
        <div class="box box4 featured--blok4 blok--item cover">
          <div class="blok--item-inner">
              <h2><a href="/shop/meubels/fauteuils/marieke-retro-fauteuil/">Events</a></h2>
          </div>
        </div>
        <div class="box box5 featured--blok5 blok--item cover">
          <div class="blok--item-inner">
              <h2><a href="http://localhost/index.php/aanbiedingen/wijn/">Wijn van de Maand</a></h2>
          </div>
        </div>
        <div class="box box6 featured--blok6 blok--item cover">
          <div class="blok--item-inner">
              <h2><a href="http://localhost/index.php/tapverhuur/">Tapverhuur</a></h2>
          </div>
        </div>
        <div class="box box7 featured--blok7 blok--item cover">
          <div class="blok--item-inner">
              <h2><a href="/shop/meubels/fauteuils/marieke-retro-wijnproevers-logo-350x450.jpg/">Wijnproevers</a></h2>
          </div>
        </div>
    </div>
</section>

<section id="showcase">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="showcase-left">
                    <img src="<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/image1.jpg'); ?>">
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="showcase-right">
                    <h1>
                        <?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme'); ?>
                    </h1>
                    <p>
                        <?php echo get_theme_mod('showcase_text', 'Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam'); ?>
                    </p>
                </div>
                <br>
                <a href="<?php echo get_theme_mod('btn_url', 'http://test.com'); ?>" class="btn btn-default btn-lg showcase-btn">
                    <?php echo get_theme_mod('btn_text', 'Get Started'); ?>
                </a>
            </div>
        </div>
    </div>
</section>



<!-- OPGEVEN VOOR NIEUWSBRIEF (https://bootsnipp.com/snippets/featured/newsletter-subscribe) -->
<section id="nieuwsbrief">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="thumbnail center well well-small text-center">
                    <h2 class="line">Nieuwsbrief</h2>

                    <h4>Op de hoogte blijven doormiddel van onze nieuwsbrief?.</h4>

                    <form action="" method="post">
                        <div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span>
                            <input type="text" id="" name="" placeholder="your@email.com">
                        </div>
                        <br />
                        <input type="submit" value="Meld mij aan!" class="btn btn-large" />
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="thumbnail center well well-small text-left">
                    <h2 class="line">Actueel</h2>
                    <p>In het weekend van 9 september valt de nieuwe Wijnwijzer in de bus. U kunt deze <a href="http://wijnproevers.nl/wijnwijzer/">hier</a> reeds online bekijken!</p>

                </div>
            </div>
        </div>
    </div>
</section>
<section id="info1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="info-left">
                    <img src="<?php echo get_theme_mod('info1_image', get_bloginfo('template_url').'/img/bd_logo_small.jpg'); ?>">
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="info-right">
                    <h1>
                        <?php echo get_theme_mod('info1_heading', 'Onze Visie'); ?>
                    </h1>
                    <p>
                        <?php echo get_theme_mod('info1_text', 'Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam'); ?>
                    </p>
                    <br>

                </div>
            </div>
        </div>
    </div>
</section>
<section id="info2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6">
                <div class="info-left">
                    <h2 class="line">Openingstijden</h2>
                    <p>Maandag 13.00u tot 18.00u <br> Dinsdag, Woensdag en Vrijdag 9.00u tot 18.00u<br> Donderdag 9.00u tot 20.00u<br> Zaterdag 9.00u tot 17.00u</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-lg-3">
                <div class="info-right">
                    <h2 class="line">Adres</h2>
                    <p>Wijnhandel "In de blauwe druif"<br> Steenbokstraat 30 <br> 6531 TH Nijmegen</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-lg-3">
                <div class="info-right">
                    <h2 class="line">Contact</h2>
                    <div class="item-contact"> <a href="tel:630-885-9200"><span class="link-id">Telefoon</span>:<span> 024 355 73 46</span></a>
                        <a href="mailto:info@dedruif.nl"><br><span class="link-id">E-mail:</span><span> info@dedruif.nl</span></a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<br>
<h1 class="text-center">Onze nieuwste aanwinsten</h1>
<br>
<section id="producten">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="http://tech.firstpost.com/wp-content/uploads/2014/09/Apple_iPhone6_Reuters.jpg" alt="" class="img-responsive">
                    <div class="caption">
                        <h4 class="pull-right">€6.99</h4>
                        <h4><a href="#">lorem lorem</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="ratings">
                    </div>
                    <div class="space-ten"></div>
                    <div class="btn-ground text-center">
                        <button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add To Cart</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i class="fa fa-search"></i> Quick View</button>
                    </div>
                    <div class="space-ten"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="http://tech.firstpost.com/wp-content/uploads/2014/09/Apple_iPhone6_Reuters.jpg" alt="" class="img-responsive">
                    <div class="caption">
                        <h4 class="pull-right">€6.99</h4>
                        <h4><a href="#">lorem lorem</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="ratings">
                    </div>
                    <div class="space-ten"></div>
                    <div class="btn-ground text-center">
                        <button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add To Cart</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i class="fa fa-search"></i> Quick View</button>
                    </div>
                    <div class="space-ten"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="http://tech.firstpost.com/wp-content/uploads/2014/09/Apple_iPhone6_Reuters.jpg" alt="" class="img-responsive">
                    <div class="caption">
                        <h4 class="pull-right">€6.99</h4>
                        <h4><a href="#">Lorem lorem</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="ratings">
                    </div>
                    <div class="space-ten"></div>
                    <div class="btn-ground text-center">
                        <button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add To Cart</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i class="fa fa-search"></i> Quick View</button>
                    </div>
                    <div class="space-ten"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade product_view" id="product_view">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                    <h3 class="modal-title">HTML5 is a markup language</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 product_img">
                            <img src="http://img.bbystatic.com/BestBuy_US/images/products/5613/5613060_sd.jpg" class="img-responsive">
                        </div>
                        <div class="col-md-6 product_content">
                            <h4>Product Id: <span>51526</span></h4>
                            <div class="rating">
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <h3 class="cost"><span class="glyphicon glyphicon-euro"></span> 6.99 <small class="pre-cost"><span class="glyphicon glyphicon-euro"></span> 7.99</small></h3>
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">


                                </div>
                                <!-- end col -->
                                <div class="col-md-4 col-sm-6 col-xs-12">


                                </div>
                                <!-- end col -->
                                <div class="col-md-4 col-sm-12">

                                </div>
                                <!-- end col -->
                            </div>
                            <div class="space-ten"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>


<?php get_footer(); ?>
