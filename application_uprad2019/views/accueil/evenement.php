<?php $this->load->view('inc/entete-front'); ?>
<!-- breakpoint for menu -->
<div class="wrapper100percent">
    <div class="menuswitch"></div>
</div>
<!-- breakpoint for menu end -->
<div class="divider-space"></div>
<div class="divider-space"></div>
<div class="mainheadlinewrapper">
    <div class="container contenu">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 agenda section_blanche">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 no-padding">
                        <div class="mainheadline">
                            <h2>Agenda des événements</h2>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 select_evenement_aef inactif text-center">
                        <a href="">
                            Événement UPRAD
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-4 select_tous_evenement inactif text-center">
                        <a href="">
                            Tous les événement AEF
                        </a>
                    </div>
                    <div class="col-xs-2 col-md-1 annee_prec text-left">
                        <a href="">
                            <img src="./assets/images/picto-fleche-pleine-gauche-gris-simple.svg" height="18" />
                        </a>
                    </div>
                    <div class="col-xs-8 col-md-2 annee_en_cours">
                        2017
                    </div>
                    <div class="col-xs-2 col-md-1 annee_suiv text-right">
                        <a href="">
                            <img src="./assets/images/picto-fleche-pleine-droit-gris-simple.svg" height="18" />
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-4 proposer_evenement text-center">
                        <a href="<?php echo site_url('proposer-evenement'); ?>">
                            <img src="./assets/images/picto-plus-rouge.svg" style="width:11px;" /> Proposer un événement
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <a href="#" class="cta_inverse mois_prec">Novembre</a>
                    </div>
                    <div class="col-xs-12 col-sm-4 mois_en_cours">
                        Décembre
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <a href="#" class="cta_inverse mois_suiv">Janvier</a>
                    </div>
                </div>
                <div class="row">
                    <?php /*bloc agenda 01*/ ?>
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-0">
                        <a href="#">
                            <div class="col-xs-12 no-padding bloc_agenda">
                                <div class="col-sm-8">
                                    <div class="agenda_date">
                                        1
                                    </div>
                                    <span class="agenda_mois">décembre</span>
                                    <span class="agenda_lieu">Paris</span>
                                </div>
                                <div class="col-sm-4 agenda_type">
                                    Colloque
                                </div>
                                <div class="col-sm-12 agenda_title">
                                    <div class="divider"></div>
                                    <span class="label_agenda">SNUIP-FNSU</span>
                                    <h1>
                                        Le travail des algorythmes : quel éthique pour quel emploi ? Le travail des algorythmes : quel éthique pour quel emploi ? Le travail des algorythmes : quel éthique pour quel emploi ?
                                    </h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php /*bloc agenda 02*/ ?>
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-0">
                        <a href="#">
                            <div class="col-xs-12 no-padding bloc_agenda">
                                <div class="col-sm-8">
                                    <div class="agenda_date">
                                        10-15
                                    </div>
                                    <span class="agenda_mois">décembre</span>
                                    <span class="agenda_lieu">Paris</span>
                                </div>
                                <div class="col-sm-4 agenda_type">
                                    Colloque
                                </div>
                                <div class="col-sm-12 agenda_title">
                                    <div class="divider"></div>
                                    <span class="label_agenda">SNUIP-FNSU</span>
                                    <h1>
                                        Le travail des algorythmes : quel éthique pour quel emploi ?
                                    </h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php /*bloc agenda 03*/ ?>
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-0">
                        <a href="#">
                            <div class="col-xs-12 no-padding bloc_agenda evenement_uprad">
                                <div class="col-sm-12">
                                    <div class="divider"></div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="agenda_date">
                                        14
                                    </div>
                                    <span class="agenda_mois">décembre</span>
                                    <span class="agenda_lieu">Paris</span>
                                </div>
                                <div class="col-sm-4 agenda_type">
                                    Colloque
                                </div>
                                <div class="col-sm-12 agenda_title">
                                    <div class="divider"></div>
                                    <span class="label_agenda">SNUIP-FNSU</span>
                                    <h1>
                                        Repas de Noël du service Web + Anniversaire de Nabil
                                    </h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php /*bloc agenda 04*/ ?>
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-0">
                        <a href="#">
                            <div class="col-xs-12 no-padding bloc_agenda">

                                <div class="col-sm-8">
                                    <div class="agenda_date">
                                        18
                                    </div>
                                    <span class="agenda_mois">décembre</span>
                                    <span class="agenda_lieu">Paris</span>
                                </div>
                                <div class="col-sm-4 agenda_type">
                                    Colloque
                                </div>
                                <div class="col-sm-12 agenda_title">
                                    <div class="divider"></div>
                                    <span class="label_agenda">SNUIP-FNSU</span>
                                    <h1>
                                        Le travail des algorythmes : quel éthique pour quel emploi ?
                                    </h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php /*bloc agenda 05*/ ?>
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-0">
                        <a href="#">
                            <div class="col-xs-12 no-padding bloc_agenda evenement_uprad">
                                <div class="col-sm-12">
                                    <div class="divider"></div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="agenda_date">
                                        20
                                    </div>
                                    <span class="agenda_mois">décembre</span>
                                    <span class="agenda_lieu">Paris</span>
                                </div>
                                <div class="col-sm-4 agenda_type">
                                    Convention
                                </div>
                                <div class="col-sm-12 agenda_title">
                                    <div class="divider"></div>
                                    <span class="label_agenda">SNUIP-FNSU</span>
                                    <h1>
                                        Le travail des algorythmes : quel éthique pour quel emploi ?
                                    </h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php /*bloc agenda 06*/ ?>
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-0">
                        <a href="#">
                            <div class="col-xs-12 no-padding bloc_agenda">

                                <div class="col-sm-8">
                                    <div class="agenda_date">
                                        21
                                    </div>
                                    <span class="agenda_mois">décembre</span>
                                    <span class="agenda_lieu">Paris</span>
                                </div>
                                <div class="col-sm-4 agenda_type">
                                    Congrès
                                </div>
                                <div class="col-sm-12 agenda_title">
                                    <div class="divider"></div>
                                    <span class="label_agenda">SNUIP-FNSU</span>
                                    <h1>
                                        Le travail des algorythmes : quel éthique pour quel emploi ?
                                    </h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php /*bloc agenda 07*/ ?>
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-0">
                        <a href="#">
                            <div class="col-xs-12 no-padding bloc_agenda">

                                <div class="col-sm-8">
                                    <div class="agenda_date">
                                        25
                                    </div>
                                    <span class="agenda_mois">décembre</span>
                                    <span class="agenda_lieu">Paris</span>
                                </div>
                                <div class="col-sm-4 agenda_type">
                                    Séminaire
                                </div>
                                <div class="col-sm-12 agenda_title">
                                    <div class="divider"></div>
                                    <span class="label_agenda">SNUIP-FNSU</span>
                                    <h1>
                                        C'est Noël !
                                    </h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php /*bloc agenda 08*/ ?>
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-0">
                        <a href="#">
                            <div class="col-xs-12 no-padding bloc_agenda">

                                <div class="col-sm-8">
                                    <div class="agenda_date">
                                        30
                                    </div>
                                    <span class="agenda_mois">décembre</span>
                                    <span class="agenda_lieu">Paris</span>
                                </div>
                                <div class="col-sm-4 agenda_type">
                                    Salon professionnel
                                </div>
                                <div class="col-sm-12 agenda_title">
                                    <div class="divider"></div>
                                    <span class="label_agenda">SNUIP-FNSU</span>
                                    <h1>
                                        Le travail des algorythmes : quel éthique pour quel emploi ?
                                    </h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php /*bloc agenda 09*/ ?>
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-0">
                        <a href="#">
                            <div class="col-xs-12 no-padding bloc_agenda">

                                <div class="col-sm-8">
                                    <div class="agenda_date">
                                        31
                                    </div>
                                    <span class="agenda_mois">décembre</span>
                                    <span class="agenda_lieu">Paris</span>
                                </div>
                                <div class="col-sm-4 agenda_type">
                                    Conférence
                                </div>
                                <div class="col-sm-12 agenda_title">
                                    <div class="divider"></div>
                                    <span class="label_agenda">SNUIP-FNSU</span>
                                    <h1>
                                        Le travail des algorythmes : quel éthique pour quel emploi ?
                                    </h1>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <a href="#" class="cta_inverse mois_prec">Novembre</a>
                    </div>
                    <div class="col-sm-6 col-sm-offset-0 col-md-4 col-md-offset-4">
                        <a href="#" class="cta_inverse mois_suiv">Janvier</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bodywrapper end -->