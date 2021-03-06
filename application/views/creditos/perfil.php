 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Perfil Cliente
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>principal"><i class="fa fa-home"></i> Principal</a></li>
        <li><a href="../clientes">Clientes</a></li>
        <li class="active">Peril Cliente</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <div class="col-md-4 col-sm-4 col-xs-4">
                <img class="profile-user-img img-responsive img-circle" src="<?= base_url() ?>assets/img/user_default.png" alt="User profile picture">
              </div>
              <div class="col-md-4 col-sm-4 col-xs-4">
                <img class="profile-user-img img-responsive img-circle" src="<?= base_url() ?>assets/img/user_default.png" alt="User profile picture">                
              </div>
              <div class="col-md-4 col-sm-4 col-xs-4">
                <img class="profile-user-img img-responsive img-circle" src="<?= base_url() ?>assets/img/user_default.png" alt="User profile picture">                
              </div>

              <h3 class="profile-username text-center">Nina Mcintire</h3>

              <p class="text-muted text-center">Software Engineer</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Telefono</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Correo</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Numero Cliente</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

              <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Sobre Nina</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Contacto Directo</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Direccion</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Direccion trabajo</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notas</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-8">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Contratos</a></li>
              <li><a href="#timeline" data-toggle="tab">Linea del Tiempo</a></li>
              <li><a href="#cliente" data-toggle="tab">Datos Cliente</a></li>
              <li><a href="#empresa" data-toggle="tab">Datos Empresa</a></li>
              <li><a href="#referencias" data-toggle="tab">Referencias</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?= base_url() ?>assets/img/user_default.png" alt="user image">
                        <span class="username">
                          <a href="../pagos/1">Contrato Numero 000-000254.
                            <span class="pull-right-container">
                              <small class="label bg-primary">Terminado</small>
                            </span>
                          </a>
                          <!-- <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a> -->
                        </span>
                    <span class="description">Generado - 2 de Junio de 2018 </span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Motocicleta <strong>Gixxer Sf GP</strong>, modelo <strong>2018</strong>, numero de serie <strong>JHGDKJDHKJKHD</strong>, numero de motor <strong>KJHAHSOIHAS</strong> con un precio de contado de <strong>$25,000.00</strong>. Pago actual numero <strong>6/12</strong>.
                  </p>
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post clearfix">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?= base_url() ?>assets/img/user_default.png" alt="User Image">
                        <span class="username">
                          <a href="../pagos/1">Contrato Numero 000-000289. 
                            <span class="pull-right-container">
                              <small class="label bg-green">Cumpliendo</small>
                            </span>
                          </a>
                          <!-- <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a> -->
                        </span>
                    <span class="description">Generado - 25 de Junio de 2018 </span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Motocicleta <strong>Gixxer Sf GP</strong>, modelo <strong>2018</strong>, numero de serie <strong>JHGDKJDHKJKHD</strong>, numero de motor <strong>KJHAHSOIHAS</strong> con un precio de contado de <strong>$25,000.00</strong>. Pago actual numero <strong>6/12</strong>.
                  </p>
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?= base_url() ?>assets/img/user_default.png" alt="User Image">
                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <!-- <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a> -->
                        </span>
                    <span class="description">Posted 5 photos - 5 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <img class="img-responsive" src="<?= base_url() ?>assets/img/photo1.png" alt="Photo">
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <img class="img-responsive" src="<?= base_url() ?>assets/img/photo2.png" alt="Photo">
                          <br>
                          <img class="img-responsive" src="<?= base_url() ?>assets/img/photo3.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <img class="img-responsive" src="<?= base_url() ?>assets/img/photo4.jpg" alt="Photo">
                          <br>
                          <img class="img-responsive" src="<?= base_url() ?>assets/img/photo1.png" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                      <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                      </div>
                      <!-- <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div> -->
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                      <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                      </h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                      <div class="timeline-body">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="cliente">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="nombre" class="col-sm-3 control-label">Nombre</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="nombre">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Direccion" class="col-sm-3 control-label">Direccion</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="Direccion">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="telefono" class="col-sm-3 control-label">Telefono</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="telefono">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="correo" class="col-sm-3 control-label">Correo</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="correo">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="genero" class="col-sm-3 control-label">Genero</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="genero">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="identificacion" class="col-sm-3 control-label">No Identificacion</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="identificacion">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="curp" class="col-sm-3 control-label">Curp</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="curp">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="rfc" class="col-sm-3 control-label">RFC</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="rfc">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="ocupacion" class="col-sm-3 control-label">Ocupacion</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="ocupacion">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="cp" class="col-sm-3 control-label">Codigo Postal</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="cp">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="ecivil" class="col-sm-3 control-label">Estado Civil</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="ecivil">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="t_vivienda" class="col-sm-3 control-label">Tipo vivienda</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="t_vivienda">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-3 control-label">Skills</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="empresa">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Nombre</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputName" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Giro de la empresa</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Propiedad empresa</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Fecha de ingreso</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputSkills" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-3 control-label">Ciclo de ingresos</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputSkills" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-3 control-label">Cargo del cliente</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputSkills" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-3 control-label">Tipo de empresa</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputSkills" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-3 control-label">Ingresos</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputSkills" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-3 control-label">Direccion empresa</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputSkills" >
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="referencias">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nombre</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Tipo</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Fecha</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Telefono</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <hr>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Nombre</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Tipo</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Fecha</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Telefono</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->