<div class="content-wrapper" style="min-height: 915.667px;">
    <!-- Content Header (Page header) -->
    <?php $this->load->view('inc/entete-admin.php'); ?>
    <!-- Main content -->
    <section class="content">
        <div class="row">

            <form method="POST" <?php if (empty($editer)) { ?> action="<?php echo site_url('admin-uprad/ajout-equipe'); ?>" <?php } else { ?>action="<?php echo site_url('admin-uprad/modifier-equipe'); ?>" <?php } ?> enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo !empty($editer->id) ? $editer->id : ''; ?>">
                <!-- /.col (left) -->
                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-body">
                            <!-- Date -->
                            <?php $civ = array('Madame', 'Monsieur'); ?>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Civilité</label>
                                <div class="col-sm-10 input-group date">
                                    <select name="civilite" class="form-control">
                                        <?php foreach ($civ as $val) { ?>
                                            <option value="<?php echo $val; ?>" <?php echo !empty($editer->civilite) && $editer->civilite == $val ? "selected" : ""; ?>><?php echo $val; ?></option>
                                        <?php   } ?>

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
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Twitter</label>
                                <div class="col-sm-10 input-group date">
                                    <input type="text" name="twitter" class="form-control pull-right" placeholder="Twitter" value="<?php echo !empty($editer->twitter) ? $editer->twitter : ''; ?>">
                                    <span class=" input-group-addon">
                                        <i class="fa fa-twitter"></i>
                                    </span>
                                </div>
                                <!-- /.input group -->
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">skype</label>
                                <div class="col-sm-10 input-group date">
                                    <input type="text" name="skype" class="form-control pull-right" placeholder="skype" value="<?php echo !empty($editer->skype) ? $editer->skype : ''; ?>">
                                    <span class=" input-group-addon">
                                        <i class="fa fa-skype"></i>
                                    </span>
                                </div>

                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">facebook</label>
                                <div class="col-sm-10 input-group date">
                                    <input type="text" name="facebook" class="form-control pull-right" placeholder="facebook" value="<?php echo !empty($editer->facebook) ? $editer->facebook : ''; ?>">
                                    <span class=" input-group-addon">
                                        <i class="fa fa-facebook"></i>
                                    </span>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">linkdin</label>
                                <div class="col-sm-10 input-group date">
                                    <input type="text" name="linkdin" class="form-control pull-right" placeholder="linkdin" value="<?php echo !empty($editer->linkdin) ? $editer->linkdin : ''; ?>">
                                    <span class="input-group-addon">
                                        <i class="fa fa-share-alt-square"></i>
                                    </span>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">youtube</label>
                                <div class="col-sm-10 input-group date">
                                    <input type="text" name="youtube" class="form-control pull-right" placeholder="youtube" value="<?php echo !empty($editer->youtube) ? $editer->youtube : ''; ?>">
                                    <span class="input-group-addon">
                                        <i class="fa fa-youtube"></i>
                                    </span>
                                </div>
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
                                <?php if (form_error('fonction')) { ?>
                                    <div class="alert alert-danger small">
                                        <?php echo form_error('fonction'); ?>
                                    </div>
                                <?php } ?>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Service(Poste)</label>
                                <div class="col-sm-10 input-group date">
                                    <input type="text" name="service" class="form-control pull-right" placeholder="fonction" value="<?php echo !empty($editer->service) ? $editer->service : ''; ?>">
                                    <span class="input-group-addon">
                                        <i class="fa fa-leaf"></i>
                                    </span>
                                </div>
                                <?php if (form_error('service')) { ?>
                                    <div class="alert alert-danger small">
                                        <?php echo form_error('service'); ?>
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
                            <?php if (!empty($editer->photo)) { ?>
                                <div class="box-body box-profile">
                                    <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>assets/photos/<?php echo !empty($editer->photo) ? $editer->photo : ''; ?>" alt="User profile picture">
                                </div>
                            <?php } ?>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <div class="box-body">
                        <div class="col-xs-12 col-sm-6 no_padding">
                            <input type="submit" value="<?php echo !empty($editer) ? "Passer un membre vers équipe" : "Enregistrer un membre"; ?>" class="btn btn-info" style="padding :10px;  margin-left :-22px;margin-bottom:5px;">
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>