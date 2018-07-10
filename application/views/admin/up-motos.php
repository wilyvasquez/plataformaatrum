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
        <!-- left column -->
        <div class="col-md-8">
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
                    <label for="tipo">Tipo:</label>
                    <input type="text" class="form-control" id="tipo">
                  </div>
                  <div class="form-group">
                    <label for="modelo">Modelo:</label>
                    <input type="text" class="form-control" id="modelo">
                  </div>
                  <div class="form-group">
                    <label for="modelo">Año:</label>
                    <input type="text" class="form-control" id="modelo">
                  </div>
                  <div class="form-group">
                    <label for="s_basico">Seguro basico:</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                      <input type="text" class="form-control" id="s_basico">
                    </div>
                    <!-- <p class="help-block">El seguro basico es con I.V.A.</p> -->
                  </div>
                  <div class="form-group">
                    <label for="s_limitado">Seguro limitado:</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                      <input type="text" class="form-control" id="s_limitado">
                    </div>
                    <!-- <p class="help-block">El seguro limitado es con I.V.A.</p> -->
                  </div>
                  <div class="form-group">
                    <label for="s_amplio">Seguro amplio:</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                      <input type="text" class="form-control" id="s_amplio">
                    </div>
                    <!-- <p class="help-block">El seguro amplio es con I.V.A.</p> -->
                  </div>
                  <div class="form-group">
                    <label for="s_amplio">Seguro basico comercial:</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                      <input type="text" class="form-control" id="s_amplio">
                    </div>
                    <!-- <p class="help-block">El seguro basico comercial es con I.V.A.</p> -->
                  </div>
                  <div class="form-group">
                    <label for="s_amplio">Seguro limitado comercial:</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                      <input type="text" class="form-control" id="s_amplio">
                    </div>
                    <!-- <p class="help-block">El seguro limitado comercial es con I.V.A.</p> -->
                  </div>                                                     
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="s_amplio">Seguro amplio comercial:</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                      <input type="text" class="form-control" id="s_amplio">
                    </div>
                    <!-- <p class="help-block">El seguro amplio comercial es con I.V.A.</p> -->
                  </div> 
                  <div class="form-group">
                    <label for="encendido">Tipo de encendio:</label>
                    <input type="text" class="form-control" id="encendido">
                  </div>                  
                  <div class="form-group">
                    <label for="combustible">Sistema de combustible:</label>
                    <input type="text" class="form-control" id="combustible">
                  </div>
                  <div class="form-group">
                    <label for="arranque">Sistema de arranque:</label>
                    <input type="text" class="form-control" id="arranque">
                  </div> 
                  <div class="form-group">
                    <label for="lubricacion">Sistema de lubricacion:</label>
                    <input type="text" class="form-control" id="lubricacion">
                  </div> 
                  <div class="form-group">
                    <label for="f_delantero">Freno delantero:</label>
                    <input type="text" class="form-control" id="f_delantero">
                  </div>                
                  <div class="form-group">
                    <label for="f_trasero">Freno trasero:</label>
                    <input type="text" class="form-control" id="f_trasero">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Actualizar</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
        <div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Actualizar foto</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">                
                <div class="col-md-12">
                  <div class="col-md-12 img-thumbnail" style="background-color: #D1D2D3">
                    <center>
                      <img src="<?= base_url() ?>assets/img/no_disponible.png" width="200" class="img-rounded img-responsive">
                    </center>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <label for="foto">Foto Motocicleta:</label>
                      <input type="file" class="filestyle" data-buttonText="Seleccionar Img" data-buttonName="btn-primary" data-buttonBefore="true" data-placeholder="Archivo no seleccionado" id="foto">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <p class="help-block">Imagen no mayor a 500 KB.</p>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Actualizar</button>
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
  <!-- /.content-wrapper