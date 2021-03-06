<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img alt="User Image" class="img-circle" src="<?php echo base_url(); ?>assets/photos/<?php echo !empty($this->session->userdata['photo']) ? $this->session->userdata['photo'] : ''; ?>">
            </div>
            <div class="pull-left info">
                <p style="text-transform:uppercase;"><?php echo !empty($this->session->userdata['prenom']) ? $this->session->userdata['prenom'] : ''; ?></p>
                <a href="#">
                    <i class="fa fa-circle text-success"></i>
                    En ligne</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" class="sidebar-form" method="get">
            <div class="input-group">
                <input class="form-control" name="q" placeholder="Search..." type="text">
                <span class="input-group-btn">
                    <button class="btn btn-flat" id="search-btn" name="search" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU NAVIGATION</li>
            <li class="active treeview menu-open">
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    <span>Tableau de bord</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo site_url('admin-uprad'); ?>">
                            <i class="fa fa-circle-o"></i>
                            Tableau de bord</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">

                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Actaulités</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo site_url('admin-uprad/actualite'); ?>">
                            <i class="fa fa-circle-o"></i>
                            Tous les articles</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin-uprad/ajout-actualite'); ?>">
                            <i class="fa fa-circle-o"></i>
                            Ajouter</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin-uprad/categorie'); ?>">
                            <i class="fa fa-circle-o"></i>
                            Catégorie</a>
                    </li>
                    <li>
                        <a href="pages/layout/collapsed-sidebar.html">
                            <i class="fa fa-circle-o"></i>
                            Tags</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>Pages</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo site_url('admin-uprad/page'); ?>">
                            <i class="fa fa-circle-o"></i>
                            Toutes les pages</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin-uprad/ajout-page'); ?>">
                            <i class="fa fa-circle-o"></i>
                            Ajouter</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bell-o"></i>
                    <span>Salon des idées</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        <small class="label pull-right bg-yellow">12</small>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo site_url('admin-uprad/tous-idees'); ?>">
                            <i class="fa fa-circle-o"></i>
                            toutes les propositions</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin-uprad/attente-idees'); ?>">
                            <i class="fa fa-circle-o"></i>
                            En attentes</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin-uprad/retenues-idees'); ?>">
                            <i class="fa fa-circle-o"></i>
                            Retenues</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-calendar"></i>
                    <span>Agenda événements</span>
                    <span class="pull-right-container">

                        <i class="fa fa-angle-left pull-right"></i>
                        <small class="label pull-right bg-red">3</small>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo site_url('admin-uprad/evenement'); ?>">
                            <i class="fa fa-circle-o"></i>
                            Tous les agendas</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin-uprad/evenement-attente'); ?>">
                            <i class="fa fa-circle-o"></i>
                            En attente</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin-uprad/ajout-evenement'); ?>">
                            <i class="fa fa-circle-o"></i>
                            Ajouter</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-comments"></i>
                    <span>Témoignages</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo site_url('admin-uprad/temoignage'); ?>">
                            <i class="fa fa-circle-o"></i>
                            Toues les témoignages</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin-uprad/ajout-temoignage'); ?>">
                            <i class="fa fa-circle-o"></i>
                            Ajouter</a>
                    </li>


                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-photo"></i>
                    <span>Galerie d'image</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo site_url('admin-uprad/galerie'); ?>">
                            <i class="fa fa-circle-o"></i>
                            Toutes les images</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin-uprad/ajout-galerie'); ?>">
                            <i class="fa fa-circle-o"></i>
                            Ajouter</a>
                    </li>


                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Membres</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo site_url('admin-uprad/adherant'); ?>">
                            <i class="fa fa-circle-o"></i>
                            Tous les adherants</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin-uprad/equipe'); ?>">
                            <i class="fa fa-circle-o"></i>
                            Toute l'équipe</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin-uprad/conv-equipe') ?>">
                            <i class="fa fa-circle-o"></i>
                            Adherant => équipe</a>
                    </li>

                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>