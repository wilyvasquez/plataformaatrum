<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Referenciar Datos
        <small>Agregar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="estadistica"><i class="fa fa-dashboard"></i> Principal</a></li>
        <li><a href="referencia">Referencia</a></li>
        <li class="active">Referenciar Datos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Referenciar Motocicleta - Precio - Seguro</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label>Motocicleta:</label>
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
                  <label>Año:</label>
                  <select class="form-control select2" style="width: 100%;" required> 
                    <option selected="selected">2016</option>
                    <option>2017</option>
                    <option>2018</option>
                    <option>2019</option>
                    <option>2020</option>
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="precio">Precio:</label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input type="number" class="form-control" id="precio" placeholder="Precio de la motocicleta" required>
                  </div>
                   <p class="help-block">El precio es con I.V.A.</p>
                </div>
                <div class="form-group">
                  <label for="s_basico">Seguro basico:</label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                  	<input type="text" class="form-control" id="s_basico" placeholder="Seguro basico" required>
                  </div>
                  <p class="help-block">El seguro basico es con I.V.A.</p>
                </div>
                <div class="form-group">
                  <label for="s_limitado">Seguro limitado:</label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                  	<input type="text" class="form-control" id="s_limitado" placeholder="Seguro limitado" required>
                  </div>
                  <p class="help-block">El seguro limitado es con I.V.A.</p>
                </div>
                <div class="form-group">
                  <label for="s_amplio">Seguro amplio:</label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                  	<input type="text" class="form-control" id="s_amplio" placeholder="Seguro amplio" required>
                  </div>
                  <p class="help-block">El seguro amplio es con I.V.A.</p>
                </div>
                <div class="form-group">
                  <label for="s_limitado">Seguro limitado comercial:</label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                  	<input type="text" class="form-control" id="s_limitado" placeholder="Seguro limitado comercial" required>
                  </div>
                  <p class="help-block">El seguro limitado comercial es con I.V.A.</p>
                </div>
                <div class="form-group">
                  <label for="s_amplio">Seguro amplio comercial:</label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                  	<input type="text" class="form-control" id="s_amplio" placeholder="Seguro amplio comercial" required>
                  </div>
                  <p class="help-block">El seguro amplio comercial es con I.V.A.</p>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Vincular</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Referenciar Credito - Seguro</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label>Credito:</label>
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
                  <label>Tipo de Seguro:</label>
                  <select class="form-control select2" style="width: 100%;" required> 
                    <option selected="selected">Basico</option>
                    <option>Limitado</option>
                    <option>Amplio</option>
                    <option>Basico Comercial</option>
                    <option>Limitado Comercial</option>
                    <option>Amplio Comercial</option>
                    <option>Sin seguro</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Vincular</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->

        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Referenciar Credito - Años</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label>Credito:</label>
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
                  <label>Años:</label>
                  <select class="form-control select2" style="width: 100%;" required> 
                    <option selected="selected">1 Mes</option>
                    <option>2 Meses</option>
                    <option>3 Meses</option>
                    <option>1 Año</option>
                    <option>16 Meses</option>
                    <option>18 Meses</option>
                    <option>2 Años</option>
                    <option>3 Años</option>
                    <option>4 Años</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Vincular</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->

        <!-- right column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Referenciar Credito - Plazo</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label>Credito:</label>
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
                  <label>Plazo:</label>
                  <select class="form-control select2" style="width: 100%;" required> 
                    <option selected="selected">Semanas</option>
                    <option>Quincenas</option>
                    <option>Meses</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Vincular</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->