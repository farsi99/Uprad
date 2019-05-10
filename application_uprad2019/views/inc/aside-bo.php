<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img alt="User Image" class="img-circle" src="<?php echo base_url(); ?>assets/admin/img/user2-160x160.jpg">
            </div>
            <div class="pull-left info">
                <p style="text-transform:uppercase;">Farouk</p>
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
                        <a href="#">
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
                        <a href="pages/layout/fixed.html">
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
                        <a href="pages/UI/general.html">
                            <i class="fa fa-circle-o"></i>
                            toutes les propositions</a>
                    </li>
                    <li>
                        <a href="pages/UI/icons.html">
                            <i class="fa fa-circle-o"></i>
                            En attentes</a>
                    </li>
                    <li>
                        <a href="pages/UI/buttons.html">
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
                        <a href="pages/forms/general.html">
                            <i class="fa fa-circle-o"></i>
                            Tous les agendas</a>
                    </li>
                    <li>
                        <a href="pages/forms/advanced.html">
                            <i class="fa fa-circle-o"></i>
                            En attente</a>
                    </li>
                    <li>
                        <a href="pages/forms/editors.html">
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
                        <a href="pages/tables/simple.html">
                            <i class="fa fa-circle-o"></i>
                            Toues les témoignages</a>
                    </li>
                    <li>
                        <a href="pages/tables/data.html">
                            <i class="fa fa-circle-o"></i>
                            Ajouter</a>
                    </li>


                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Utilisateurs</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="pages/tables/simple.html">
                            <i class="fa fa-circle-o"></i>
                            Adherants</a>
                    </li>
                    <li>
                        <a href="pages/tables/data.html">
                            <i class="fa fa-circle-o"></i>
                            Equipes</a>
                    </li>
                    <li>
                        <a href="pages/tables/data.html">
                            <i class="fa fa-circle-o"></i>
                            Administration</a>
                    </li>

                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>