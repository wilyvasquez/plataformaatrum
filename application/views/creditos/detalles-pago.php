<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detalles pago <strong>Juan Cruz Perez</strong>
        <small>#001</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Principal</a></li>
        <li><a href="../pagos/1/1">Pagos Juan</a></li>
        <li class="active">Detalles pago</li>
      </ol>
    </section>

    <div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Nota:</h4>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua..
      </div>
    </div>

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-file-text-o"></i> Desgloce de cobro
            <small class="pull-right">Fecha: <?= date("Y-m-d") ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          De
          <address>
            <strong>Atrum Motors de Mexico SA de CV.</strong><br>
            Av. Simbolos Patrios 1002<br>
            Ex Hacienda Candiani Oaxaca, CP 68000<br>
            Tel: (951) 144-8805<br>
            Correo: info@suzukiatrum.com.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          a
          <address>
            <strong>John Doe</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            Tel: (555) 539-1037<br>
            Correo: john.doe@example.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Numero Pago #001</b><br>
          <br>
          <b>Recibo ID:</b> 4F3S8J<br>
          <b>Pagado:</b> 2/22/2014<br>
          <b>Contrato:</b> 968-34567
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>#</th>
              <th>Producto</th>
              <!-- <th>Monto</th> -->
              <th>Descripcion</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>Pago moto</td>
              <!-- <td>$1,885.75</td> -->
              <td>Gixxer Sf GP</td>
              <td>$2,564.62</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Seguro</td>
              <!-- <td>$527.09</td> -->
              <td>Seguro limitado</td>
              <td>$50.00</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Accesorios</td>
              <!-- <td>0</td> -->
              <td>Sin accesorios</td>
              <td>$0.00</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Moras</td>
              <!-- <td>$32.00</td> -->
              <td>2 dias de atraso</td>
              <td>$25.99</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Otros gastos</td>
              <!-- <td>$0.00</td> -->
              <td>Sin otros</td>
              <td>$25.99</td>
            </tr>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Metodos de Pago:</p>
          <img src="<?= base_url() ?>assets/img/credit/visa.png" alt="Visa">
          <img src="<?= base_url() ?>assets/img/credit/mastercard.png" alt="Mastercard">
          <img src="<?= base_url() ?>assets/img/credit/american-express.png" alt="American Express">
          <img src="<?= base_url() ?>assets/img/credit/paypal2.png" alt="Paypal">

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            Los metodos de pago pueden variar, dependiendo de la sucursal de donde se realice este cobro, para mayor informacion contactar a gerencia.
          </p>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Monto adeudado <?= date("d-m-Y") ?></p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td>$250.30</td>
              </tr>
              <tr>
                <th>I.V.A</th>
                <td>$10.34</td>
              </tr>
              <tr>
                <th>Descuento:</th>
                <td>$5.80</td>
              </tr>
              <tr>
                <th>Total:</th>
                <td>$265.24</td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="../imprimir" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimir</a>
          <button type="button" class="btn btn-default"><i class="fa fa-gg"></i> Otros Gastos
          </button>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>