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
                        <h3 class="box-title">Passer un adhérant vers équipe</h3>
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
                                                <th aria-controls="example1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending" class="sorting_asc" colspan="1" rowspan="1" style="width: 30.617px;" tabindex="0">Civilité</th>
                                                <th aria-controls="example1" aria-label="Platform(s): activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 40.083px;" tabindex="0">Nom</th>
                                                <th aria-controls="example1" aria-label="Engine version: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 76.333px;" tabindex="0">Prénom</th>
                                                <th aria-controls="example1" aria-label="Engine version: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 76.333px;" tabindex="0">Email</th>
                                                <th aria-controls="example1" aria-label="Engine version: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 76.333px;" tabindex="0">Téléphone</th>
                                                <th aria-controls="example1" aria-label="CSS grade: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 50.683px;" tabindex="0">Etat</th>
                                                <th aria-controls="example1" aria-label="CSS grade: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 70.683px;" tabindex="0">Inscrit le</th>
                                                <th aria-controls="example1" aria-label="CSS grade: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 80.683px;" tabindex="0">Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($membres)) {
                                                foreach ($membres as $val) { ?>
                                                    <tr class="odd" role="row">
                                                        <td class="sorting_1"><?php echo $val->civilite; ?></td>
                                                        <td><?php echo $val->nom; ?></td>
                                                        <td><?php echo $val->prenom;  ?></td>
                                                        <td><?php echo $val->email; ?></td>
                                                        <td><?php echo $val->telephone; ?></td>
                                                        <td><?php echo $val->etat == 1 ? "<span class='label label-success'>validé</span>" : "<span class='label label-warning'>En attente</span>"; ?></td>
                                                        <td><?php echo strftime('%d/%m/%Y à %Hh%M', strtotime($val->dateAdhesion));  ?></td>
                                                        <td>
                                                            <a class="btn btn-info btn-sm" href="<?php echo site_url('admin-uprad/update-equipe/' . $val->id); ?>" type="button">
                                                                Adherant <i class="fa fa-arrow-right" title="Convertir"> équipe</i>
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
                                                <th colspan="1" rowspan="1">Civilité</th>
                                                <th colspan="1" rowspan="1">Nom</th>
                                                <th colspan="1" rowspan="1">Prénom</th>
                                                <th colspan="1" rowspan="1">Email</th>
                                                <th colspan="1" rowspan="1">Téléphone</th>
                                                <th colspan="1" rowspan="1">Etat</th>
                                                <th colspan="1" rowspan="1">Insrit le</th>
                                                <th colspan="1" rowspan="1">Actions</th>
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