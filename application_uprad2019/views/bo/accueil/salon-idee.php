<div class="content-wrapper" style="min-height: 915.667px;">
    <!-- Content Header (Page header) -->
    <?php $this->load->view('inc/entete-admin.php'); ?>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <?php if ($this->session->flashdata('success')) { ?>
                    <div class="callout callout-success alert-dismissible">
                        <p><?php echo $this->session->flashdata('success'); ?></p>
                    </div>
                <?php } ?>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Idées proposées</h3>
                        <a href="<?php echo site_url('admin-uprad/ajout-salon'); ?>" class="btn btn-info" style="float:right;">Ajouter une idée</a>
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
                                                <th aria-controls="example1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending" class="sorting_asc" colspan="1" rowspan="1" style="width: 300.617px;" tabindex="0">Sujet</th>
                                                <th aria-controls="example1" aria-label="Platform(s): activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 107.083px;" tabindex="0">Catégorie</th>
                                                <th aria-controls="example1" aria-label="Engine version: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 126.333px;" tabindex="0">Proposée par</th>
                                                <th aria-controls="example1" aria-label="Engine version: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 126.333px;" tabindex="0">Email</th>
                                                <th aria-controls="example1" aria-label="CSS grade: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 93.683px;" tabindex="0">Etat</th>
                                                <th aria-controls="example1" aria-label="CSS grade: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 33.683px;" tabindex="0">Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($salons)) {
                                                foreach ($salons as $salon) { ?>
                                                    <tr class="odd" role="row">
                                                        <td class="sorting_1"><?php echo $salon->sujet; ?></td>
                                                        <td><?php echo $salon->typeidee; ?></td>
                                                        <td><?php echo $salon->nom . ' ' . $salon->prenom;  ?></td>
                                                        <td><?php echo $salon->email; ?></td>
                                                        <td>
                                                            <?php if ($salon->etat == 1) { ?>
                                                                <span class="label label-success">Retenue</span>
                                                            <?php } elseif ($salon->etat == 0) { ?>
                                                                <span class="label label-warning">En attente</span>
                                                            <?php } elseif ($salon->etat == 2) { ?>
                                                                <span class="label label-danger">Refusée</span>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-info btn-sm" href="<?php echo site_url('admin-uprad/update-salon/' . $salon->id); ?>" type="button">
                                                                Modif <i class="fa fa-edit" title="Modifier"></i>
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
                                                <th colspan="1" rowspan="1">Sujet</th>
                                                <th colspan="1" rowspan="1">Catégorie</th>
                                                <th colspan="1" rowspan="1">Nom complet</th>
                                                <th colspan="1" rowspan="1">Email</th>
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