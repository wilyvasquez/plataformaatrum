<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Generar Contrato
        <small>Cliente</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="principal"><i class="fa fa-home"></i> Principal</a></li>
        <li><a href="clientes">Cliente</a></li>
        <li class="active">Generar Contrato</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      <form action="#">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del Cliente</h3>
            </div>

            <div class="col-md-6">
              <div class="box-body">
                <div class="form-group">
                  <label for="nombre">Nombre completo</label>
                  <input type="text" class="form-control" id="nombre" placeholder="Nombre completo" required required>
                </div>
                <div class="form-group">
                  <label for="genero">Genero</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Hombre</option>
                    <option>Mujer</option>
                    <option>California</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="identificacion">Tipo de identificacion</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">INE</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="num_identificacion">Numero de identificacion</label>
                  <input type="text" class="form-control" id="num_identificacion" placeholder="Numero de identificacion" required>
                </div>
                <div class="form-group">
                  <label for="rfc">Numero de RFC</label>
                  <input type="text" class="form-control" id="rfc" placeholder="Numero de RFC" required>
                </div>
                <div class="form-group">
                  <label for="curp">Curp</label>
                  <input type="text" class="form-control" id="curp" placeholder="Curp" required>
                </div>                  
                <div class="form-group">
                  <label for="num_celular">Numero de Celular</label>
                  <input type="text" class="form-control" id="num_celular" placeholder="Numero de Celular" required>
                </div>
                <div class="form-group">
                  <label for="f_nacimiento">Fecha de Nacimiento</label>
                  <input type="text" class="form-control" id="f_nacimiento" placeholder="Fecha de Nacimiento" required>
                </div>                
                <div class="form-group">
                  <label for="direccion">Direccion</label>
                  <input type="text" class="form-control" id="direccion" placeholder="Direccion del cliente" required>
                </div>
                <div class="form-group">
                  <label for="codigo_postal">Codigo Postal</label>
                  <input type="text" class="form-control" id="codigo_postal" placeholder="Codigo Postal" required>
                </div>
                <div class="form-group">
                  <label for="fecha_vive">Fecha en que vive ahi</label>
                  <input type="text" class="form-control" id="fecha_vive" placeholder="Fecha en que vive ahi" required>
                </div>
                <div class="form-group">
                  <label for="t_vivienda">Tipo de vivienda</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">INE</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
              </div>                
            </div>
            <!-- /.box-body -->
            <div class="col-md-6">
              <div class="box-body">
                <div class="form-group">
                  <label for="estado_civil">Estado Civil</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">INE</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="correo">Correo del Cliente</label>
                  <input type="text" class="form-control" id="correo" placeholder="Correo del Cliente" required>
                </div>
                <div class="form-group">
                  <label for="ocupacion">Ocupacion</label>
                  <input type="text" class="form-control" id="ocupacion" placeholder="Ocupacion" required>
                </div>            
                <div class="form-group">
                  <label for="facebook">Facebook</label>
                  <input type="text" class="form-control" id="facebook" placeholder="Facebook" required>
                </div>
                <div class="form-group">
                  <label for="n_cotizacion">Numero de cotizacion</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">0001</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="factura">Numero de factura</label>
                  <input type="text" class="form-control" id="factura" placeholder="Numero de factura" required>
                </div>
                <div class="form-group">
                  <label for="sucursal">Sucursal</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Oaxaca</option>
                    <option>Monterrey</option>
                    <option>Chiapas</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="foto">Foto del cliente (JPG, PNG, JPEG)</label>
                  <input type="file" class="form-control filestyle" data-buttonText="Seleccionar Img" data-buttonName="btn-primary" data-buttonBefore="true" data-placeholder="Imagen no seleccionado" data-iconName="glyphicon glyphicon-picture" id="foto" required>

                  <p class="help-block">La foto debe tener un tamaño maximo de 500  KB.</p>
                </div>
                <div class="form-group">
                  <label for="h_izquierda">Huella Izquierda (JPG, PNG, JPEG)</label>
                  <input type="file" class="form-control filestyle" data-buttonText="Seleccionar Img" data-buttonName="btn-primary" data-buttonBefore="true" data-placeholder="Imagen no seleccionado" data-iconName="glyphicon glyphicon-picture" id="h_izquierda" required>

                  <p class="help-block">La foto debe tener un tamaño maximo de 500  KB.</p>
                </div>
                <div class="form-group">
                  <label for="h_derecha">Huella Derecha (JPG, PNG, JPEG)</label>
                  <input type="file" class="form-control filestyle" data-buttonText="Seleccionar Img" data-buttonName="btn-primary" data-buttonBefore="true" data-placeholder="Imagen no seleccionado" data-iconName="glyphicon glyphicon-picture" id="h_derecha" required>

                  <p class="help-block">La foto debe tener un tamaño maximo de 500  KB.</p>
                </div>
                <div class="form-group">
                  <label for="pdfactura">Factura (PDF)</label>
                  <input type="file" class="form-control filestyle" data-buttonText="Seleccionar PDF" data-buttonName="btn-primary" data-buttonBefore="true" data-placeholder="Archivo PDF no seleccionado" data-iconName="fa fa-file-pdf-o" id="pdfactura" required>

                  <p class="help-block">El archivo debe tener un tamaño maximo de 500  KB.</p>
                </div>
              </div>                
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            </div>
          </div>
          <!-- /.box -->

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos de la empresa donde labora</h3>
            </div>

            <div class="col-md-6">
              <div class="box-body">
                <div class="form-group">
                  <label for="n_empresa">Nombre de la empresa</label>
                  <input type="text" class="form-control" id="n_empresa" placeholder="Nombre de la empresa" required>
                </div>
                <div class="form-group">
                  <label for="direccion">Fecha de ingreso</label>
                  <input type="text" class="form-control" id="direccion" placeholder="Direccion del cliente" required>
                </div>
                <div class="form-group">
                  <label for="identificacion">Cargo del cliente</label>
                  <input type="text" class="form-control" id="identificacion" placeholder="Tipo de identificacion" required>
                </div>
                <div class="form-group">
                  <label for="num_identificacion">Ingresos</label>
                  <input type="text" class="form-control" id="num_identificacion" placeholder="Numero de identificacion" required>
                </div>
              </div>                
            </div>
            <!-- /.box-body -->
            <div class="col-md-6">
              <div class="box-body">
                <div class="form-group">
                  <label for="g_empresa">Giro de la empresa</label>
                  <input type="text" class="form-control" id="g_empresa" placeholder="Giro de la empresa" required>
                </div>
                <div class="form-group">
                  <label for="c_ingresos">Ciclo de ingresos</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">INE</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="t_empresa">Tipo de empresa</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">INE</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="d_empresa">Direccion de la empresa</label>
                  <input type="text" class="form-control" id="d_empresa" placeholder="Direccion de la empresa" required>
                </div>
              </div>                
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            </div>
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos referencia 1</h3>
            </div>
            <div class="col-md-12">
              <div class="box-body">
                <div class="form-group">
                  <label for="r_nombre">Nombre referencia 1</label>
                  <input type="text" class="form-control" id="r_nombre" placeholder="Nombre referencia" required>
                </div>
                <div class="form-group">
                  <label for="r_relacion">Relacion</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">INE</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="r_fconocidos">Fecha de conocidos</label>
                  <input type="text" class="form-control" id="r_fconocidos" placeholder="Fecha de conocidos" required>
                </div>
                <div class="form-group">
                  <label for="r_telefono">Telefono</label>
                  <input type="text" class="form-control" id="r_telefono" placeholder="Telefono de la referencia" required>
                </div>
              </div>                
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            </div>
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos referencia 2</h3>
            </div>

            <div class="col-md-12">
              <div class="box-body">
                <div class="form-group">
                  <label for="r_nombre2">Nombre referencia 2</label>
                  <input type="text" class="form-control" id="r_nombre2" placeholder="Nombre de la referencia" required>
                </div>
                <div class="form-group">
                  <label for="r_relacion2">Relacion</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">INE</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="r_fconocidos2">Fecha de conocidos</label>
                  <input type="text" class="form-control" id="r_fconocidos2" placeholder="Fecha de conocidos" required>
                </div>
                <div class="form-group">
                  <label for="r_telefono2">Telefono</label>
                  <input type="text" class="form-control" id="r_telefono2" placeholder="Telefono de la referencia" required>
                </div>
              </div>                
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            </div>
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-footer">
              <button type="submit" class="btn btn-primary pull-right">Guardar</button>
            </div>
          </div>
        </div>
      </form> 

      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->