<?php $this->load->view('inc/entete-front'); ?>
<!-- breakpoint for menu -->
<div class="wrapper100percent">
    <div class="menuswitch"></div>
</div>
<div class="divider-space"></div>
<div class="divider-space"></div>
<!-- breakpoint for menu end -->
<div class="mainheadlinewrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="mainheadline">
                    <h2>Toutes l'actualités</h2>
                    <h3>Toutes l'actualité interne et externe de l'uprad.
                    </h3>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="mainheadline">
                    <h2>Filtre News</h2>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="divider-space"></div>
<div class="divider-space"></div>
<div class="mainheadlinewrapper">
    <div class="container contenu actu">
        <div class="row pied">
            <div class="col-md-10 col-xs-12 ">
                <?php if (!empty($actus)) {
                    foreach ($actus as $key => $actu) { ?>
                        <div class="col-md-6 col-xs-12 bloc_depeche">
                            <div class="news-wrap">
                                <div class="news-img zoom_img">
                                    <div class="news-date">
                                        <p><?php echo strftime('%d/%b/%Y', strtotime($actu->date_creation));  ?></p>
                                    </div>
                                    <a href="#"><img alt="" class="img-responsive wp-post-image" height="500" src="<?php echo base_url(); ?>/assets/img/<?php echo $actu->thumbnail; ?>" width="554"></a>
                                </div>
                                <div class="depeche_titre_lead">
                                    <h3>
                                        <a href="#"><?php echo $actu->titre; ?></a>
                                    </h3>
                                    <div class="short-desc"><?php echo mb_substr($actu->content, 0, 280) . ' ...'; ?>
                                    </div>
                                </div>
                                <a href="#" class="btn_lire_suite">
                                    Lire la suite
                                </a>
                            </div>
                        </div>
                    <?php }
            } ?>
            </div>

            <div class="col-md-2 col-xs-12">
                <div class="news-wrap ">
                    <h3>Catégories</h3>
                    <ul class="ul-list">
                        <?php if (!empty($stations)) {
                            foreach ($stations as $cat) { ?>
                                <li class="alert alert-danger station">
                                    <a href="#"><?php echo $cat->libelle; ?></a>
                                </li>
                            <?php
                        }
                    } ?>
                    </ul>

                </div>
                <div class="news-wrap ">
                    <h3>Format</h3>
                    <ul class="ul-list">
                        <li class="alert alert-danger station">
                            <a href="#">Actualités</a>
                        </li>
                        <li class="alert alert-danger station">
                            <a href="#">Vidéos</a>
                        </li>
                        <li class="alert alert-danger station">
                            <a href="#">Infographie</a>
                        </li>


                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
</div>