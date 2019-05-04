<?php include('header.php'); ?>
<div class="mainheadlinewrapperpage">
    <div class="mainheadlinewrapperpage-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="mainheadlinepage">
                        <h1>événement</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Accueil</a>
                        </li>

                        <li class="active">proposer un événement</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
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
            <div class="col-xs-12 col-sm-12 col-md-12 no-padding section_blanche content_creation_evenement">
                <div class="col-xs-12 col-sm-8 no-padding">
                    <div class="mainheadline">
                        <h2>Proposer un évenement</h2>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 text-right">
                    <a href="#" class="retour_agenda">&larr; Retour au calendrier</a>
                </div>
                <form>
                    <div class="col-xs-12 col-sm-6 no-padding-left">
                        <div class="creation_evenement_date">
                            Débute le
                            <input type="date" name="dateDebut">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 no-padding-right">
                        <div class="creation_evenement_date">
                            Se termine le
                            <input type="date" name="dateFin">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-9 no-padding-left">
                        <input type="text" name="adresse" placeholder="Adresse">
                    </div>
                    <div class="col-xs-12 col-sm-3 no-padding-right">
                        <input type="text" name="cp" placeholder="Code postal">
                    </div>
                    <div class="col-xs-12 col-sm-6 no-padding-left">
                        <input type="text" name="ville" placeholder="Ville">
                    </div>
                    <div class="col-xs-12 col-sm-6 no-padding-right">
                        <input type="text" name="pays" placeholder="Pays">
                    </div>
                    <div class="col-xs-12 col-sm-6 no-padding-left">
                        <select name="id_referentiel" required="true">
                            <option value="">type</option>
                            <option value="5">Colloque</option>
                            <option value="1">Conférence</option>
                            <option value="6">Congrès</option>
                            <option value="7">Convention</option>
                            <option value="4">Formation</option>
                            <option value="9">Gala</option>
                            <option value="3">Petit-déjeuner</option>
                            <option value="2">Salon professionnel</option>
                            <option value="8">Séminaire</option>
                            <option value="10">Symposium</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-6 no-padding-right">
                        <select name="pole">
                            <option value="">Pôle AEF concerné</option>
                            <option value="92">Social / RH</option>
                            <option value="93">Enseignement / Recherche</option>
                            <option value="94">Développement durable</option>
                            <option value="95">Habitat / Urbanisme</option>
                            <option value="96">Sécurité globale</option>
                        </select>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <input type="text" name="societe" value="" placeholder="Société">
                    </div>
                    <div class="col-xs-12 no-padding">
                        <input type="text" name="titre" placeholder="Titre de l'événement">
                    </div>
                    <div class="col-xs-12 no-padding">
                        <textarea name="description" placeholder="Description"></textarea>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <input type="url" name="urlEvenement" placeholder="Url de l'événement">
                    </div>
                    <div class="col-xs-12 col-sm-6 no-padding-left">
                        <input type="button" value="Ajouter un contact" id="ajout_contact">
                    </div>
                    <div class="col-xs-12 col-sm-6 no-padding-right">
                        <input id="btn_charger_fichier" type="button" value="Charger une photo, un logo, un PDF…">
                        <input id="input_charger_fichier" type="file" class="hidden">
                    </div>
                    <div class="evenement_contact">
                        <div class="col-xs-12 col-sm-2 no-padding-left">
                            <select name="civilite" required="true">
                                <option value="">Civilité</option>
                                <option value="Mme">Mme</option>
                                <option value="M">M</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-5">
                            <input type="text" name="nom_contact" placeholder="Nom">
                        </div>
                        <div class="col-xs-12 col-sm-5 no-padding-right">
                            <input type="text" name="prenom_contact" placeholder="Prénom">
                        </div>
                        <div class="col-xs-12 col-sm-6 no-padding-left">
                            <input type="email" name="email_contact" placeholder="E-mail">
                        </div>
                        <div class="col-xs-12 col-sm-6 no-padding-right">
                            <input type="tel" name="telephone" placeholder="Téléphone">
                        </div>
                        <div class="col-xs-12 col-sm-6 no-padding-left">
                            <input type="text" name="organisateur" placeholder="Organisateur">
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding-left">
                        <input type="submit" value="Valider" class="cta_rouge">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>