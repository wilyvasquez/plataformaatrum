 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detalles credito
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>principal"><i class="fa fa-home"></i> Principal</a></li>
        <li><a href="../creditos">Creditos</a></li>
        <li class="active">Detalles credito</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="<?= base_url() ?>assets/img/user_default.png" alt="User profile picture">
              <h3 class="profile-username text-center">Nina Mcintire</h3>

              <p class="text-muted text-center">Software Engineer</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Motocicleta</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Numero Serie</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Numero Motor</b> <a class="pull-right">13,287</a>
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
              <h3 class="box-title">Sobre Contacto</h3>
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
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Datos</a></li>
              <li><a href="#timeline" data-toggle="tab">Linea del Tiempo</a></li>
              <li><a href="#cliente" data-toggle="tab">Observaciones</a></li>
              <li class="pull-right">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="text-decoration:none;color:black; font-size: 14px;">
                  Menu <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" style="border-color: #67A6E5">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="../pagos/1">Ver pagos</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Generar Cotizacion</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Estado de Cuenta</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Hoja de Pagos</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Actualizar fecha</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="../pcliente/1">Informacion del Cliente</a></li>
                </ul>
              </li>
              <!-- <li><a href="#referencias" data-toggle="tab">Referencias</a></li> -->
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?= base_url() ?>assets/img/user_default.png" alt="user image">
                        <span class="username">
                          <a href="#">Contrato Numero 000-000254.
                            <span class="pull-right-container">
                              <small class="label bg-primary">Terminado</small>
                            </span>
                          </a>
                          <!-- <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a> -->
                        </span>
                    <span class="description">Generado - 2 de Junio de 2018 </span>
                  </div>
                  <!-- /.user-block -->
                  <p style="font-size: 16px">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                          <p><strong>Motocicleta:</strong> Gixxer SF GP</p>
                          <p><strong>Modelo:</strong> 2018</p>
                          <p><strong>Numero de serie:</strong> JHGHJGHGJHH</p>
                          <p><strong>Numero de motor:</strong> JHGHJGHGJHH</p>
                          <p><strong>Precio: </strong>$65,000.00</p>                  
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                          <p><strong>Tipo credito:</strong> Suzucredit Oaxaca</p>
                          <p><strong>Plazo:</strong> 24 pagos quincenales</p>
                          <p><strong>Tipo Seguro:</strong>Limitado</p>
                          <p><strong>Precio Seguro:</strong> $35,00.00</p>
                          <p><strong>Pago actual:</strong> 6/12</p>                   
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                          <p><strong>Base credito:</strong> $35,000.00</p>
                          <p><strong>Importe credito:</strong> $45,000.00</p>
                          <p><strong>Apertura:</strong> $439.00</p>
                          <p><strong>Enganche:</strong> $35,00.00</p>
                          <p><strong>Bono:</strong> $0.00</p>                       
                        </div>                        
                      </div>
                    </div>
                    <!-- Motocicleta <strong>Gixxer Sf GP</strong>, modelo <strong>2018</strong>, numero de serie <strong>JHGDKJDHKJKHD</strong>, numero de motor <strong>KJHAHSOIHAS</strong> con un precio de contado de <strong>$25,000.00</strong>. Pago actual numero <strong>6/12</strong>. -->
                  </p>
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?= base_url() ?>assets/img/user_default.png" alt="User Image">
                        <span class="username">
                          <a href="#">Fotos Motocicleta</a>
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
                 <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?= base_url() ?>assets/img/user_default.png" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <!-- <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a> -->
                        </span>
                    <span class="description">Shared publicly - 7:30 PM today</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>
                  <hr>
                  <form class="form-horizontal">
                    <div class="form-group margin-bottom-none">
                      <div class="col-sm-9">
                        <input class="form-control input-sm" placeholder="Escribir observacion">
                      </div>
                      <div class="col-sm-3">
                        <button type="submit" class="btn btn-primary pull-right btn-block btn-sm">Enviar</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
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