<div class="content-wrapper" style="min-height: 915.667px;">
    <!-- Content Header (Page header) -->
    <?php $this->load->view('inc/entete-admin.php'); ?>
    <!-- Main content -->
    <section class="content">
        <div class="row">

            <form method="POST" <?php if (empty($editer)) { ?> action="<?php echo site_url('admin-uprad/ajout-galerie'); ?>" <?php } else { ?>action="<?php echo site_url('admin-uprad/update-galerie'); ?>" <?php } ?> enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo !empty($editer->id) ? $editer->id : ''; ?>">
                <!-- /.col (left) -->
                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Titre</label>
                                <div class="col-sm-10 input-group date">
                                    <input type="text" name="titre" class="form-control pull-right" placeholder="titre" require="required" value="<?php echo !empty($editer->titre) ? $editer->titre : ''; ?>">
                                    <span class="input-group-addon">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </span>
                                </div>
                                <?php if (form_error('titre')) { ?>
                                    <div class="alert alert-danger small">
                                        <?php echo form_error('titre'); ?>
                                    </div>
                                <?php } ?>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Catégorie</label>
                                <div class="col-sm-10 input-group date">
                                    <input type="text" name="categorie" class="form-control pull-right" placeholder="Catégorie" require="required" value="<?php echo !empty($editer->categorie) ? $editer->categorie : ''; ?>">
                                    <span class="input-group-addon">
                                        <i class="fa fa-folder-open-o"></i>
                                    </span>
                                </div>
                                <?php if (form_error('categorie')) { ?>
                                    <div class="alert alert-danger small">
                                        <?php echo form_error('categorie'); ?>
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
                            <?php if (!empty($editer->image)) { ?>
                                <div class="box-body box-profile">
                                    <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>assets/img/<?php echo !empty($editer->image) ? $editer->image : ''; ?>" alt="User profile picture">
                                </div>
                            <?php } ?>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <div class="box-body">
                        <div class="col-xs-12 col-sm-6 no_padding">
                            <input type="submit" value="<?php echo !empty($editer) ? "Modofier une galerie" : "Enregistrer une galerie"; ?>" class="btn btn-info" style="padding :10px;  margin-left :-22px;margin-bottom:5px;">
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>