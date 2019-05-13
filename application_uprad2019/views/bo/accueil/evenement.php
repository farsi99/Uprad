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
                        <h3 class="box-title">Agenda événements</h3>
                        <a href="<?php echo site_url('admin-uprad/ajout-evenement'); ?>" class="btn btn-info" style="float:right;">Ajouter un événement</a>
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
                                                <th aria-controls="example1" aria-label="Platform(s): activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 97.083px;" tabindex="0">Date Début</th>
                                                <th aria-controls="example1" aria-label="Platform(s): activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 77.083px;" tabindex="0">Date Fin</th>
                                                <th aria-controls="example1" aria-label="Engine version: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 126.333px;" tabindex="0">type</th>
                                                <th aria-controls="example1" aria-label="Engine version: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 126.333px;" tabindex="0">Soumis par:</th>
                                                <th aria-controls="example1" aria-label="Engine version: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 126.333px;" tabindex="0">Email</th>
                                                <th aria-controls="example1" aria-label="CSS grade: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 40.683px;" tabindex="0">Etat</th>
                                                <th aria-controls="example1" aria-label="CSS grade: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 103.683px;" tabindex="0">Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($events)) {
                                                foreach ($events as $event) { ?>
                                                    <tr class="odd" role="row">
                                                        <td class="sorting_1"><?php echo $event->titre; ?></td>
                                                        <td><?php echo strftime('%d/%m/%Y à %Hh%M', strtotime($event->dateDebut));  ?></td>
                                                        <td><?php echo strftime('%d/%m/%Y à %Hh%M', strtotime($event->dateFin));  ?></td>
                                                        <td><?php echo $event->typeEvenement; ?></td>
                                                        <td><?php echo $event->nom . ' ' . $event->prenom; ?></td>
                                                        <td><?php echo $event->email; ?></td>
                                                        <td>
                                                            <?php if ($event->etat == 1) { ?>
                                                                <span class="label label-success">Validé</span>
                                                            <?php } elseif ($event->etat == 0) { ?>
                                                                <span class="label label-warning">En attente</span>
                                                            <?php } elseif ($event->etat == 2) { ?>
                                                                <span class="label label-danger">Refuser</span>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-info btn-sm" href="<?php echo site_url('admin-uprad/update-evenement/' . $event->id); ?>" type="button">
                                                                <i class="fa fa-edit" title="Modifier"></i>
                                                            </a>
                                                            <a class="btn btn-danger btn-sm" href="<?php echo site_url('admin-uprad/delete-evenement/' . $event->id); ?>" type="button">
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
                                                <th colspan="1" rowspan="1">Date Début</th>
                                                <th colspan="1" rowspan="1">Date Fin</th>
                                                <th colspan="1" rowspan="1">Type</th>
                                                <th colspan="1" rowspan="1">proposé par:</th>
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