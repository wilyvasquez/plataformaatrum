<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller']   = 'LoginCtr';
$route['404_override']         = 'LoginCtr/error_404';
$route['translate_uri_dashes'] = FALSE;

$route['logout']      = 'LoginCtr/logout';
$route['user']        = 'AdminCtr/usuarios';
$route['userAlta']    = 'AdminCtr/FormUser';
/*rutas motos*/
$route['motos']          = 'AdminCtr/motocicletas';
$route['motoAlta']       = 'AdminCtr/FormMotos';
$route['UpMotos/(:num)'] = 'AdminCtr/UpMotos/$1';
/*end rutas motos*/

/*rutas creditos*/
$route['credito']          = 'AdminCtr/creditos';
$route['creditoAlta']      = 'AdminCtr/FormCredito';
$route['UpCredito/(:num)'] = 'AdminCtr/UpCredito/$1';
// end rutas credito

$route['referencia']  = 'AdminCtr/referencia';
$route['estadistica'] = 'AdminCtr/estadisticas';
$route['perfil']      = 'AdminCtr/perfil';
$route['perfilUser']  = 'AdminCtr/perfilUser';

/*rutas controlador creditos*/
$route['creditos']  = 'CreditoCtr';
$route['principal'] = 'CreditoCtr/creditos';
$route['acredito']  = 'CreditoCtr/activos_creditos';
$route['pcredito']  = 'CreditoCtr/pausados_creditos';
$route['atcredito'] = 'CreditoCtr/atrasado_creditos';

/*rutas controlador clientes*/
$route['clientes']   = 'CreditoCtr/clientes';
$route['aclientes']  = 'CreditoCtr/activos_clientes';
$route['pclientes']  = 'CreditoCtr/pausados_clientes';
$route['atclientes'] = 'CreditoCtr/atrasado_clientes';

/*pagos clientes*/
$route['pagos/(:num)/(:num)'] = 'CreditoCtr/pagos_clientes/$1/$1';
$route['detalles/(:num)']     = 'CreditoCtr/detalles_pago/$1';
$route['PCliente']            = 'CreditoCtr/perfil_cliente';
$route['imprimir']            = 'CreditoCtr/pagos_print';


$route['prueba'] = 'CreditoCtr/prueba';