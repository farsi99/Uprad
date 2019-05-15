<div class="content-wrapper" style="min-height: 915.667px;">
    <!-- Content Header (Page header) -->
    <?php $this->load->view('inc/entete-admin.php'); ?>
    <!-- Main content -->
    <section class="content">
        <div class="row">

            <form method="POST" <?php if (!empty($editer)) { ?> action="<?php echo site_url('admin-uprad/update-categorie'); ?>" <?php } else { ?>action="<?php echo site_url('admin-uprad/ajout-categorie'); ?>" <?php } ?> enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo !empty($editer->id) ? $editer->id : ''; ?>">
                <!-- /.col (left) -->
                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Libelle</label>
                                <div class="col-sm-10 input-group date">
                                    <input type="text" name="libelle" class="form-control pull-right" placeholder="Libelle" require="required" value="<?php echo !empty($editer->libelle) ? $editer->libelle : ''; ?>">
                                    <span class="input-group-addon">
                                        <i class="fa fa-database"></i>
                                    </span>
                                </div>
                                <?php if (form_error('libelle')) { ?>
                                    <div class="alert alert-danger small">
                                        <?php echo form_error('libelle'); ?>
                                    </div>
                                <?php } ?>
                                <!-- /.input group -->
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <div class="box-body">
                        <div class="col-xs-12 col-sm-6 no_padding">
                            <input type="submit" value="<?php echo !empty($editer) ? "Modifier une catégorie" : "Enregistrer une catégorie"; ?>" class="btn btn-info" style="padding :10px;  margin-left :-22px;margin-bottom:5px;">
                        </div>
                    </div>
                </div>
                <!-- /.col (right) -->


            </form>
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>