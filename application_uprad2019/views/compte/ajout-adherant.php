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
            <form method="POST" <?php if (empty($editer)) { ?> action="<?php echo site_url('admin-uprad/ajout-adherant'); ?>" <?php } else { ?>action="<?php echo site_url('admin-uprad/update-adherant'); ?>" <?php } ?> enctype="multipart/form-data">
                <input type="hidden" name="id_type" value="1">
                <input type="hidden" name="id" value="<?php echo !empty($editer->id) ? $editer->id : ''; ?>">
                <!-- /.col (left) -->
                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-body">
                            <!-- Date -->
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Civilité</label>
                                <div class="col-sm-10 input-group date">
                                    <select name="civilite" class="form-control">
                                        <option value="Madame">Madame</option>
                                        <option value="Monsieur">Monsieur</option>
                                    </select>
                                </div>
                                <!-- /.input group -->
                            </div>
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
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Fonction</label>
                                <div class="col-sm-10 input-group date">
                                    <input type="text" name="fonction" class="form-control pull-right" placeholder="fonction" value="<?php echo !empty($editer->fonction) ? $editer->fonction : ''; ?>">
                                    <span class="input-group-addon">
                                        <i class="fa fa-black-tie"></i>
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
                <!-- /.col (right) -->
                <div class="col-md-4">
                    <!-- /bloc chargment d'image -->
                    <div class="box box-danger">
                        <div class="box-header">
                            <h3 class="box-title">Charger une photo</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-photo"></i>
                                    </div>
                                    <input type="file" name="fichier" class="form-control" data-mask>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div class="user-header">
                                <img alt="User Image" style="width:80px; heigth:150px;" class="img-circle" src="<?php echo base_url(); ?>assets/photos/<?php echo !empty($editer->photo) ? $editer->photo : ''; ?>">
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- categorie -->
                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title">Valider un memebre</h3>
                        </div>
                        <div class="box-body">
                            <!-- Minimal style -->

                            <div class="col-xs-12 col-sm-12 no_padding">
                                <input type="checkbox" name="etat" id="etat_membre" <?php echo !empty($editer->etat) && $editer->etat == 1 ? "checked" : ""; ?> value="<?php echo 'checked' ? 1 : 0; ?>">
                                <label for="etat_membre"> <?php echo !empty($editer->etat) && $editer->etat == 1 ? "Déjà membre" : "en attente de validation"; ?></label>
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="col-xs-12 col-sm-6 no_padding">
                            <input type="submit" value="<?php echo !empty($editer) ? "Modifier un membre" : "Enregistrer un membre"; ?>" class="btn btn-info" style="padding :10px;  margin-left :-22px;margin-bottom:5px;">
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>