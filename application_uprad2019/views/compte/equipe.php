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
                        <h3 class="box-title">Equipes UPRAD</h3>
                        <a href="<?php echo site_url('admin-uprad/adherant-equipe'); ?>" class="btn btn-info" style="float:right;">Passer un adherant vers l'équipe</a>
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
                                                <th aria-controls="example1" aria-label="CSS grade: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 50.683px;" tabindex="0">Fonction</th>
                                                <th aria-controls="example1" aria-label="CSS grade: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 70.683px;" tabindex="0">Service</th>
                                                <th aria-controls="example1" aria-label="CSS grade: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 80.683px;" tabindex="0">Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($equipes)) {
                                                foreach ($equipes as $val) { ?>
                                                    <tr class="odd" role="row">
                                                        <td class="sorting_1"><?php echo $val->civilite; ?></td>
                                                        <td><?php echo $val->nom; ?></td>
                                                        <td><?php echo $val->prenom;  ?></td>
                                                        <td><?php echo $val->email; ?></td>
                                                        <td><?php echo $val->telephone; ?></td>
                                                        <td><?php echo $val->fonction; ?></td>
                                                        <td><?php echo $val->service;  ?></td>
                                                        <td>
                                                            <a class="btn btn-info btn-sm" href="<?php echo site_url('admin-uprad/modifier-equipe/' . $val->id); ?>" type="button">
                                                                <i class="fa fa-edit" title="Modifier"></i>
                                                            </a>
                                                            <a class="btn btn-danger btn-sm" href="<?php echo site_url('admin-uprad/delete-equipe/' . $val->id); ?>" type="button">
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
                                                <th colspan="1" rowspan="1">Civilité</th>
                                                <th colspan="1" rowspan="1">Nom</th>
                                                <th colspan="1" rowspan="1">Prénom</th>
                                                <th colspan="1" rowspan="1">Email</th>
                                                <th colspan="1" rowspan="1">Téléphone</th>
                                                <th colspan="1" rowspan="1">Fonction</th>
                                                <th colspan="1" rowspan="1">Service</th>
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

<div id="myMembre" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Fiche d'un membre</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
        </div>

    </div>
</div>

<script>
    $(document).ready(function() {
        $(".clickmembre").click(function() {
            var id = $(this).attr('id');
            console.log(id);
        });
    });
</script>