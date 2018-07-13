<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title ?>
        <small><?= $link['perfil'] ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="principal"><i class="fa fa-home"></i> Principal</a></li>
        <li class="active"><?= $title ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Total de procesos</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-box"></i>
            </div>
            <a href="<?= $link['registro'] ?>" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Procesos Activos</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-checkmark"></i>
            </div>
            <a href="<?= $link['activos'] ?>" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Procesos pre-autorizados</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-minus"></i>
            </div>
            <a href="<?= $link['pausados'] ?>" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Procesos denegados</p>
            </div>
            <div class="icon">
              <i class="ion ion-alert-circled"></i>
            </div>
            <a href="<?= $link['atrasados'] ?>" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Cliente</th>
                  <th>N° Cotizacion</th>
                  <th>Motocicleta</th>
                  <th>Fecha alta</th>
                  <th>Vendedor</th>
                  <th>Sucursal</th>
                  <th>Status</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td></td>
                  <td></td>
                  <td><a href="<?= $link['detalle'] ?>/1" class="btn btn-block btn-primary btn-xs">Detalles</a></td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>C</td>
                  <td></td>
                  <td></td>
                  <td><a href="<?= $link['detalle'] ?>/1" class="btn btn-block btn-primary btn-xs">Detalles</a></td>
                </tr>
                <tr>
                  <td>Webkit</td>
                  <td>S60</td>
                  <td>S60</td>
                  <td>413</td>
                  <td>A</td>
                  <td></td>
                  <td></td>
                  <td><a href="<?= $link['detalle'] ?>/1" class="btn btn-block btn-primary btn-xs">Detalles</a></td>
                </tr>
                <tr>
                  <td>Presto</td>
                  <td>Nintendo DS browser</td>
                  <td>Nintendo DS</td>
                  <td>8.5</td>
                  <td>C/A<sup>1</sup></td>
                  <td></td>
                  <td></td>
                  <td><a href="<?= $link['detalle'] ?>/1" class="btn btn-block btn-primary btn-xs">Detalles</a></td>
                </tr>
                <tr>
                  <td>Misc</td>
                  <td>Links</td>
                  <td>Text only</td>
                  <td>-</td>
                  <td>X</td>
                  <td></td>
                  <td></td>
                  <td><a href="<?= $link['detalle'] ?>/1" class="btn btn-block btn-primary btn-xs">Detalles</a></td>
                </tr>
                <tr>
                  <td>Other browsers</td>
                  <td>All others</td>
                  <td>-</td>
                  <td>-</td>
                  <td>U</td>
                  <td></td>
                  <td></td>
                  <td><a href="<?= $link['detalle'] ?>/1" class="btn btn-block btn-primary btn-xs">Detalles</a></td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>Cliente</th>
                  <th>N° Cotizacion</th>
                  <th>Motocicleta</th>
                  <th>Fecha alta</th>
                  <th>Vendedor</th>
                  <th>Sucursal</th>
                  <th>Status</th>
                  <th></th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->