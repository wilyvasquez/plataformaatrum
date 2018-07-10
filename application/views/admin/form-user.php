<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Datos Usuario
        <small>Agregar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="estadistica"><i class="fa fa-dashboard"></i> Principal</a></li>
        <li><a href="user">Usuarios</a></li>
        <li class="active">Agregar Usuarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Subir Usuario</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre del usuario" required>
                  </div>
                  <div class="form-group">
                    <label for="correo">Correo:</label>
                    <input type="text" class="form-control" id="correo" placeholder="Correo" required>
                  </div>
                  <div class="form-group">
                    <label for="telefono">Telefono:</label>
                    <input type="text" class="form-control" id="telefono" placeholder="Telefono" required>
                  </div>
                  <div class="form-group">
                    <label>Sucursal:</label>
                    <select class="form-control select2" style="width: 100%;" required>
                      <option selected="selected">Oaxaca</option>
                      <option>Monterrey</option>
                      <option>Chiapas</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Permiso:</label>
                    <select class="form-control select2" style="width: 100%;" required> 
                      <option selected="selected">Vendedor</option>
                      <option>Refacciones</option>
                      <option>Caja</option>
                      <option>Creditos</option>
                      <option>Administrador</option>
                      <option>Contabilida</option>
                      <option>Recursos Humanos</option>
                      <option>Call Center</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="foto">Foto Usuario:</label>
                    <input type="file" id="foto" required>

                    <p class="help-block">La foto a subir tiene que ser reciente.</p>
                  </div>                  
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="usuario">Usuario:</label>
                    <input type="text" class="form-control" id="usuario" placeholder="Usuario" required>
                  </div>
                  <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="text" class="form-control" id="password" placeholder="Contraseña" required>
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