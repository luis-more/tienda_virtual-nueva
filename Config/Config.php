<?php

//define("BASE_URL", "http://localhost/tienda_virtual/");
const BASE_URL = "http://localhost/tienda_virtual";

//Zona horaria
date_default_timezone_set('America/Lima');

//Datos de conexión a Base de Datos
const DB_HOST = "localhost";
const DB_NAME = "bd_tiendavirtual";
const DB_USER = "root";
const DB_PASSWORD = "";
const DB_CHARSET = "utf8";

//Deliminadores decimal y millar Ej. 24,1989.00
const SPD = ".";
const SPM = ",";

//Simbolo de moneda
const SMONEY = "S/";
const CURRENCY = "USD";

//Datos envio de correo
const NOMBRE_REMITENTE = "Tienda Virtual";
const EMAIL_REMITENTE = "moreweb17@gmail.com";
const NOMBRE_EMPESA = "Tienda Virtual More";
const WEB_EMPRESA = "http://localhost/tienda_virtual/";

const CAT_SLIDER = "1,2,3";
const CAT_BANNER = "4,5,6";

//Datos Empresa
const DIRECCION = "Jr Santo Toribio c/8 Rioja - Perú";
const TELEMPRESA = "912815883";
const EMAIL_EMPRESA = "moreweb17@gmail.com";
const EMAIL_PEDIDOS = "moreweb17@gmail.com";


//Datos para Encriptar / Desencriptar
const KEY = 'moreweb17';
const METHODENCRIPT = "AES-128-ECB";

//Envío
const COSTOENVIO = 20;




//Api PayPal
//SANDBOX PAYPAL
const URLPAYPAL = "https://api-m.sandbox.paypal.com";
const IDCLIENTE = "AYcF2p8R-9gV_iUQ1AGdOz_6vOAc_jwwUSfCC4FQr6bWLT_7_d4mbDFrv1ulNnelVZcicrJwgwVwJIRF";
const SECRET = "EIhyWpvOuPhIBhTKG54dyTJ2HtFc-EbegpQgsyqQkHKqRzZTu0zzdHr9_M7A7u25hNG0o_NySx8wBuCt";
	//LIVE PAYPAL
	//const IDCLIENTE = "AWBtVubwv1loCQFkpbwVdxw3GN9v4wj8ieLQPCpm8i8v0iwHSO_wc1_fWPNqldrcrPh1RqQ1bIcZPKWD";
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const SECRET = "ELCYtuxTFft8kEuAhcg8jE7_Bi31BnMd8E4DilpsnnsgXnZRUA8AKiXHwOVSPVu7xFIDZYw_6AjXulyC";
