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
            <form method="POST" <?php if (empty($editer)) { ?> action="<?php echo site_url('admin-uprad/ajout-actualite'); ?>" <?php } else { ?>action="<?php echo site_url('admin-uprad/update-actualite'); ?>" <?php } ?> enctype="multipart/form-data">
                <input type="hidden" name="id_type" value="1">
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
                                    <input type="text" name="titre" class="form-control pull-right" placeholder="titre de l'actualité" require="required" value="<?php echo !empty($editer->titre) ? $editer->titre : ''; ?>">
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

                            <!-- /.form group -->
                            <div class="form-group">
                                <label>Résumé:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file"></i>
                                    </div>
                                    <textarea name="resume" class="form-control pull-right" placeholder="resumé de l'article ici">
                                        <?php echo !empty($editer->resume) ? $editer->resume : ''; ?>
                                    </textarea>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- Date and time range -->
                            <div class="form-group" <?php echo !empty($editer) ? "hidden" : ""; ?>>
                                <label>Date de publication</label>
                                <?php echo !empty($editer->date_creation) ? $editer->date_creation : ''; ?>
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

                    <!-- categorie -->
                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title">Catégorie</h3>
                        </div>
                        <div class="box-body">
                            <!-- Minimal style -->
                            <?php
                            //on verifie s'il y a des station pre-cocher
                            if (!empty($editerStation)) {
                                foreach ($editerStation as $val) {
                                    $idStations[] = $val->id; ?>
                                    <input type="hidden" name="idStations[]" value="<?php echo $val->id; ?>">
                                <?php  }
                        }
                        if (!empty($stations)) {
                            foreach ($stations as $key => $station) { ?>
                                    <div class="col-xs-12 col-sm-12 no_padding">
                                        <input type="checkbox" name="stations[]" id="<?php echo $station->libelle; ?>" <?php echo !empty($idStations) && in_array($station->id, $idStations) ? "checked" : ""; ?> value="<?php echo 'checked' ? $station->id : 0; ?>">
                                        <label for="<?php echo $station->libelle; ?>"><?php echo $station->libelle; ?></label>
                                    </div>
                                <?php  }
                        } ?>


                        </div>
                    </div>
                    <!-- format -->
                    <div class="box box-default">
                        <div class="box-header">
                            <h3 class="box-title">Format article</h3>
                        </div>
                        <div class="box-body">
                            <!-- Minimal style -->
                            <?php $form = array(1 => 'actualite', 2 => 'vidéo', 3 => 'infographie', 4 => 'audio'); ?>
                            <div class="col-xs-12 col-sm-12 no_padding">
                                <select name="format" id="" class="form-control">
                                    <?php foreach ($form as $key => $val) { ?>
                                        <option value="<?php echo $key; ?>" <?php !empty($editer->format) && $editer->format == $key ? "selected" : ""; ?>><?php echo $val; ?></option>
                                    <?php   } ?>
                                </select>
                            </div>

                        </div>
                    </div>
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
                            <div class="col-xs-12 col-sm-6 no_padding">
                                <input type="checkbox" name="status" id="choix_doc_educ" value="<?php echo 'checked' ? 1 : 0; ?>" <?php echo !empty($editer->status) && $editer->status == 1 ? "checked" : ""; ?>>
                                <label for="choix_doc_educ" style="margin-top: 7px;position: absolute;margin-left: 12px;color: red;">Publié l'article</label>
                            </div>
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