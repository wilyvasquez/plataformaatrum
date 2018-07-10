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
                    <label>Tipo:</label>
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
                    <label for="modelo">Modelo:</label>
                    <input type="text" class="form-control" id="modelo" value="<?php if(!empty($modelo)) echo $modelo ?>" placeholder="Modelo" required>
                  </div>
                  <div class="form-group">
                    <label for="motor">Motor:</label>
                    <input type="text" class="form-control" id="motor" value="<?php if(!empty($motor)) echo $motor ?>" placeholder="Motor" required>
                  </div>
                  <div class="form-group">
                    <label for="trasnmision">Transmision:</label>
                    <input type="text" class="form-control" id="trasnmision" value="<?php if(!empty($trasnmision)) echo $trasnmision ?>" placeholder="Transmision" required>
                  </div>
                  <div class="form-group">
                    <label for="t_motor">Tipo de motor:</label>
                    <input type="text" class="form-control" id="t_motor" value="<?php if(!empty($t_motor)) echo $t_motor ?>" placeholder="Tipo de motor" required>
                  </div>
                  <div class="form-group">
                    <label for="encendido">Tipo de encendio:</label>
                    <input type="text" class="form-control" id="encendido" value="<?php if(!empty($encendido)) echo $encendido ?>" placeholder="Tipo de encendido" required>
                  </div>
                </div>
                <div class="col-md-6">                  
                  <div class="form-group">
                    <label for="combustible">Sistema de combustible:</label>
                    <input type="text" class="form-control" id="combustible" value="<?php if(!empty($combustible)) echo $combustible ?>" placeholder="Sistema de combustible" required>
                  </div>
                  <div class="form-group">
                    <label for="arranque">Sistema de arranque:</label>
                    <input type="text" class="form-control" id="arranque" value="<?php if(!empty($arranque)) echo $arranque ?>" placeholder="Sistema de arranque" required>
                  </div> 
                  <div class="form-group">
                    <label for="lubricacion">Sistema de lubricacion:</label>
                    <input type="text" class="form-control" id="lubricacion" value="<?php if(!empty($lubricacion)) echo $lubricacion ?>" placeholder="Sistema de lubricacion" required>
                  </div> 
                  <div class="form-group">
                    <label for="f_delantero">Freno delantero:</label>
                    <input type="text" class="form-control" id="f_delantero" value="<?php if(!empty($f_delantero)) echo $f_delantero ?>" placeholder="Freno delantero" required>
                  </div>                
                  <div class="form-group">
                    <label for="f_trasero">Freno trasero:</label>
                    <input type="text" class="form-control" id="f_trasero" value="<?php if(!empty($f_trasero)) echo $f_trasero ?>" placeholder="Freno trasero" required>
                  </div>
                  <div class="form-group">
                    <label for="foto">Foto Motocicleta:</label>
                    <input type="file" id="foto" required>

                    <p class="help-block">Imagen no mayor a 500 KB.</p>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <?php if (!empty($id_moto)) { ?>
                  <button type="submit" class="btn btn-primary pull-right">Actualizar</button>
                <?php }else{ ?>
                  <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                <?php } ?>
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