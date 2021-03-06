<!-- slider -->
<section class="wrapper100percent">
    <div class="flexslider">
        <div class="wrapper100percent">
            <div class="menuswitch"></div>
        </div>
        <!-- breakpoint for menu end -->
        <ul class="slides">
            <li>
                <img alt="" src="assets/images/slider1.jpg" />
                <div class="flex-caption flex-caption1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="caption-subheadline">
                                    Ensemble,reconstruire
                                </h2>
                                <h1 class="caption-headline">
                                    un Algérie
                                </h1>
                                <div class="caption-list">
                                    <p>
                                        <i class="fa fa-star icon"></i>
                                        Plus juste et démocratique
                                    </p>
                                    <p>
                                        <i class="fa fa-star icon"></i>
                                        Pour la paix et la sécurité
                                    </p>
                                    <p>
                                        <i class="fa fa-star icon"></i>
                                        Unis et prospère
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img alt="" src="assets/images/slider2.jpg" />
                <div class="flex-caption flex-caption1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-push-6">
                                <h2 class="caption-subheadline">
                                    Notre objectif politique
                                </h2>
                                <h2 class="caption-headline">
                                    un renouveau
                                </h2>
                                <div class="caption-list">
                                    <p>
                                        <i class="fa fa-star icon"></i>
                                        Laisser la chance aux jeunes
                                    </p>
                                    <p>
                                        <i class="fa fa-star icon"></i>
                                        Lutter contre la corruption
                                    </p>
                                    <p>
                                        <i class="fa fa-star icon"></i>
                                        Lutter contre la pauvreté
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img alt="" src="assets/images/slider3.jpg" />
                <div class="flex-caption flex-caption2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="captioninner">

                                    <h2 class="caption-headline">
                                        Mon algerie
                                    </h2>
                                    <div class="caption-list">
                                        <p>
                                            Je t'aime
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--slider end-->
<div class="wrapper100percent">
    <div class="main-boxes">
        <div class="one-box1">
            <div class="one-box1-inner">
                <h3>Le salon des idées, Je participe, en proposant mes idées</h3>
            </div>
            <br>
            <a class="button1 firstcolor small whiteborder" href="#">proposer
                <i class="fa fa-angle-down icon"></i>
            </a>
        </div>
        <div class="one-box2">
            <div class="one-box2-inner">
                <h3>
                    je rejoins le mouvement pour le développement de mon pays
                </h3>
                <br>
                <a class="button1 firstcolor small whiteborder" href="<?php echo site_url('adhesion'); ?>">Adherer
                    <i class="fa fa-angle-down icon"></i>
                </a>
            </div>
        </div>
        <div class="one-box3">
            <div class="one-box3-inner">
                <h3>
                    Je fais un don pour aider le mouvement à se développer
                </h3>
                <br>
                <a class="button1 firstcolor small whiteborder" href="#">Donner
                    <i class="fa fa-angle-down icon"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="divider-space"></div>
<div class="divider-space"></div>
<div class="container">
    <!--icons-->
    <div class="row">
        <div class="col-md-4">
            <div class="icon-box2">
                <div class="iconwrapper">
                    <i class="fa fa-list icon"></i>
                </div>
                <div class="textwrapper">
                    <h4>Nos projets et plan de travail
                    </h4>
                    <p>Suas iracundia his ea errem ridens nam an veniam equidem lorem.
                    </p>
                    <a href="#">Lire la suite</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="icon-box2">
                <div class="iconwrapper">
                    <i class="fa fa-bullhorn icon"></i>
                </div>
                <div class="textwrapper">
                    <h4>Nous mennons campagne</h4>
                    <p>Suas iracundia his ea errem ridens nam an veniam equidem lorem.
                    </p>
                    <a href="#">Lire la suite</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="icon-box2">
                <div class="iconwrapper">
                    <i class="fa fa-globe icon"></i>
                </div>
                <div class="textwrapper">
                    <h4>Notre vision sur la société</h4>
                    <p>Suas iracundia his ea errem ridens nam an veniam equidem lorem.
                    </p>
                    <a href="#">Lire la suite</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="divider-space"></div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="divider-line"></div>
        </div>
    </div>
</div>
<div class="divider-space"></div>
<div class="divider-space"></div>
<!--icons end-->
<div class="mainheadlinewrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mainheadline">
                    <h2>Actualités</h2>
                    <h3>Toutes l'actualité interne et externe de l'uprad.
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="divider-space"></div>
<div class="divider-space"></div>
<!--blog news-->
<div class="container actu">
    <div class="row ">
        <?php if (!empty($actus)) {
            foreach ($actus as $key => $actu) {
                if ($key == 0) { ?>
                    <!-- affichage de l'actualité à la une -->
                    <div class="col-md-6 col-xs-12">
                        <div class="news-wrap">
                            <div class="news-img">
                                <div class="news-date">
                                    <p><?php echo strftime('%d/%b/%Y', strtotime($actu->date_creation));  ?></p>
                                </div>
                                <a href="#"><img alt="" class="img-responsive wp-post-image" height="500" src="<?php echo base_url(); ?>/assets/img/<?php echo $actu->thumbnail; ?>" width="554"></a>
                            </div>
                            <h3>
                                <a href="#"><?php echo $actu->titre; ?></a>
                            </h3>
                            <div class="short-desc"><?php echo mb_substr($actu->content, 0, 280) . ' ...'; ?>
                            </div>
                        </div>
                    </div>

                <?php }
        } ?>
            <div class="col-md-6 col-xs-12">
                <?php foreach ($actus as $key => $actu) {
                    if ($key != 0) { ?>
                        <!-- affichage du reste des actus -->

                        <div class="thumbnail-news">
                            <div class="news-img pull-left">
                                <div class="news-date">
                                    <p><?php echo strftime('%d/%b/%Y', strtotime($actu->date_creation));  ?></p>
                                </div>
                                <a href="#"><img alt="" class="img-responsive wp-post-image" height="96" sizes="(max-width: 96px) 100vw, 96px" src="<?php echo base_url(); ?>assets/img/thumbs/<?php echo $actu->thumbnail; ?>" srcset="<?php echo base_url(); ?>assets/img/thumbs/<?php echo $actu->thumbnail; ?> 96w, 300w, <?php echo base_url(); ?>assets/img/thumbs/<?php echo $actu->thumbnail; ?> 100w, <?php echo base_url(); ?>assets/img/thumbs/<?php echo $actu->thumbnail; ?> 150w, <?php echo base_url(); ?>assets/img/thumbs/<?php echo $actu->thumbnail; ?>" width="96"></a>
                            </div>
                            <div class="small-news pull-left">
                                <h4>
                                    <a href="#"><?php echo $actu->titre; ?></a>
                                </h4>
                                <div class="short-desc"><?php echo mb_substr($actu->content, 0, 100) . ' ...'; ?>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    <?php  }
            } ?>
                <div class="thumbnail-news">
                    <a class="button1 firstcolor small whiteborder" href="<?php echo site_url('actualites'); ?>" style="background-color: #ab0617!important; margin-top:30px;">Voir toutes les articles</a>
                    <div class="clearfix"></div>
                </div>
            </div>
        <?php  } ?>


    </div>
</div>
<!--blog news end-->

<div class="section4">
    <!--clock-->
    <div class="container text-center">
        <div class="row">
            <div class="col-md-6 col-md-push-3">
                <h3>Nous sommes actuellement 25907 à vouloir le changement …</h3>
                <div id="defaultCountdown"></div>
            </div>
        </div>
    </div>
    <!--clock end-->
</div>
<div class="divider-space"></div>
<div class="divider-space"></div>
<div class="divider-space"></div>
<div class="divider-space"></div>
<div class="mainheadlinewrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mainheadline">
                    <h2>Notre équipe</h2>
                    <h3>Read more about our latest events, campaign and activity.
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="divider-space"></div>
<div class="divider-space"></div>
<!--team-->
<div class="container">
    <div class="wrapper100percent">
        <div class="gallery row js-flickity" data-flickity-options='{
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "contain": true,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "imagesLoaded": true,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "autoPlay": true,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "pageDots": false,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "prevNextButtons": true,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "wrapAround": false
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        }'>
            <div class="col-md-3">
                <div class="team-box">
                    <img alt="" src="./assets/images/team2.jpg">
                    <div class="team-box-inner">
                        <div class="wrapper100percent">
                            <h4>John Doe</h4>
                            <p>Political candidate
                            </p>
                        </div>
                        <div class="wrapper100percent">
                            <a href="#">
                                <i class="fa fa-facebook icon"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter icon"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-linkedin icon"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-youtube icon"></i>
                            </a>
                        </div>
                        <a class="link" href="#">
                            <i class="fa fa-external-link"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-box">
                    <img alt="" src="./assets/images/team3.jpg">
                    <div class="team-box-inner">
                        <div class="wrapper100percent">
                            <h4>Mahmoud Salah</h4>
                            <p>Sécretaire general
                            </p>
                        </div>
                        <div class="wrapper100percent">
                            <a href="#">
                                <i class="fa fa-facebook icon"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter icon"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-linkedin icon"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-youtube icon"></i>
                            </a>
                        </div>
                        <a class="link" href="#">
                            <i class="fa fa-external-link"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-box">
                    <img alt="" src="./assets/images/team2.jpg">
                    <div class="team-box-inner">
                        <div class="wrapper100percent">
                            <h4>John Doe</h4>
                            <p>Political candidate
                            </p>
                        </div>
                        <div class="wrapper100percent">
                            <a href="#">
                                <i class="fa fa-facebook icon"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter icon"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-linkedin icon"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-youtube icon"></i>
                            </a>
                        </div>
                        <a class="link" href="#">
                            <i class="fa fa-external-link"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-box">
                    <img alt="" src="./assets/images/team2.jpg">
                    <div class="team-box-inner">
                        <div class="wrapper100percent">
                            <h4>Jane Doe</h4>
                            <p>Political candidate
                            </p>
                        </div>
                        <div class="wrapper100percent">
                            <a href="#">
                                <i class="fa fa-facebook icon"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter icon"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-linkedin icon"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-youtube icon"></i>
                            </a>
                        </div>
                        <a class="link" href="#">
                            <i class="fa fa-external-link"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-box">
                    <img alt="" src="./assets/images/team3.jpg">
                    <div class="team-box-inner">
                        <div class="wrapper100percent">
                            <h4>John Doe</h4>
                            <p>Political candidate
                            </p>
                        </div>
                        <div class="wrapper100percent">
                            <a href="#">
                                <i class="fa fa-facebook icon"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter icon"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-linkedin icon"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-youtube icon"></i>
                            </a>
                        </div>
                        <a class="link" href="#">
                            <i class="fa fa-external-link"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-box">
                    <img alt="" src="./assets/images/team2.jpg">
                    <div class="team-box-inner">
                        <div class="wrapper100percent">
                            <h4>Jane Doe</h4>
                            <p>Political candidate
                            </p>
                        </div>
                        <div class="wrapper100percent">
                            <a href="#">
                                <i class="fa fa-facebook icon"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter icon"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-linkedin icon"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-youtube icon"></i>
                            </a>
                        </div>
                        <a class="link" href="#">
                            <i class="fa fa-external-link"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="divider-space"></div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="divider-line"></div>
        </div>
    </div>
</div>
<div class="divider-space"></div>
<div class="divider-space"></div>
<div class="mainheadlinewrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mainheadline">
                    <h2>Notre galerie de campagne</h2>
                    <h3>Read more about our latest events, campaign and activity.
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--gallery-->
<div class="container galleryhome">
    <div class="divider-space"></div>
    <div class="divider-space"></div>
    <div class="row">
        <div class="col-md-2">
            <figure class="view view-first">
                <img alt="" src="./assets/images/gallery1t.jpg">
                <figcaption class="mask">
                    <div class="maskinner">
                        <a class="imagepopup" href="images/gallery1.jpg">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-external-link"></i>
                        </a>
                    </div>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-2">
            <figure class="view view-first">
                <img alt="" src="images/gallery2t.jpg">
                <figcaption class="mask">
                    <div class="maskinner">
                        <a class="imagepopup" href="images/gallery2.jpg">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-external-link"></i>
                        </a>
                    </div>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-2">
            <figure class="view view-first">
                <img alt="" src="images/gallery3t.jpg">
                <figcaption class="mask">
                    <div class="maskinner">
                        <a class="imagepopup" href="images/gallery3.jpg">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-external-link"></i>
                        </a>
                    </div>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-2">
            <figure class="view view-first">
                <img alt="" src="images/gallery4t.jpg">
                <figcaption class="mask">
                    <div class="maskinner">
                        <a class="imagepopup" href="images/gallery4.jpg">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-external-link"></i>
                        </a>
                    </div>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-2">
            <figure class="view view-first">
                <img alt="" src="images/gallery5t.jpg">
                <figcaption class="mask">
                    <div class="maskinner">
                        <a class="imagepopup" href="images/gallery5.jpg">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-external-link"></i>
                        </a>
                    </div>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-2">
            <figure class="view view-first">
                <img alt="" src="images/gallery6t.jpg">
                <figcaption class="mask">
                    <div class="maskinner">
                        <a class="imagepopup" href="images/gallery6.jpg">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-external-link"></i>
                        </a>
                    </div>
                </figcaption>
            </figure>
        </div>
    </div>
    <div class="divider-space"></div>
    <div class="row">
        <div class="col-md-2">
            <figure class="view view-first">
                <img alt="" src="images/gallery2t.jpg">
                <figcaption class="mask">
                    <div class="maskinner">
                        <a class="imagepopup" href="images/gallery2.jpg">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-external-link"></i>
                        </a>
                    </div>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-2">
            <figure class="view view-first">
                <img alt="" src="images/gallery1t.jpg">
                <figcaption class="mask">
                    <div class="maskinner">
                        <a class="imagepopup" href="images/gallery1.jpg">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-external-link"></i>
                        </a>
                    </div>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-2">
            <figure class=" view view-first">
                <img alt="" src="images/gallery5t.jpg">
                <figcaption class="mask">
                    <div class="maskinner">
                        <a class="imagepopup" href="images/gallery5.jpg">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-external-link"></i>
                        </a>
                    </div>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-2">
            <figure class=" view view-first">
                <img alt="" src="images/gallery3t.jpg">
                <figcaption class="mask">
                    <div class="maskinner">
                        <a class="imagepopup" href="images/gallery3.jpg">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-external-link"></i>
                        </a>
                    </div>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-2">
            <figure class=" view view-first">
                <img alt="" src="images/gallery4t.jpg">
                <figcaption class="mask">
                    <div class="maskinner">
                        <a class="imagepopup" href="images/gallery4.jpg">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-external-link"></i>
                        </a>
                    </div>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-2">
            <figure class=" view view-first">
                <img alt="" src="images/gallery5t.jpg">
                <figcaption class="mask">
                    <div class="maskinner">
                        <a class="imagepopup" href="images/gallery5.jpg">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-external-link"></i>
                        </a>
                    </div>
                </figcaption>
            </figure>
        </div>
    </div>
</div>
<!--gallery end-->
<div class="divider-space"></div>
<div class="divider-space"></div>
<div class="divider-space"></div>
<div class="divider-space"></div>
<!-- testimonials -->
<section class="wrapper100percent section2">
    <div class="container">
        <div class="row">
            <!-- carousel-->
            <div class="gallery js-flickity" data-flickity-options='{
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "contain": true,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "imagesLoaded": true,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "autoPlay": true,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "pageDots": true,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "prevNextButtons": false,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "wrapAround": false
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                }'>

                <!-- one testimonial end -->
                <!-- one testimonial -->
                <?php if (!empty($temoignages)) {
                    foreach ($temoignages as $val) { ?>
                        <div class="col-md-12 testimonials">
                            <div class="testimonialsinner">
                                <div class="testimonial">
                                    <?php if (!empty($val->photo)) { ?>
                                        <img alt="" src="<?php echo base_url(); ?>assets/photos/<?php echo $val->photo; ?>">
                                    <?php } else { ?>
                                        <img alt="" src="<?php echo base_url(); ?>assets/images/trombi_3.png">
                                    <?php } ?>

                                    <i class="fa fa-quote-left"></i>
                                    <h4>
                                        <?php echo $val->contenu; ?>
                                    </h4>
                                    <h6>
                                        <?php echo $val->nom . ' ' . $val->prenom . ',' . $val->fonction; ?>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    <?php    }
            } ?>



                <!-- one testimonial end -->
            </div>
            <!-- carousel end -->
        </div>
    </div>
    <!-- container end -->
</section>
<!-- testimonials end -->

<div class="divider-space"></div>
<div class="divider-space"></div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="section9">
                <div class="section9a">
                    <h2>Inscrivez-vous à notre newsletter</h2>
                </div>
                <div class="section9b">
                    <form action="submit.php" method="post">
                        <div id="main1">
                            <input id="email1" name="email1" placeholder="votre adresse email" type="text" />
                            <p>
                                <input id="submit1" name="submit1" type="button" value="Valider !">
                            </p>
                            <ul class="col-sm-12" id="response1"></ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>