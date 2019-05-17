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
            <form method="POST" <?php if (empty($editer)) { ?> action="<?php echo site_url('admin-uprad/ajout-temoignage'); ?>" <?php } else { ?>action="<?php echo site_url('admin-uprad/update-temoignage'); ?>" <?php } ?> enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo !empty($editer->id) ? $editer->id : ''; ?>">
                <!-- /.col (left) -->
                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-body">
                            <!-- Date -->
                            <div class="form-group">
                                <label>Contenu *:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-edit"></i>
                                    </div>
                                    <textarea name="contenu" class="form-control pull-right" placeholder="contenu du témoignage" require="required" rows="4"><?php echo !empty($editer->contenu) ? $editer->contenu : ''; ?></textarea>
                                </div>
                                <?php if (form_error('contenu')) { ?>
                                    <div class="alert alert-danger small">
                                        <?php echo form_error('contenu'); ?>
                                    </div>
                                <?php } ?>
                                <!-- /.input group -->
                            </div>

                            <div class="form-group">
                                <label>Nom:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" name="nom" class="form-control pull-right" placeholder="nom" value="<?php echo !empty($editer->nom) ? $editer->nom : ''; ?>">
                                </div>
                                <?php if (form_error('nom')) { ?>
                                    <div class="alert alert-danger small">
                                        <?php echo form_error('nom'); ?>
                                    </div>
                                <?php } ?>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <div class="form-group">
                                <label>Prénom:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" name="prenom" class="form-control pull-right" placeholder="prénom" value="<?php echo !empty($editer->prenom) ? $editer->prenom : ''; ?>">
                                </div>
                                <!-- /.input group -->
                                <?php if (form_error('prenom')) { ?>
                                    <div class="alert alert-danger small">
                                        <?php echo form_error('prenom'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- /.form group -->

                            <!-- Date and time range -->
                            <div class="form-group">
                                <label>Fonction</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-firefox"></i>
                                    </div>
                                    <input type="text" name="fonction" class="form-control pull-right" value="<?php echo !empty($editer->fonction) ? $editer->fonction : ''; ?>">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

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
                </div>

                <div class="col-md-12">
                    <div class="box-body">

                        <input type="hidden" name="verif" value="">
                        <div class="col-xs-12 col-sm-6 no_padding">
                            <input type="submit" value="<?php echo !empty($editer) ? "Modifier votre enregistrement" : "Enregistrer un témoignage"; ?>" class="btn btn-info" style="padding :10px;  margin-left :10px;margin-bottom:5px;">
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