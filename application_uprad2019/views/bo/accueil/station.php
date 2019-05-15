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
                        <h3 class="box-title">Catégories des articles</h3>
                        <a href="<?php echo site_url('admin-uprad/ajout-categorie'); ?>" class="btn btn-info" style="float:right;">Ajouter une catégorie</a>
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
                                                <th aria-controls="example1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending" class="sorting_asc" colspan="1" rowspan="1" style="width: 300.617px;" tabindex="0">Libelle</th>
                                                <th aria-controls="example1" aria-label="CSS grade: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 103.683px;" tabindex="0">Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($stations)) {
                                                foreach ($stations as $cat) { ?>
                                                    <tr class="odd" role="row">
                                                        <td class="sorting_1"><?php echo $cat->libelle; ?></td>
                                                        <td>
                                                            <a class="btn btn-info btn-sm" href="<?php echo site_url('admin-uprad/update-categorie/' . $cat->id); ?>" type="button">
                                                                Modif <i class="fa fa-edit" title="Modifier"></i>
                                                            </a>
                                                            <a class="btn btn-danger btn-sm" href="<?php echo site_url('admin-uprad/delete-categorie/' . $cat->id); ?>" type="button">
                                                                Supp <i class="fa fa-trash-o" title="Supprimer"></i>
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
                                                <th colspan="1" rowspan="1">Libelle</th>
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