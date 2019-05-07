<div class="content-wrapper" style="min-height: 915.667px;">
    <!-- Content Header (Page header) -->
    <?php $this->load->view('inc/entete-admin.php'); ?>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Actualites</h3>
                        <a class="btn btn-info" href="<?php site_url('admin-uprad/ajout-actualite'); ?>" style="float:right;">Ajouter un nouveau</a>
                    </div>
                    <hr>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="dataTables_wrapper form-inline dt-bootstrap" id="example1_wrapper">

                            <div class="row">
                                <div class="col-sm-12">
                                    <table aria-describedby="example1_info" class="table table-bordered table-striped dataTable" id="example1" role="grid">
                                        <thead>
                                            <tr role="row">
                                                <th aria-controls="example1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending" class="sorting_asc" colspan="1" rowspan="1" style="width: 300.617px;" tabindex="0">Titre</th>
                                                <th aria-controls="example1" aria-label="Platform(s): activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 107.083px;" tabindex="0">Auteur</th>
                                                <th aria-controls="example1" aria-label="Engine version: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 126.333px;" tabindex="0">date publication</th>
                                                <th aria-controls="example1" aria-label="CSS grade: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 93.683px;" tabindex="0">Etat</th>
                                                <th aria-controls="example1" aria-label="CSS grade: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 103.683px;" tabindex="0">Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($actualites)) {
                                                foreach ($actualites as $actu) { ?>
                                                    <tr class="odd" role="row">
                                                        <td class="sorting_1"><?php echo $actu->titre; ?></td>
                                                        <td><?php echo $actu->auteur; ?></td>
                                                        <td><?php echo strftime('%d/%m/%Y à %Hh%M', strtotime($actu->date_creation));  ?></td>
                                                        <td>
                                                            <?php if ($actu->status == 1) { ?>
                                                                <span class="label label-success">Publié</span>
                                                            <?php } else { ?>
                                                                <span class="label label-warning">En attente</span>
                                                            <?php } ?>
                                                        </td>
                                                        <td>

                                                            <a class="btn btn-default btn-sm" href="{{ path('admin_actualite_show', {'id': actualite.id}) }}" type="button">
                                                                <i class="fa fa-eye" title="Voir"></i>
                                                            </a>
                                                            <a class="btn btn-default btn-sm" href="{{ path('admin_actualite_edit', {'id': actualite.id}) }}" type="button">
                                                                <i class="fa fa-edit" title="Modifier"></i>
                                                            </a>
                                                            <a class="btn btn-default btn-sm" href="" type="button">
                                                                <i class="fa fa-trash-o" title="Supprimer"></i>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                <?php  }
                                        } else { ?>
                                                <tr>
                                                    <td colspan="11">pas de resultat</td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="1" rowspan="1">Titre</th>
                                                <th colspan="1" rowspan="1">Auteur</th>
                                                <th colspan="1" rowspan="1">Date publication</th>
                                                <th colspan="1" rowspan="1">Etat</th>
                                                <th colspan="1" rowspan="1">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>