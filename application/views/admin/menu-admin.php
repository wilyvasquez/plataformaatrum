<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?= base_url() ?>assets/img/user_default.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Buscar...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENU NAVEGACION</li>
      <li class="treeview <?php if(!empty($ref)) echo 'active' ?>">
        <a href="#">
          <i class="fa fa-home"></i> <span>Principal</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>estadistica"><i class="fa fa-circle-o"></i> Estadisticas</a></li>
          <li><a href="<?= base_url() ?>referencia"><i class="fa fa-circle-o"></i> Referencias</a></li>
        </ul>
      </li>
      <li class="header">ALTAS</li>
      <li class="treeview <?php if(!empty($motos)) echo 'active' ?>">
        <a href="#">
          <i class="fa fa-motorcycle"></i> <span>Motocicletas</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>motoAlta"><i class="fa fa-circle-o"></i> Agregar</a></li>
          <li><a href="<?= base_url() ?>motos"><i class="fa fa-circle-o"></i> Listado</a></li>
        </ul>
      </li>
      <li class="treeview <?php if(!empty($user)) echo 'active' ?>">
        <a href="#">
          <i class="fa fa-user"></i> <span>Usuarios</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>userAlta"><i class="fa fa-circle-o"></i> Agregar</a></li>
          <li><a href="<?= base_url() ?>user"><i class="fa fa-circle-o"></i> Listado</a></li>
        </ul>
      </li>
      <li class="treeview <?php if(!empty($credito)) echo 'active' ?>">
        <a href="#">
          <i class="fa fa-credit-card"></i> <span>Creditos</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>creditoAlta"><i class="fa fa-circle-o"></i> Agregar</a></li>
          <li><a href="<?= base_url() ?>credito"><i class="fa fa-circle-o"></i> Listado</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>