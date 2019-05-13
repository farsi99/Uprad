<div class="content-wrapper" style="min-height: 915.667px;">
    <!-- Content Header (Page header) -->
    <?php $this->load->view('inc/entete-admin.php'); ?>
    <!-- Main content -->
    <section class="content">
        <div class="row">

            <form method="POST" <?php if (!empty($editer)) { ?> action="<?php echo site_url('admin-uprad/update-salon'); ?>" <?php } else { ?>action="<?php echo site_url('admin-uprad/update-adherant'); ?>" <?php } ?> enctype="multipart/form-data">
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
                                <label for="inputEmail3" class="col-sm-2 control-label">Catégorie</label>
                                <div class="col-sm-10 input-group date">
                                    <input type="text" name="typeidee" class="form-control pull-right" placeholder="Catégorie" value="<?php echo !empty($editer->typeidee) ? $editer->typeidee : ''; ?>">
                                    <span class="input-group-addon">
                                        <i class="fa fa-cogs"></i>
                                    </span>
                                </div>
                                <!-- /.input group -->
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Sujet</label>
                                <div class="col-sm-10 input-group date">
                                    <input type="text" name="sujet" class="form-control pull-right" placeholder="Sujet" value="<?php echo !empty($editer->sujet) ? $editer->sujet : ''; ?>">
                                    <span class="input-group-addon">
                                        <i class="fa fa-commenting-o"></i>
                                    </span>
                                </div>
                                <?php if (form_error('sujet')) { ?>
                                    <div class="alert alert-danger small">
                                        <?php echo form_error('sujet'); ?>
                                    </div>
                                <?php } ?>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Contenu</label>
                                <div class="col-sm-10 input-group date">
                                    <textarea name="contenu" class="form-control pull-right" cols="80" rows="8" placeholder="contenu">
                                    <?php echo !empty($editer->contenu) ? $editer->contenu : ''; ?>
                                    </textarea>

                                </div>
                                <?php if (form_error('contenu')) { ?>
                                    <div class="alert alert-danger small">
                                        <?php echo form_error('contenu'); ?>
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
                    <!-- categorie -->
                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title">Gestion des idées</h3>
                        </div>
                        <div class="box-body">
                            <!-- Minimal style -->
                            <?php $valid = array(0 => 'En attente', 1 => 'Retenue', 2 => 'Refusée'); ?>
                            <div class="col-xs-12 col-sm-12 no_padding">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
                                    <div class="col-sm-10 input-group date">
                                        <select name="etat" id="" class="form-control">
                                            <?php foreach ($valid as $key => $val) { ?>
                                                <option value="<?php echo $key; ?>"><?php echo $val; ?></option>
                                            <?php    } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="box-body">
                        <div class="col-xs-12 col-sm-6 no_padding">
                            <input type="submit" value="<?php echo !empty($editer) ? "Modifier l'etat d'une idéé et enregistrer" : "Enregistrer un membre"; ?>" class="btn btn-info" style="padding :10px;  margin-left :-22px;margin-bottom:5px;">
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>