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
            <form method="POST" <?php if (empty($editer)) { ?> action="<?php echo site_url('admin-uprad/ajout-page'); ?>" <?php } else { ?>action="<?php echo site_url('admin-uprad/update-page'); ?>" <?php } ?> enctype="multipart/form-data">
                <input type="hidden" name="id_type" value="2">
                <input type="hidden" name="id" value="<?php echo !empty($editer->id) ? $editer->id : ''; ?>">

                <!-- /.col (left) -->
                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-body">
                            <!-- Date -->
                            <div class="form-group">
                                <label>Titre *:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-edit"></i>
                                    </div>
                                    <input type="text" name="titre" class="form-control pull-right" placeholder="titre de l'actualité" require="true" value="<?php echo !empty($editer->titre) ? $editer->titre : ''; ?>">
                                </div>
                                <?php if (form_error('titre')) { ?>
                                    <div class="alert alert-danger small">
                                        <?php echo form_error('titre'); ?>
                                    </div>
                                <?php } ?>
                                <!-- /.input group -->
                            </div>

                            <div class="form-group">
                                <label>META title:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-google"></i>
                                    </div>
                                    <input type="text" name="meta-title" class="form-control pull-right" placeholder="titre pour le referencement(SEO)" value="<?php echo !empty($editer->meta_title) ? $editer->meta_title : ''; ?>">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <div class="form-group">
                                <label>META description:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-firefox"></i>
                                    </div>
                                    <input type="text" name="meta-description" class="form-control pull-right" placeholder="meta description pour le referencement(SEO)" value="<?php echo !empty($editer->meta_description) ? $editer->meta_description : ''; ?>">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <!-- Date and time range -->
                            <div class="form-group" <?php echo !empty($editer) ? "hidden" : ""; ?>>
                                <label>Date de publication</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <input type="date" name="date-publication" class="form-control pull-right" value="<?php echo !empty($editer->date_creation) ? $editer->date_creation : ''; ?>">
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
                            <h3 class="box-title">Charger une image</h3>
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
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>

                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title">Contenu</h3>
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
                            <textarea id="editor1" name="contenu" rows="10" cols="80" placeholder="Ici placé votre contenue">
                            <?php echo !empty($editer->content) ? $editer->content : ''; ?>
                    </textarea>
                            <?php if (form_error('contenu')) { ?>
                                <div class="alert alert-danger small">
                                    <?php echo form_error('contenu'); ?>
                                </div>
                            <?php } ?>
                        </div>



                        <div class="box-body">
                            <input type="hidden" name="verif" value="">
                            <div class="col-xs-12 col-sm-12 no_padding">
                                <input type="submit" value="<?php echo empty($editer) ? "Enregistrer ta page" : "Modifier ta page"; ?>" class="btn btn-info" style="padding:10px; margin-bottom:5px;">
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