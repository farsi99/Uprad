<div class="content-wrapper" style="min-height: 915.667px;">
    <!-- Content Header (Page header) -->
    <?php $this->load->view('inc/entete-admin.php'); ?>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <?php if ($this->session->flashdata('success')) { ?>
                    <div class="callout callout-success">
                        <p><?php echo $this->session->flashdata('success'); ?></p>
                    </div>
                <?php   } ?>
            </div>
            <form method="POST" <?php if (empty($editer)) { ?> action="<?php echo site_url('admin-uprad/ajout-evenement'); ?>" <?php } else { ?>action="<?php echo site_url('admin-uprad/update-evenement'); ?>" <?php } ?> enctype="multipart/form-data">
                <input type="hidden" name="id_type" value="1">
                <input type="hidden" name="id" value="<?php echo !empty($editer->id) ? $editer->id : ''; ?>">
                <!-- /.col (left) -->
                <div class="col-md-7">
                    <div class="box box-primary">
                        <div class="box-body">
                            <!-- Date -->
                            <div class="form-group">
                                <label>Titre *:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-edit"></i>
                                    </div>
                                    <input type="text" name="titre" class="form-control pull-right" placeholder="titre de l'événement" require="required" value="<?php echo !empty($editer->titre) ? $editer->titre : ''; ?>">
                                </div>
                                <?php if (form_error('titre')) { ?>
                                    <div class="alert alert-danger small">
                                        <?php echo form_error('titre'); ?>
                                    </div>
                                <?php } ?>
                                <!-- /.input group -->
                            </div>

                            <div class="form-group">
                                <label>Date Début*:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <input type="datetime-local" name="dateDebut" class="form-control pull-right" placeholder="Date début " value="<?php echo !empty($editer->dateDebut) ? $editer->dateDebut : ''; ?>">
                                </div>
                                <!-- /.input group -->
                                <?php if (form_error('dateDebut')) { ?>
                                    <div class="alert alert-danger small">
                                        <?php echo form_error('dateDebut'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- /.form group -->
                            <div class="form-group">
                                <label>Date Fin*:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <input type="datetime-local" name="dateFin" class="form-control pull-right" placeholder="date fin" value="<?php echo !empty($editer->dateFin) ? $editer->dateFin : ''; ?>">
                                </div>
                                <!-- /.input group -->
                                <?php if (form_error('dateFin')) { ?>
                                    <div class="alert alert-danger small">
                                        <?php echo form_error('dateFin'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- /.form group -->
                            <div class="form-group">
                                <?php $cat = array('Evenement uprad', 'Campagne', 'Conference', 'Réunion', 'Manifestation', 'Autres...'); ?>
                                <label>Catégorie Evénement</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-database"></i>
                                    </div>
                                    <select name="typeEvenement" class="form-control">
                                        <?php foreach ($cat as $val) { ?>
                                            <option value="<?php echo $val; ?>" <?php echo !empty($editer->typeEvenement) && $editer->typeEvenement = $val ? 'selected' : ''; ?>><?php echo $val; ?></option>
                                        <?php   } ?>
                                    </select>
                                </div>
                                <!-- /.input group -->
                            </div>

                            <div class="form-group">
                                <label>Organisateur:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa  fa-houzz"></i>
                                    </div>
                                    <input type="text" name="Organisateur" class="form-control pull-right" placeholder="Organisateur de l'événement" value="<?php echo !empty($editer->Organisateur) ? $editer->Organisateur : ''; ?>">
                                </div>

                            </div>
                            <!-- /.form group -->
                            <div class="form-group">
                                <label>Status</label>
                                <?php $st = array(0 => 'En attente', 1 => 'Valider', 2 => 'Refuser'); ?>
                                <select name="status" class="form-control">
                                    <?php foreach ($st as $k => $val) { ?>
                                        <option value="<?php echo $k; ?>" <?php echo !empty($editer->etat) && $editer->etat == $k ? 'selected' : ''; ?>><?php echo $val; ?></option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.col (right) -->
                <div class="col-md-5">

                    <!-- /bloc chargment d'image -->
                    <div class="box box-danger">
                        <div class="box-header">

                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Nom</label>
                                <div class="col-sm-10 input-group date">
                                    <input type="text" name="nom" class="form-control pull-right" placeholder="Nom" require="required" value="<?php echo !empty($editer->nom) ? $editer->nom : ''; ?>">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </div>
                                <?php if (form_error('nom')) { ?>
                                    <div class="alert alert-danger small">
                                        <?php echo form_error('nom'); ?>
                                    </div>
                                <?php } ?>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Prénom</label>
                                <div class="col-sm-10 input-group date">
                                    <input type="text" name="prenom" class="form-control pull-right" placeholder="Prénom" require="required" value="<?php echo !empty($editer->prenom) ? $editer->prenom : ''; ?>">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </div>
                                <?php if (form_error('prenom')) { ?>
                                    <div class="alert alert-danger small">
                                        <?php echo form_error('prenom'); ?>
                                    </div>
                                <?php } ?>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10 input-group date">
                                    <input type="email" name="email" class="form-control pull-right" placeholder="Email" require="true" value="<?php echo !empty($editer->email) ? $editer->email : ''; ?>">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope-o"></i>
                                    </span>
                                </div>
                                <?php if (form_error('email')) { ?>
                                    <div class="alert alert-danger small">
                                        <?php echo form_error('email'); ?>
                                    </div>
                                <?php } ?>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Téléphone</label>
                                <div class="col-sm-10 input-group date">
                                    <input type="text" name="telephone" class="form-control pull-right" placeholder="telephone" value="<?php echo !empty($editer->telephone) ? $editer->telephone : ''; ?>">
                                    <span class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                </div>
                                <?php if (form_error('telephone')) { ?>
                                    <div class="alert alert-danger small">
                                        <?php echo form_error('telephone'); ?>
                                    </div>
                                <?php } ?>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Adresse</label>
                                <div class="col-sm-10 input-group date">
                                    <input type="text" name="adresse" class="form-control pull-right" placeholder="Adresse" value="<?php echo !empty($editer->adresse) ? $editer->adresse : ''; ?>">
                                    <span class="input-group-addon">
                                        <i class="fa fa-map-signs"></i>
                                    </span>
                                </div>
                                <?php if (form_error('adresse')) { ?>
                                    <div class="alert alert-danger small">
                                        <?php echo form_error('adresse'); ?>
                                    </div>
                                <?php } ?>
                                <!-- /.input group -->
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Code Postal</label>
                                <div class="col-sm-10 input-group date">
                                    <input type="text" name="cp" class="form-control pull-right" placeholder="Code postal" value="<?php echo !empty($editer->cp) ? $editer->cp : ''; ?>">
                                    <span class="input-group-addon">
                                        <i class="fa fa-codepen"></i>
                                    </span>
                                </div>
                                <?php if (form_error('adresse')) { ?>
                                    <div class="alert alert-danger small">
                                        <?php echo form_error('adresse'); ?>
                                    </div>
                                <?php } ?>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Ville</label>
                                <div class="col-sm-10 input-group date">
                                    <input type="text" name="ville" class="form-control pull-right" placeholder="ville" value="<?php echo !empty($editer->ville) ? $editer->ville : ''; ?>">
                                    <span class="input-group-addon">
                                        <i class="fa fa-home"></i>
                                    </span>
                                </div>
                                <?php if (form_error('adresse')) { ?>
                                    <div class="alert alert-danger small">
                                        <?php echo form_error('adresse'); ?>
                                    </div>
                                <?php } ?>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>

                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title">Description</h3>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                                    <i class="fa fa-times"></i></button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body pad">
                            <textarea id="editor1" name="description" rows="10" cols="80" placeholder="Ici placé votre contenue">
<?php echo !empty($editer->description) ? $editer->description : ''; ?>
                    </textarea>
                            <?php if (form_error('description')) { ?>
                                <div class="alert alert-danger small">
                                    <?php echo form_error('description'); ?>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="box-body">
                            <input type="hidden" name="verif" value="">
                            <div class="col-xs-12 col-sm-6 no_padding">
                                <input type="submit" value="<?php echo !empty($editer) ? "Modifier votre enregistrement" : "Enregistrer ton article"; ?>" class="btn btn-info" style="padding :10px;  margin-left :10px;margin-bottom:5px;">
                            </div>
                        </div>

                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.col-->
            </form>
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>