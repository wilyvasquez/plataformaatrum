<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Datos Credito
        <small><?= $title ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="estadistica"><i class="fa fa-dashboard"></i> Principal</a></li>
        <li><a href="credito">Credito</a></li>
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
                    <label for="credito">Credito:</label>
                    <input type="text" class="form-control" id="credito" value="<?php if(!empty($n_credito)) echo $n_credito ?>" placeholder="Nombre del credito" required>
                  </div>
                  <div class="form-group">
                    <label for="t_base">Tasa base:</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                      <input type="text" class="form-control" id="t_base" value="<?php if(!empty($t_base)) echo $t_base ?>" placeholder="Tasa base" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="apertura">Costo apertura:</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                      <input type="text" class="form-control" id="apertura" value="<?php if(!empty($apertura)) echo $apertura ?>" placeholder="Costo por apertura" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="d_apertura">Descuento apertura:</label>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                      <input type="text" class="form-control" id="d_apertura" value="<?php if(!empty($d_apertura)) echo $d_apertura ?>" placeholder="Descuento por apertura" required>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">                  
                  <div class="form-group">
                    <label for="tasa_inc">Tasa Inc. Anual:</label>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                      <input type="text" class="form-control" id="tasa_inc" value="<?php if(!empty($tasa_inc)) echo $tasa_inc ?>" placeholder="Tasa de incremento anual" required>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <?php if (!empty($n_credito)) { ?>
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