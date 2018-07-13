<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Datos Motos
        <small><?= $title ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="estadistica"><i class="fa fa-dashboard"></i> Principal</a></li>
        <li><a href="../motos">Motos</a></li>
        <li class="active"><?= $title ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p><?= $link['perfil'] ?> Totales</p>
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

              <p><?= $link['perfil'] ?> Activos</p>
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

              <p><?= $link['perfil'] ?> Pausados</p>
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

              <p><?= $link['perfil'] ?> Atrasados</p>
            </div>
            <div class="icon">
              <i class="ion ion-alert-circled"></i>
            </div>
            <a href="<?= $link['atrasados'] ?>" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?= $title ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Tipo de cotizacion:</label>
                    <select class="form-control select2" style="width: 100%;" required> 
                      <option selected="selected">Scooter</option>
                      <option>Ciudad</option>
                      <option>Deportiva</option>
                      <option>Croos</option>
                      <option>Administrador</option>
                      <option>Contabilida</option>
                      <option>Recursos Humanos</option>
                      <option>Call Center</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="modelo">Motocicleta:</label>
                    <input type="text" class="form-control" id="modelo" placeholder="Modelo" required>
                  </div>
                  <div class="form-group">
                    <label for="motor">Año:</label>
                    <input type="text" class="form-control" id="motor" placeholder="Motor" required>
                  </div>
                  <div class="form-group">
                    <label for="trasnmision">Precio:</label>
                    <input type="text" class="form-control" id="trasnmision" placeholder="Transmision" required>
                  </div>
                  <div class="form-group">
                    <label for="foto">Foto Moto:</label>
                    <input type="file" class="form-control filestyle" data-buttonText="Seleccionar Img" data-buttonName="btn-primary" data-buttonBefore="true" data-placeholder="Imagen no seleccionado" data-iconName="glyphicon glyphicon-picture" accept="image/*" id="foto" required>
                  </div>
                  <div class="form-group">
                    <label for="pdffactura">Factura:</label>
                    <input type="file" class="form-control filestyle" data-buttonText="Seleccionar PDF" data-buttonName="btn-primary" data-buttonBefore="true" data-placeholder="Archivo no seleccionado" data-iconName="fa fa-file-pdf-o" accept=".pdf" id="pdffactura" required>
                  </div>
                </div>
                <div class="col-md-6">                  
                  <div class="form-group">
                    <label for="combustible">Nombre cliente:</label>
                    <select class="form-control select2" style="width: 100%;" required> 
                      <option selected="selected">Scooter</option>
                      <option>Ciudad</option>
                      <option>Deportiva</option>
                      <option>Croos</option>
                      <option>Administrador</option>
                      <option>Contabilida</option>
                      <option>Recursos Humanos</option>
                      <option>Call Center</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="arranque">Direccion:</label>
                    <input type="text" class="form-control" id="arranque" placeholder="Sistema de arranque" required>
                  </div> 
                  <div class="form-group">
                    <label for="lubricacion">Codigo postal:</label>
                    <input type="text" class="form-control" id="lubricacion" placeholder="Sistema de lubricacion" required>
                  </div> 
                  <div class="form-group">
                    <label for="f_delantero">Numero de contrato:</label>
                    <input type="text" class="form-control" id="f_delantero" placeholder="Freno delantero" required>
                  </div>                
                  <div class="form-group">
                    <label for="f_trasero">Numero de factura:</label>
                    <input type="text" class="form-control" id="f_trasero" placeholder="Freno trasero" required>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Guardar</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->