<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="<?php echo $this->uri->segment(1) == 'dashboard' ? 'active' : '' ?>">
        <a href="<?= site_url('/'); ?>">
                <i class="fa fa-info-circle"></i> <span><b>Informasi COVID-19</b></span>
            </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i>
            <span><b style="color:brown;font-size:15px;">Data COVID-19</b></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo $this->uri->segment(1) == 'nasional' ? 'active' : '' ?>">
                <a href="<?= site_url('nasional/indonesia'); ?>">
                    <i class="fa fa-flag"></i> <span>Indonesia</span>
                </a>
            </li>
            <li class="<?php echo $this->uri->segment(1) == 'internasional' ? 'active' : '' ?>">
                <a href="<?= site_url('internasional/dunia'); ?>">
                    <i class="fa fa-globe"></i> <span>Dunia</span>
                </a>
            </li>
          </ul>
        </li>
    </ul>
</section>
<!-- /.sidebar -->