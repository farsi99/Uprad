<div class="content-wrapper" style="min-height: 915.667px;">
    <!-- Content Header (Page header) -->
    <?php $this->load->view('inc/entete-admin.php'); ?>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- /.col (left) -->
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-body">
                        <!-- Date -->
                        <div class="form-group">
                            <label>Titre:</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-edit"></i>
                                </div>
                                <input type="text" class="form-control pull-right" placeholder="titre de l'actualité">
                            </div>
                            <!-- /.input group -->
                        </div>

                        <div class="form-group">
                            <label>META title:</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-internet-explorer"></i>
                                </div>
                                <input type="text" class="form-control pull-right" placeholder="titre pour le referencement(SEO)">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                        <div class="form-group">
                            <label>META description:</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-internet-explorer"></i>
                                </div>
                                <input type="text" class="form-control pull-right" placeholder="meta description pour le referencement(SEO)">
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
                                <textarea class="form-control pull-right" placeholder="resumé de l'article ici"></textarea>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- Date and time range -->
                        <div class="form-group">
                            <label>Date de publication</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <input type="date" class="form-control pull-right" id="reservationtime">
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

                <!-- /.box -->
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
                                <input type="file" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                            </div>
                            <!-- /.input group -->
                        </div>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                <!-- iCheck -->
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Catégorie</h3>
                    </div>
                    <div class="box-body">
                        <!-- Minimal style -->

                        <!-- checkbox -->
                        <div class="form-group">
                            <label>
                                <input type="checkbox" class="minimal" checked>
                            </label>
                            <label>
                                <input type="checkbox" class="minimal">
                            </label>
                            <label>
                                <input type="checkbox" class="minimal" disabled>
                                Minimal skin checkbox
                            </label>
                        </div>

                        <!-- radio -->
                        <div class="form-group">
                            <label>
                                <input type="radio" name="r1" class="minimal" checked>
                            </label>
                            <label>
                                <input type="radio" name="r1" class="minimal">
                            </label>
                            <label>
                                <input type="radio" name="r1" class="minimal" disabled>
                                Minimal skin radio
                            </label>
                        </div>

                        <!-- Minimal red style -->

                        <!-- checkbox -->
                        <div class="form-group">
                            <label>
                                <input type="checkbox" class="minimal-red" checked>
                            </label>
                            <label>
                                <input type="checkbox" class="minimal-red">
                            </label>
                            <label>
                                <input type="checkbox" class="minimal-red" disabled>
                                Minimal red skin checkbox
                            </label>
                        </div>

                        <!-- radio -->
                        <div class="form-group">
                            <label>
                                <input type="radio" name="r2" class="minimal-red" checked>
                            </label>
                            <label>
                                <input type="radio" name="r2" class="minimal-red">
                            </label>
                            <label>
                                <input type="radio" name="r2" class="minimal-red" disabled>
                                Minimal red skin radio
                            </label>
                        </div>

                        <!-- Minimal red style -->

                        <!-- checkbox -->
                        <div class="form-group">
                            <label>
                                <input type="checkbox" class="flat-red" checked>
                            </label>
                            <label>
                                <input type="checkbox" class="flat-red">
                            </label>
                            <label>
                                <input type="checkbox" class="flat-red" disabled>
                                Flat green skin checkbox
                            </label>
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
                        <form>
                            <textarea id="editor1" name="editor1" rows="10" cols="80">
                              Ici placé votre contenue
                    </textarea>
                        </form>
                    </div>
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>